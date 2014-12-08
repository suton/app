<?php

/**
 * This is the model class for table "corporation".
 *
 * The followings are the available columns in table 'corporation':
 * @property integer $id
 * @property string $code
 * @property string $corporation_name
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
 * @property integer $owner_id
 */
class Corporation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'corporation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, amphur_id, province_id, zipcode, owner_id', 'numerical', 'integerOnly'=>true),
                       // array('corporation_name','required'),
			array('code', 'length', 'max'=>15),
			array('corporation_name, address, website, contact', 'length', 'max'=>255),
			array('phone', 'length', 'max'=>10),
			array('fax', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, code, corporation_name, address, amphur_id, province_id, zipcode, phone, fax, email, website, contact, description, owner_id', 'safe', 'on'=>'search'),
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
                    'owner'=>array(self::BELONGS_TO,'Usertable','owner_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'corporation_name' => 'ชื่อนิติบุคคล',
			'address' => 'ที่อยู่โครงการ',
			'amphur_id' => 'อำเภอ',
			'province_id' => 'จังหวัด',
			'zipcode' => 'รหัสไปรษณีย์',
			'phone' => 'เบอร์โทรศัพท์',
			'fax' => 'Fax',
			'email' => 'Email',
			'website' => 'Website',
			'contact' => 'ชื่อผู้จัดการ',
			'description' => 'รายละเอียด',
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
		$criteria->compare('corporation_name',$this->corporation_name,true);
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
		$criteria->compare('owner_id',$this->owner_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Corporation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
