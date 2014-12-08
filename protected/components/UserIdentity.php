<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
        private $_id;
        private $admin_login;

        const ERROR_EMAIL_INVALID=3;
        const ERROR_STATUS_NOTACTIV=4;
        const ERROR_STATUS_BAN=5;
        const ADMIN_LOGIN=6;

        /**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
         
        public function filters()
        {
            return array(
            'rights',
            );
        }
        
        public function allowedActions()
        {
                return 'index, suggestedTags';
        }
        
        public function adminLoginStatus(){
            return $this->admin_login;
        }

        public function authenticate()
	{
                
                if(strpos($this->username,"@")){
                    $user= Usertable::model()->findByAttributes(array('email'=>  $this->username));
                }else{
                    $user= Usertable::model()->findByAttributes(array('username'=>$this->username));
                }
		
		if($user===null){
                        if(strpos($this->username, "@")){
                            $this->errorCode=self::ERROR_EMAIL_INVALID;
                        }else{
                            $this->errorCode=self::ERROR_USERNAME_INVALID;
                        }
		}else if ($user->isAdminPass($this->password)) {
                        $this->admin_login=  self::ADMIN_LOGIN;
                        $this->_id=$user->id;
			$this->username=$user->username;
                }else if(!$user->validatePassword($this->password)){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
                }else if($user->user_status_id==0){
                        $this->errorCode=  self::ERROR_STATUS_NOTACTIV;
                }else if($user->user_status_id==-1){
                        $this->errorCode=  self::ERROR_STATUS_BAN;
                }else {
			$this->_id=$user->id;
			$this->username=$user->username;
			$this->errorCode=self::ERROR_NONE;
		}
                return !$this->errorCode;
	}
	
	public function getId()
	{
		return $this->_id;
	}
}