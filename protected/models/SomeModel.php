<?php
class SomeModel extends CActiveRecord{
    public function tableName()
    {
            return 'usertable';
    }
    public function attributeLabels()
    {
            return array(
                    'id' => 'ID',
                    'username' => 'Username',
                    'password' => 'Password',
                    'fname' => 'Fname',
                    'lname' => 'Lname',
                    'tel' => 'Tel',
                    'email' => 'Email',
                    'user_create_date' => 'User Create Date',
                    'user_status_id' => 'User Status',
                    'sex' => 'Sex',
            );
    }
    public function afterSave( ) {
        $this->addImages( );
        parent::afterSave( );
    }
    public static function model($className=__CLASS__)
    {
            return parent::model($className);
    }
    public function addImages( ) {
        //If we have pending images
        if( Yii::app( )->user->hasState( 'images' ) ) {
            $userImages = Yii::app( )->user->getState( 'images' );
            //Resolve the final path for our images
            $path = Yii::app( )->getBasePath( )."/../images/uploads/{$this->id}/";
            //Create the folder and give permissions if it doesnt exists
            if( !is_dir( $path ) ) {
                mkdir( $path );
                chmod( $path, 0777 );
            }

            //Now lets create the corresponding models and move the files
            foreach( $userImages as $image ) {
                if( is_file( $image["path"] ) ) {
                    if( rename( $image["path"], $path.$image["filename"] ) ) {
                        chmod( $path.$image["filename"], 0777 );
                        $img = new Image( );
                        $img->size = $image["size"];
                        $img->mime = $image["mime"];
                        $img->name = $image["name"];
                        $img->source = "/images/uploads/{$this->id}/".$image["filename"];
                        $img->somemodel_id = $this->id;
                        if( !$img->save( ) ) {
                            //Its always good to log something
                            Yii::log( "Could not save Image:\n".CVarDumper::dumpAsString( 
                                $img->getErrors( ) ), CLogger::LEVEL_ERROR );
                            //this exception will rollback the transaction
                            throw new Exception( 'Could not save Image');
                        }
                    }
                } else {
                    //You can also throw an execption here to rollback the transaction
                    Yii::log( $image["path"]." is not a file", CLogger::LEVEL_WARNING );
                }
            }
            //Clear the user's session
            Yii::app( )->user->setState( 'images', null );
        }
    }
}
?>