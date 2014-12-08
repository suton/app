<?php

/**
 * This is the model class for table "room_type_fee_id".
 *
 * The followings are the available columns in table 'room_type_fee_id':
 * @property integer $fee_id
 * @property string $fee_name
 * @property string $fee_name_eng
 *
 * The followings are the available model relations:
 * @property RoomTypeFeeGroup[] $roomTypeFeeGroups
 */
class RoomTypeFeeId extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'room_type_fee_id';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fee_id', 'required'),
			array('fee_id', 'numerical', 'integerOnly'=>true),
			array('fee_name, fee_name_eng', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fee_id, fee_name, fee_name_eng', 'safe', 'on'=>'search'),
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
			'roomTypeFeeGroups' => array(self::MANY_MANY, 'RoomTypeFeeGroup', 'room_type_fee_item(fee_id, fee_group_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fee_id' => 'Fee',
			'fee_name' => 'Fee Name',
			'fee_name_eng' => 'Fee Name Eng',
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

		$criteria->compare('fee_id',$this->fee_id);
		$criteria->compare('fee_name',$this->fee_name,true);
		$criteria->compare('fee_name_eng',$this->fee_name_eng,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RoomTypeFeeId the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
