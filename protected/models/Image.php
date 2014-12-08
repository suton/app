<?php

/**
 * This is the model class for table "image".
 *
 * The followings are the available columns in table 'image':
 * @property integer $id
 * @property string $file
 * @property string $mime_type
 * @property integer $size
 * @property string $name
 * @property string $title
 * @property string $description
 * @property integer $uid
 */
class Image extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'image';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('size, uid', 'numerical', 'integerOnly'=>true),
			array('file, mime_type, name, title, description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, file, mime_type, size, name, title, description, uid', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'file' => 'File',
			'mime_type' => 'Mime Type',
			'size' => 'Size',
			'name' => 'Name',
			'title' => 'Title',
			'description' => 'Description',
			'uid' => 'Uid',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('mime_type',$this->mime_type,true);
		$criteria->compare('size',$this->size);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('uid',$this->uid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Image the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function afterSave( ) {
            $this->addImages( );
            parent::afterSave( );
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
