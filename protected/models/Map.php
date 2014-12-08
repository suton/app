<?php
class Map extends CActiveRecord
{
	public $title;
	public $ce_lat;
	public $ce_lon;
	public $zoom;
	public $sw_lat;
	public $sw_lon;
	public $ne_lat;
	public $ne_lon;
        
        public function tableName() {
            return 'Map';
        }
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ce_lat, ce_lon, sw_lat, sw_lon, ne_lat, ne_lon', 'numerical'),
			array('zoom', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('title, sw_lat, sw_lon, ne_lat, ne_lon', 'safe', 'on'=>'search'),
		);
	}
        public function relations() {
                return array(
                        'building'=>array(self::BELONGS_TO,'Building','building_id')
                );
        }
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
//			'title' => Yii::t('ui', 'Title'),
//			'sw_lat' => Yii::t('ui', 'SW Latitude'),
//			'sw_lon' => Yii::t('ui', 'SW Longitude'),
//			'ne_lat' => Yii::t('ui', 'NE Latitude'),
//			'ne_lon' => Yii::t('ui', 'NE Longitude'),
                        
		);
	}
        public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/**
	 * This event is raised after the model instance is created by new operator.
	 */
	protected function afterConstruct()
	{
		parent::afterConstruct();

		if($this->scenario=='test1')
		{
			$this->ce_lat=58.3844382319306;
			$this->ce_lon=26.7022705078125;
			$this->zoom=5;
			$this->sw_lat=58.23785;
			$this->sw_lon=24.38965;
			$this->ne_lat=59.46518;
			$this->ne_lon=27.07031;
		}

		if($this->scenario=='test2')
		{
			$this->ce_lat=null;
			$this->ce_lon=null;
			$this->zoom=null;
			$this->sw_lat=58.23785;
			$this->sw_lon=24.38965;
			$this->ne_lat=59.46518;
			$this->ne_lon=27.07031;
		}
                
                if($this->scenario=='test3')
		{
			$this->ce_lat=16.466048543507956;
			$this->ce_lon=102.82988548278765;
			$this->zoom=13;
			$this->sw_lat=16.46193;
			$this->sw_lon=102.81856;
			$this->ne_lat=16.46753;
			$this->ne_lon=102.82302;
                    
		}
	}
}