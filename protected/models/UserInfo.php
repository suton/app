<?php

/**
 * This is the model class for table "user_info".
 *
 * The followings are the available columns in table 'user_info':
 * @property integer $userid
 * @property string $comment
 * @property string $facebook
 * @property string $twitter
 * @property string $googleplus
 * @property string $website
 *
 * The followings are the available model relations:
 * @property Usertable $user
 */
class UserInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid', 'required'),
			array('userid', 'numerical', 'integerOnly'=>true),
			array('comment', 'length', 'max'=>512),
			array('facebook, twitter, googleplus, website', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userid, comment, facebook, twitter, googleplus, website', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Usertable', 'userid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userid' => 'Userid',
			'comment' => 'Comment',
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
			'googleplus' => 'Googleplus',
			'website' => 'Website',
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

		$criteria->compare('userid',$this->userid);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('googleplus',$this->googleplus,true);
		$criteria->compare('website',$this->website,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
