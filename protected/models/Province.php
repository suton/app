<?php

/**
 * This is the model class for table "province".
 *
 * The followings are the available columns in table 'province':
 * @property integer $PROVINCE_ID
 * @property string $PROVINCE_CODE
 * @property string $PROVINCE_NAME
 * @property string $PROVINCE_NAME_ENG
 * @property integer $GEO_ID
 *
 * The followings are the available model relations:
 * @property Amphur[] $amphurs
 * @property Apartment[] $apartments
 * @property Building[] $buildings
 * @property Corporation[] $corporations
 * @property Districts[] $districts
 * @property Geography $gEO
 */
class Province extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'province';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PROVINCE_CODE, PROVINCE_NAME, PROVINCE_NAME_ENG', 'required'),
			array('GEO_ID', 'numerical', 'integerOnly'=>true),
			array('PROVINCE_CODE', 'length', 'max'=>2),
			array('PROVINCE_NAME, PROVINCE_NAME_ENG', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PROVINCE_ID, PROVINCE_CODE, PROVINCE_NAME, PROVINCE_NAME_ENG, GEO_ID', 'safe', 'on'=>'search'),
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
			'amphurs' => array(self::HAS_MANY, 'Amphur', 'PROVINCE_ID'),
			'apartments' => array(self::HAS_MANY, 'Apartment', 'province_id'),
			'buildings' => array(self::HAS_MANY, 'Building', 'province_id'),
			'corporations' => array(self::HAS_MANY, 'Corporation', 'province_id'),
			'districts' => array(self::HAS_MANY, 'Districts', 'PROVINCE_ID'),
			'gEO' => array(self::BELONGS_TO, 'Geography', 'GEO_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PROVINCE_ID' => 'Province',
			'PROVINCE_CODE' => 'รหัสจังหวัด',
			'PROVINCE_NAME' => 'จังหวัด',
			'PROVINCE_NAME_ENG' => 'Province Name Eng',
			'GEO_ID' => 'Geo',
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

		$criteria->compare('PROVINCE_ID',$this->PROVINCE_ID);
		$criteria->compare('PROVINCE_CODE',$this->PROVINCE_CODE,true);
		$criteria->compare('PROVINCE_NAME',$this->PROVINCE_NAME,true);
		$criteria->compare('PROVINCE_NAME_ENG',$this->PROVINCE_NAME_ENG,true);
		$criteria->compare('GEO_ID',$this->GEO_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Province the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
