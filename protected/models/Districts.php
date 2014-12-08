<?php

/**
 * This is the model class for table "districts".
 *
 * The followings are the available columns in table 'districts':
 * @property integer $DISTRICT_ID
 * @property string $DISTRICT_CODE
 * @property string $DISTRICT_NAME
 * @property integer $AMPHUR_ID
 * @property integer $PROVINCE_ID
 * @property integer $GEO_ID
 *
 * The followings are the available model relations:
 * @property Geography $gEO
 * @property Amphur $aMPHUR
 * @property Province $pROVINCE
 */
class Districts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'districts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DISTRICT_CODE, DISTRICT_NAME', 'required'),
			array('AMPHUR_ID, PROVINCE_ID, GEO_ID', 'numerical', 'integerOnly'=>true),
			array('DISTRICT_CODE', 'length', 'max'=>6),
			array('DISTRICT_NAME', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DISTRICT_ID, DISTRICT_CODE, DISTRICT_NAME, AMPHUR_ID, PROVINCE_ID, GEO_ID', 'safe', 'on'=>'search'),
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
			'gEO' => array(self::BELONGS_TO, 'Geography', 'GEO_ID'),
			'aMPHUR' => array(self::BELONGS_TO, 'Amphur', 'AMPHUR_ID'),
			'pROVINCE' => array(self::BELONGS_TO, 'Province', 'PROVINCE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'DISTRICT_ID' => 'District',
			'DISTRICT_CODE' => 'รหัสตำบล',
			'DISTRICT_NAME' => 'ตำบล',
			'AMPHUR_ID' => 'Amphur',
			'PROVINCE_ID' => 'Province',
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

		$criteria->compare('DISTRICT_ID',$this->DISTRICT_ID);
		$criteria->compare('DISTRICT_CODE',$this->DISTRICT_CODE,true);
		$criteria->compare('DISTRICT_NAME',$this->DISTRICT_NAME,true);
		$criteria->compare('AMPHUR_ID',$this->AMPHUR_ID);
		$criteria->compare('PROVINCE_ID',$this->PROVINCE_ID);
		$criteria->compare('GEO_ID',$this->GEO_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Districts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
