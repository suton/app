<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BuildingController
 *
 * @author Suton Charoensiri <prasuton_123@hotmail.com>
 */
//Yii::app()->theme = 'backend';
Yii::app()->theme = 'metro';
class BuildingController extends Controller{
    
    /**
    * @var CActiveRecord the currently loaded data model instance.
    */
    private $_model;
    
    public function filters() {
        return array(
            'rights',
        );
    }
    
    public function loadFeeGroup($id){
        
            $model= RoomTypeFeeGroup::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }
    
    public function loadFeeItem($id,$type){
            //type d=daily m=monthly
            $model= RoomTypeFeeItem::model()->findAllByAttributes(array('fee_group_id'=>$id,'fee_type'=>$type));
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }
    
    public function actionAddRoom($building_id,$floor_id) {
        $room=new Room();
        if(!empty($_POST)){
            $room->attributes=$_POST['Room'];
            $room->floor_id=$_POST['floor_id'];
            $room->building_id=$_POST['building_id'];
            if($room->save()){
                
                $this->redirect(array('Btrader/roomtype'));
            }
        }
        if(Yii::app()->request->isAjaxRequest){
            $this->renderPartial('_addRoomDlg',array('room'=>$room,'building_id'=>$building_id,'floor_id'=>$floor_id),FALSE, TRUE);
            Yii::app()->end();
        }
    }
    public function actionEroom($room_id){
       $this->renderPartial('_eroom',array('room_id'=>$room_id),FALSE,TRUE);
    }

    public function actionEditRoom($room_id) {
        
        $room=  Room::model()->findByPk($room_id);
        if(!empty($_POST)){
            $room->attributes=$_POST['Room'];
            if($room->save())
            {
                if (Yii::app()->request->isAjaxRequest)
                {
                    echo CJSON::encode(array(
                        'status'=>'success', 
                        'div'=>"Classroom successfully added"
                        ));
                    exit;               
                }
                else
                    $this->redirect(array('Btrader/roomtype'));
            }
        }
//        if(Yii::app()->request->isAjaxRequest){
//            $this->render('_editRoomDlg',array('room'=>$room),FALSE,TRUE);
//        }
        
        if (Yii::app()->request->isAjaxRequest)
        {
            echo CJSON::encode(array(
                'status'=>'failure', 
                'div'=>$this->renderPartial('_editRoomDlg', array('room'=>$room), true)));
            exit;               
        }
        else
            $this->render('create',array('model'=>$model,));
    }
    
    public function actionAddFloor(){
        $floor=new Floor();
        if(!empty($_POST['Floor'])){
            $floor->attributes=$_POST['Floor'];
            $floor->building_id=$_POST['building_id'];
            if($floor->save()){
                $this->redirect(array('Btrader/roomtype'));
            }
        }
        if(Yii::app()->request->isAjaxRequest&&!empty($_GET['building_id'])){
            $this->renderPartial('_addFloorDlg',array('floor'=>$floor,'building_id'=>$_GET['building_id']),FALSE,TRUE);
        }
    }
    public function actionEditFloor($floor_id){
        $floor=  Floor::model()->findByPk($floor_id);
        if(!empty($_POST)){
            $floor->attributes=$_POST['Floor'];
            if($floor->save())$this->redirect (array('Btrader/roomtype'));
        }
        if(Yii::app()->request->isAjaxRequest){
            $this->renderPartial('_editFloorDlg',array(
                'floor'=>$floor,
                'asDialog'=>!empty($_GET['asDialog']),
            ), FALSE, TRUE);
            Yii::app()->end();
        }
    }
    public function actionDeleteFloor($floor_id) {
        Floor::model()->deleteByPk($floor_id);
        $this->redirect(array('Btrader/roomtype'));
    }
    public function actionRoomTypeCreate(){
        $roomtype =new RoomTypeFeeGroup();
        
        if(!empty($_POST)){
            $roomtype->attributes=$_POST['RoomTypeFeeGroup'];
            if($roomtype->save()){
                $this->redirect(array('Btrader/roomtype'));
            }else{
               // $this->redirect(array('sidebar/roomlist'));
            }
            
        }
        if(Yii::app()->request->isAjaxRequest){
            $this->renderPartial('_room_type_create',array('roomtype'=>$roomtype),false,true);
        }
    }

