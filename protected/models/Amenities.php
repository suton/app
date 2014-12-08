<?php

/**
 * This is the model class for table "amenities".
 *
 * The followings are the available columns in table 'amenities':
 * @property integer $building_id
 * @property integer $air_conditioning
 * @property integer $water_heater
 * @property integer $balcony
 * @property integer $sink
 * @property integer $pool
 * @property integer $internet
 * @property integer $microwave
 * @property integer $fridge
 * @property integer $cable_tv
 * @property integer $security_camera
 * @property integer $fans
 *
 * The followings are the available model relations:
 * @property Building $building
 */
class Amenities extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'amenities';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('building_id', 'required'),
			array('building_id, air_conditioning, water_heater, balcony, sink, pool, internet, microwave, fridge, cable_tv, security_camera, fans', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('building_id, air_conditioning, water_heater, balcony, sink, pool, internet, microwave, fridge, cable_tv, security_camera, fans', 'safe', 'on'=>'search'),
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
			'building' => array(self::BELONGS_TO, 'Building', 'building_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'building_id' => 'Building',
			'air_conditioning' => 'เครื่องปรับอากาศ',
			'water_heater' => 'เครื่องทำน้ำอุ่น',
			'balcony' => 'ระเบียง',
			'sink' => 'อ่างล้างจาก',
			'pool' => 'สระว่ายน้ำ',
			'internet' => 'อินเทอร์เน็ต',
			'microwave' => 'ไมโครเวฟ',
			'fridge' => 'ตู้เย็น',
			'cable_tv' => 'เคเบิ้ลทีวี',
			'security_camera' => 'กล้องวงจรปิด',
			'fans' => 'พัดลม',
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

		$criteria->compare('building_id',$this->building_id);
		$criteria->compare('air_conditioning',$this->air_conditioning);
		$criteria->compare('water_heater',$this->water_heater);
		$criteria->compare('balcony',$this->balcony);
		$criteria->compare('sink',$this->sink);
		$criteria->compare('pool',$this->pool);
		$criteria->compare('internet',$this->internet);
		$criteria->compare('microwave',$this->microwave);
		$criteria->compare('fridge',$this->fridge);
		$criteria->compare('cable_tv',$this->cable_tv);
		$criteria->compare('security_camera',$this->security_camera);
		$criteria->compare('fans',$this->fans);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Amenities the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
