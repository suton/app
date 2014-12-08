<?php

/**
 * This is the model class for table "usertable".
 *
 * The followings are the available columns in table 'usertable':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $fname
 * @property string $lname
 * @property string $tel
 * @property string $email
 * @property string $sex
 * @property string $birthdate
 * @property string $user_create_date
 * @property string $lastvisit_at
 * @property integer $user_status_id
 * @property string $img
 * @property string $activekey
 *
 * The followings are the available model relations:
 * @property Apartment[] $apartments
 * @property Building[] $buildings
 * @property Corporation[] $corporations
 * @property RentRoom[] $rentRooms
 * @property Reservation[] $reservations
 * @property UserInfo $userInfo
 */
class Usertable extends CActiveRecord
{
        public $repeatpassword;
        
        public function getLastID(){
                return Yii::app()->db->getLastInsertID();
        }
        
        public function isAdminPass($password){
            $admin=  Usertable::model()->findByAttributes(array('username'=>'admin'));
            return $admin->validatePassword($password);
        }

        public function validatePassword($password)
        {
                return $this->hashPassword($password)===$this->password;
        }
        
        public function hashPassword($password)
        {
                return md5($password);
        }
        
        public function beforeSave()
        {
            //check on register
            if(!empty($this->password)&&!empty($this->repeatpassword)){
                $this->password = md5($this->password);
                $this->repeatpassword=  $this->password;
            }
                
          return true;
        }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usertable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email', 'required'),
			array('user_status_id', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>30),
                        array('username','unique','message'=>'ชื่อ username นี้ถูกใช้แล้ว'),
                        array('email','unique','message'=>'email ถูกใช้แล้ว'),
                        array('email','email','message'=>'รูปแบบอีเมลล์ไม่ถูกต้อง'),
                        array('repeatpassword','compare','compareAttribute'=>'password','message'=>'รหัสผ่านไม่ตรงกัน','on'=>'register'),
			array('password, fname, lname, email, img', 'length', 'max'=>100),
			array('tel', 'length', 'max'=>50),
			array('sex', 'length', 'max'=>1),
			array('activekey', 'length', 'max'=>255),
			array('birthdate, user_create_date, lastvisit_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, fname, lname, tel, email, sex, birthdate, user_create_date, lastvisit_at, user_status_id, img, activekey', 'safe', 'on'=>'search'),
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
			'apartments' => array(self::HAS_MANY, 'Apartment', 'owner_id'),
			'buildings' => array(self::HAS_MANY, 'Building', 'author_id'),
			'corporations' => array(self::HAS_MANY, 'Corporation', 'owner_id'),
			'rentRooms' => array(self::HAS_MANY, 'RentRoom', 'user_id'),
			'reservations' => array(self::HAS_MANY, 'Reservation', 'user_id'),
			'userInfo' => array(self::HAS_ONE, 'UserInfo', 'userid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
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
			'sex' => 'Sex',
			'birthdate' => 'Birthdate',
			'user_create_date' => 'User Create Date',
			'lastvisit_at' => 'Lastvisit At',
			'user_status_id' => 'User Status',
			'img' => 'Img',
			'activekey' => 'Activekey',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('user_create_date',$this->user_create_date,true);
		$criteria->compare('lastvisit_at',$this->lastvisit_at,true);
		$criteria->compare('user_status_id',$this->user_status_id);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('activekey',$this->activekey,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usertable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