    //action for edit room type
    public function actionRoomTypeEdit($id){
        
        $model=  $this->loadFeeGroup($_GET['id']);
        $fee_item_monthly_model=  $this->loadFeeItem($id,'m');
        $fee_item_daily_model=  $this->loadFeeItem($id,'d');
        
        if(!empty($_POST)){
            $model->attributes=$_POST['RoomTypeFeeGroup'];
            $model->save();
            
            foreach ($fee_item_monthly_model as $index=>$item_row){
                   $item_row->fee_value=$_POST['RoomTypeFeeItem'][1][$index]['fee_value'];
                   $item_row->save();
            }
            foreach ($fee_item_daily_model as $index=>$item_row){
                   $item_row->fee_value=$_POST['RoomTypeFeeItem'][2][$index]['fee_value'];
                   $item_row->save();
            }
            $this->redirect(array('Btrader/roomtype'));
            
        }
        
        if (Yii::app()->request->isAjaxRequest) 
        {
           $this->renderPartial('room_type_edit', array(
                                          'model'=>$this->loadFeeGroup($id),
                                          'asDialog'=>!empty($_GET['asDialog']),
                                          'fee_item_monthly'=>  $this->loadFeeItem($id,'m'),
                                          'fee_item_daily'=>  $this->loadFeeItem($id,'d'),
                                        ),
                                 false,true);
            Yii::app()->end();
        }

    }
    
    public function actionMyupdate($id){
        $this->redirect(array("Sidebar/RoomList"));
    }

    public function actionRoomType(){
        
        $roomtype=new RoomTypeFeeGroup;
        if(!empty($_POST['RoomTypeFeeGroup'])){
            $roomtype->attributes=$_POST['RoomTypeFeeGroup'];
            if($roomtype->validate()){
                if($roomtype->save())
                $this->redirect(array('Btrader/roomtype'));
            }
        }

    }
    
     public function actionGetExtra($id){
        
        $model=  RoomTypeFeeItem::model()->findAllByAttributes(array('fee_group_id'=>$id));
        $arr=array();

        foreach ($model as $key => $value) {
          $arr[$key]["row"]="<tr class=\"toggle\">
                                <td></td>
                                <td>".$value->RoomTypeFeeID->fee_name."</td>
                                <td colspan=\"2\">".$value['fee_value']."</td>
                            </tr>";
        }       
        echo json_encode($arr);          
    }
    
    public function actionRoomTypeDelete($id){
        
        $delete=  RoomTypeFeeGroup::model()->findByPk($id);
        $delete->delete();
    }
    
    public function actionRoomTypeView($id){
        $roomtype=  RoomTypeFeeGroup::model()->findByPk($id);
        $this->render('room_type_view',array('roomtype'=>$roomtype));
    }

    public function actionView()
    {
            $building=$this->loadModel();
            $comment=$this->newComment($building);
            $map=  Map::model()->findByPk($building->id);

            $this->render('view',array(
                    'model'=>$building,
                    'comment'=>$comment,
                    'map'=>$map
            ));
    }
    /**
     * Creates a new comment.
     * This method attempts to create a new comment based on the user input.
     * If the comment is successfully created, the browser will be redirected
     * to show the created comment.
     * @param Post the post that the new comment belongs to
     * @return Comment the comment instance
     */
    protected function newComment($post)
    {
            $comment=new Comment;
            if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form')
            {
                    echo CActiveForm::validate($comment);
                    Yii::app()->end();
            }
            if(isset($_POST['Comment']))
            {
                    $comment->attributes=$_POST['Comment'];
                    if($post->addComment($comment))
                    {
                            if($comment->status==Comment::STATUS_PENDING)
                                    Yii::app()->user->setFlash('commentSubmitted','Thank you for your comment. Your comment will be posted once it is approved.');
                            $this->refresh();
                    }
            }
            return $comment;
    }
    public function actionDelete()
    {
            if(Yii::app()->request->isPostRequest)
            {
                    // we only allow deletion via POST request
                    $this->loadModel()->delete();
                    // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
                    if(!isset($_GET['ajax']))
                            $this->redirect(array('Btrader/roomtype'));
            }
            else
                    throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
            
    }

