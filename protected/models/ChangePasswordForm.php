<?php

class ChangePasswordForm extends CFormModel
{
  public $currentPassword;
  public $newPassword;
  public $newPassword_repeat;
  private $_user;
  
  public function rules()
  {
    return array(
      array(
        'currentPassword', 'compareCurrentPassword'
      ),
      array(
        'currentPassword, newPassword, newPassword_repeat', 'required',
        'message'=>'ต้องกรอก',
      ),
      array(
        'newPassword_repeat', 'compare',
        'compareAttribute'=>'newPassword',
        'message'=>'รหัสผ่านไม่ตรงกัน',
      ),
      
    );
  }
  
  public function compareCurrentPassword($attribute,$params)
  {
    if( md5($this->currentPassword) !== $this->_user->password )
    {
      $this->addError($attribute,'รหัสผ่านเดิมไม่ถูกต้อง');
    }
  }
  
  public function init()
  {
    $this->_user = Usertable::model()->findByAttributes( array( 'id'=>Yii::app()->user->id) );
  }
  
  public function attributeLabels()
  {
    return array(
      'currentPassword'=>'รหัสผ่านปัจจุบัน',
      'newPassword'=>'รหัสผ่านใหม่',
      'newPassword_repeat'=>'ยืนยันรหัสผ่าน(Repetir)',
    );
  }
  
  public function changePassword()
  {
    $this->_user->password = md5($this->newPassword);
    if( $this->_user->save() )
      return true;
    return false;
  }
}