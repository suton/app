<?php

/**
 * This is the model class for table "room_type_fee_group".
 *
 * The followings are the available columns in table 'room_type_fee_group':
 * @property integer $fee_group_id
 * @property string $room_type_name
 * @property integer $building_id
 *
 * The followings are the available model relations:
 * @property Building $building
 * @property RoomTypeFeeId[] $roomTypeFees
 */
class RoomTypeFeeGroup extends CActiveRecord
{
        public static function bNum(){
//            $roomTypeOfBuilding=  RoomTypeFeeGroup::model()->with(array(
//                'building'=>array(
//                    'condition'=>'building.id=36'
//                )
//                
//            ))->findAll();
            
            $roomTypeOfBuilding=  RoomTypeFeeGroup::model()->with(array(
                'building'=>array('with'=>array(
                    'corporate'=>array('with'=>array(
                        'owner'=>array('condition'=>'owner.id='.Yii::app()->user->id)
                    ))
                ))
            ))->findAll();

            return count($roomTypeOfBuilding);
        }

    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'room_type_fee_group';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('room_type_name, building_id', 'required'),
			array('building_id', 'numerical', 'integerOnly'=>true),
			array('room_type_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fee_group_id, room_type_name, building_id', 'safe', 'on'=>'search'),
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
			'roomTypeFees' => array(self::MANY_MANY, 'RoomTypeFeeId', 'room_type_fee_item(fee_group_id, fee_id)'),
                        'roomTypeFeeItem'=>array(self::HAS_MANY,'RoomTypeFeeItem','fee_group_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fee_group_id' => 'Fee Group',
			'room_type_name' => 'ประเภทห้อง',
			'building_id' => 'อาคาร',
		);
	}
        public function findRoomTypeFeeGroupUpdateByPk(){
            $rowModel=  $this->findByPk(72);
            return $rowModel;
        }

        public function searchRoomType($cor_id) {
            return new CActiveDataProvider($this,array(
                        'criteria'=>array(
                            'with'=>array(
                                'building'
                            ),
                            'condition'=>'building.corporate_id=:cor_id',
                            'params'=>array(':cor_id'=>$cor_id)
                        )
            ));
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
	public function search($building_id=null)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('fee_group_id',$this->fee_group_id);
		$criteria->compare('room_type_name',$this->room_type_name,true);
		//$criteria->compare('building_id',$building_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RoomTypeFeeGroup the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
}
