<?php

/**
 * This is the model class for table "floor".
 *
 * The followings are the available columns in table 'floor':
 * @property integer $floor_id
 * @property string $floor_name
 * @property integer $building_id
 *
 * The followings are the available model relations:
 * @property Building $building
 */
class Floor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'floor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('floor_name', 'required'),
			array('building_id', 'numerical', 'integerOnly'=>true),
			array('floor_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('floor_id, floor_name, building_id', 'safe', 'on'=>'search'),
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
			'floor_id' => 'Floor',
			'floor_name' => 'Floor Name',
			'building_id' => 'Building',
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

		$criteria->compare('floor_id',$this->floor_id);
		$criteria->compare('floor_name',$this->floor_name,true);
		$criteria->compare('building_id',$this->building_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Floor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
