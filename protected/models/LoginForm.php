<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $id;
        public $username;
	public $password;
	public $rememberMe;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Remember me next time',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate())
                        switch ($this->_identity->errorCode) {
                            case UserIdentity::ERROR_USERNAME_INVALID:
                                    $this->addError('username','Username ไม่ถูกต้อง');
                                    break;
                            case UserIdentity::ERROR_EMAIL_INVALID:
                                    $this->addError('username','email ไม่ถูกต้อง');
                                    break;
                            case UserIdentity::ERROR_STATUS_NOTACTIV:
                                    $this->addError('user_status_id','กรุณายืนยันการเปิดใช้งานระบบในอีเมลล์ของท่าน');
                                    break;;
                            case UserIdentity::ERROR_STATUS_BAN:
                                    $this->addError('user_status_id', 'บัญชีถูกบล็อก');
                                    break;
                            case UserIdentity::ERROR_PASSWORD_INVALID:
                                    $this->addError('password', 'รหัสผ่านไม่ถูกต้อง');
                                    break;

                        }
                            
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}

		if($this->_identity->errorCode===UserIdentity::ERROR_NONE || $this->_identity->adminLoginStatus()==UserIdentity::ADMIN_LOGIN)//login success
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
                        $this->id=  $this->_identity->getId();
			return true;
		}
		else
			return false;
	}
}
