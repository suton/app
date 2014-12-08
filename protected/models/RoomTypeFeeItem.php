<?php

/**
 * This is the model class for table "room_type_fee_item".
 *
 * The followings are the available columns in table 'room_type_fee_item':
 * @property integer $fee_group_id
 * @property integer $fee_id
 * @property integer $fee_value
 * @property string $AUTOCOLLECTTYPE
 */
class RoomTypeFeeItem extends CActiveRecord
{
        public static function leastValueOfBuilding($id){

            $criteria=new CDbCriteria();
            $criteria->select='MIN(fee_value) as fee_value';
            $criteria->condition="fee_id=1000 AND feeItemFeeGroup.building_id=:building_id";
            $criteria->with=array('feeItemFeeGroup');
            $criteria->params=array('building_id'=>$id);
            $rent= RoomTypeFeeItem::model()->find($criteria);
            return $rent['fee_value'];
        }

        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'room_type_fee_item';
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
			array('fee_group_id, fee_id, fee_value', 'numerical', 'integerOnly'=>true),
			array('AUTOCOLLECTTYPE', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fee_group_id, fee_id, fee_value, AUTOCOLLECTTYPE', 'safe', 'on'=>'search'),
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
                    'feeItemFeeGroup'=>array(self::BELONGS_TO,'RoomTypeFeeGroup','fee_group_id'),
                    'RoomTypeFeeID'=>array(self::BELONGS_TO,'RoomTypeFeeID','fee_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fee_group_id' => 'Fee Group',
			'fee_id' => 'Fee',
			'fee_value' => 'Fee Value',
			'AUTOCOLLECTTYPE' => 'Autocollecttype',
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

		$criteria->compare('fee_group_id',$this->fee_group_id);
		$criteria->compare('fee_id',$this->fee_id);
		$criteria->compare('fee_value',$this->fee_value);
		$criteria->compare('AUTOCOLLECTTYPE',$this->AUTOCOLLECTTYPE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RoomTypeFeeItem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