    public function actionUpdate()
    {//$this->redirect(array("sidebar/roomlist"));
            $model=$this->loadModel();
            $amenity=  Amenities::model()->findByPk($model->id);
            $map=  Map::model()->findByPk($model->id);
            if(isset($_POST['Building']))
            {
                    $model->attributes=$_POST['Building'];
                    $amenity->attributes=$_POST['Amenities'];
                    $amenity->save();
                    $map->attributes=$_POST['Map'];
                    $map->save();
                    if($model->save())
                            $this->redirect(array('Btrader/roomtype','id'=>$model->id));
            }
            
            $this->render('update',array(
                    'model'=>$model,
                    'amenity'=>$amenity,
                    'map'=>$map
            ));
    }
    public function actionCreate(){
        //Yii::app()->controller->id=='index';
        //echo $_POST['Amenities']['fans'];
        
        $building=new Building();
        $cor_id=  Corporation::model()->findByAttributes(array('owner_id'=>  Yii::app()->session['id']));
        $amenity=new Amenities();
        $map=new Map();
                
        if(isset($_POST['Building'])){
            $building->attributes=$_POST['Building'];
            $building->corporate_id=$cor_id->id;
            
            if($building->save()){
                
                if($amenity->isNewRecord){
                    $amenity->building_id=$building->id;
                    $amenity->attributes=$_POST['Amenities'];
                    $amenity->save();
                }
                if($map->isNewRecord){
                    $map->building_id=$building->id;
                    $map->attributes=$_POST['Map'];
                    $map->save();
                }
                
                $this->redirect(array('/Btrader/roomtype'));
            }
        }
        
        

        $this->render('create',array(
            'model'=>$building,
            'amenity'=>$amenity,
            'map'=>$map
        ));
        
    }
    
    public function actionUpdateAmphur(){
        $amphur=  Amphur::model()->findAll('PROVINCE_ID=:PROVINCE_ID',array(':PROVINCE_ID'=>(int)$_POST['Building']['province_id']));
        $return= CHtml::listData($amphur,'AMPHUR_ID','AMPHUR_NAME');
        echo CHtml::tag('option',array('value'=>''),'--กรุณาเลือกอำเภอ--',TRUE);
        foreach ($return as $amphureid=>$amphurname){
            echo CHtml::tag('option',array('value'=>$amphureid),CHtml::encode($amphurname),TRUE);
        }
    }
    
    public function actionUpdateDistrict() {
        $district=  Districts::model()->findAll('AMPHUR_ID=:AMPHUR_ID AND PROVINCE_ID=:PROVINCE_ID',
                array(
                    ':AMPHUR_ID'=>(int)$_POST['Building']['amphur_id'],
                    ':PROVINCE_ID'=>(int)$_POST['Building']['province_id']
                ));
        $data=  CHtml::listData($district, 'DISTRICT_ID', 'DISTRICT_NAME');
        echo CHtml::tag('option',array('value'=>''),'--กรุณาเลือกตำบล--',TRUE);
        foreach ($data as $key => $value) {
            echo CHtml::tag('option',array('value'=>$key),  CHtml::encode($value),TRUE);
        }
    }
    /**
     * Suggests tags based on the current user input.
     * This is called via AJAX when the user is entering the tags input.
     */
    public function actionSuggestTags()
    {
            if(isset($_GET['q']) && ($keyword=trim($_GET['q']))!=='')
            {
                    $tags=Tag::model()->suggestTags($keyword);
                    if($tags!==array())
                            echo implode("\n",$tags);
            }
    }
    
    public function loadModel()
    {
            if($this->_model===null)
            {
                    if(isset($_GET['id']))
                    {
                            if(Yii::app()->user->isGuest)
                                    $condition='status='.  Building::STATUS_PUBLISHED.' OR status='.Building::STATUS_ARCHIVED;
                            else
                                    $condition='';
                            //$this->_model=  Building::model()->findByPk($_GET['id']);
                            if(!empty(Yii::app()->session["id"]))$user_id=Yii::app()->session["id"];
                            $criteria = new CDbCriteria();
                            $criteria->condition = 'id=:id and author_id=:author_id';//ดูข้อมูลได้เฉพาะที่ตนเองสร้างเท่านั้น
                            $criteria->params = array(':id'=>$_GET['id'],'author_id'=>$user_id);
                            $this->_model=  Building::model()->find($criteria);
                    }
                    if($this->_model===null)
                            throw new CHttpException(404,'The requested page does not exist.');
            }
            return $this->_model;
    }
}

?>
