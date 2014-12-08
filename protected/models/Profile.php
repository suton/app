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
 * @property string $user_create_date
 * @property integer $user_status_id
 * @property string $sex
 *
 * The followings are the available model relations:
 * @property Apartment[] $apartments
 * @property FeeRent[] $feeRents
 * @property RentRoom[] $rentRooms
 * @property Reservation[] $reservations
 * @property UserStatus $userStatus
 */
class Profile extends CActiveRecord
{
        protected function afterFind ()
        {
               // convert to display format
           $this->birthdate = strtotime ($this->birthdate);
           $this->birthdate = date ('d-m-Y', $this->birthdate);

           parent::afterFind ();
        }
        public function afterSave() {
            // convert to display format
           $this->birthdate = strtotime ($this->birthdate);
           $this->birthdate = date ('d-m-Y', $this->birthdate);
            parent::afterSave();
        }

//        protected function beforeValidate ()
//        {
//               // convert to storage format
//           $this->birthdate = strtotime ($this->birthdate);
//           $this->birthdate = date ('Y-m-d', $this->birthdate);
//
//           return parent::beforeValidate ();
//        }
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
			array('fname,lname,email,tel', 'required'),
			array('user_status_id', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>30),
			array('password, fname, lname, email', 'length', 'max'=>100),
			array('tel', 'length', 'max'=>50),
			array('sex', 'length', 'max'=>1),
			array('user_create_date', 'safe'),
                        array('img', 'file', 'types'=>'jpg,gif,png','allowEmpty' =>TRUE,'maxSize'=>'3000000'),
                        //array('fname', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, fname, lname, tel, email, user_create_date, user_status_id, sex', 'safe', 'on'=>'search'),
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
                        'userinfo'=>array(self::HAS_ONE,'UserInfo','userid'),
			'apartments' => array(self::HAS_MANY, 'Apartment', 'owner_id'),
			'feeRents' => array(self::HAS_MANY, 'FeeRent', 'user_id'),
			'rentRooms' => array(self::HAS_MANY, 'RentRoom', 'user_id'),
			'reservations' => array(self::HAS_MANY, 'Reservation', 'user_id'),
			'userStatus' => array(self::BELONGS_TO, 'UserStatus', 'user_status_id'),
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
                        'birthdate'=>'วันเกิด',
			'user_create_date' => 'User Create Date',
			'user_status_id' => 'User Status',
			'sex' => 'Sex',
                        'img'=>'img'
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
		$criteria->compare('user_create_date',$this->user_create_date,true);
		$criteria->compare('user_status_id',$this->user_status_id);
		$criteria->compare('sex',$this->sex,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
