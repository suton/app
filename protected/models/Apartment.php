<?php

/**
 * This is the model class for table "apartment".
 *
 * The followings are the available columns in table 'apartment':
 * @property integer $id
 * @property string $code
 * @property string $apartmentname
 * @property string $address
 * @property integer $amphur_id
 * @property integer $province_id
 * @property integer $zipcode
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $website
 * @property string $contact
 * @property string $description
 * @property string $pict_display
 * @property string $pict_item
 * @property integer $rent_max
 * @property integer $rent_min
 * @property integer $owner_id
 *
 * The followings are the available model relations:
 * @property Amphur $amphur
 * @property Province $province
 * @property Usertable $owner
 * @property FeeItem[] $feeItems
 * @property Room[] $rooms
 * @property RoomType[] $roomTypes
 */
class Apartment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apartment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('apartmentname, address, amphur_id, province_id, zipcode, phone, email, contact, rent_max, rent_min', 'required'),
			array('amphur_id, province_id, zipcode, rent_max, rent_min, owner_id', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>15),
			array('apartmentname, address, website, pict_display, pict_item', 'length', 'max'=>255),
			array('phone', 'length', 'max'=>10),
			array('fax', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			array('contact', 'length', 'max'=>100),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, code, apartmentname, address, amphur_id, province_id, zipcode, phone, fax, email, website, contact, description, pict_display, pict_item, rent_max, rent_min, owner_id', 'safe', 'on'=>'search'),
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
			'amphur' => array(self::BELONGS_TO, 'Amphur', 'amphur_id'),
			'province' => array(self::BELONGS_TO, 'Province', 'province_id'),
			'owner' => array(self::BELONGS_TO, 'Usertable', 'owner_id'),
			'feeItems' => array(self::HAS_MANY, 'FeeItem', 'apmt_id'),
			'rooms' => array(self::HAS_MANY, 'Room', 'apmt_id'),
			'roomTypes' => array(self::HAS_MANY, 'RoomType', 'apmt_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'รหัสหอพัก',
			'apartmentname' => 'ชื่อหอพัก',
			'address' => 'ที่อยู่หอพัก',
			'amphur_id' => 'อำเภอ',
			'province_id' => 'จังหวัด',
			'zipcode' => 'รหัสไปรษณีย์',
			'phone' => 'เบอร์โทรศัพท์',
			'fax' => 'Fax',
			'email' => 'Email',
			'website' => 'Website',
			'contact' => 'ติดต่อ',
			'description' => 'รายละเอียดหอพักของท่าน',
			'pict_display' => 'Pict Display',
			'pict_item' => 'Pict Item',
			'rent_max' => 'ราคาเช่าสูงสุด',
			'rent_min' => 'ราคาเช่าต่ำสุด',
			'owner_id' => 'Owner',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('apartmentname',$this->apartmentname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('amphur_id',$this->amphur_id);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('zipcode',$this->zipcode);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('pict_display',$this->pict_display,true);
		$criteria->compare('pict_item',$this->pict_item,true);
		$criteria->compare('rent_max',$this->rent_max);
		$criteria->compare('rent_min',$this->rent_min);
		$criteria->compare('owner_id',$this->owner_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apartment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
