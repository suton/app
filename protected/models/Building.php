<?php

/**
 * This is the model class for table "building".
 *
 * The followings are the available columns in table 'building':
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property integer $district_id
 * @property integer $amphur_id
 * @property integer $province_id
 * @property integer $zipcode
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property integer $corporate_id
 * @property string $title
 * @property string $content
 * @property string $tags
 * @property integer $status
 * @property string $create_time
 * @property string $update_time
 * @property integer $author_id
 * @property integer $gallery_id
 *
 * The followings are the available model relations:
 * @property Amphur $amphur
 * @property Usertable $author
 * @property Districts $district
 * @property Corporation $corporate
 * @property Province $province
 * @property Comment[] $comments
 * @property Floor[] $floors
 * @property RoomTypeFeeGroup[] $roomTypeFeeGroups
 */
class Building extends CActiveRecord
{
        const STATUS_DRAFT=1;
	const STATUS_PUBLISHED=2;
	const STATUS_ARCHIVED=3;

	private $_oldTags;
        
        //return count building of corporation
        public static function bNum($u_id){
            $cor=  Corporation::model()->findByAttributes(array('owner_id'=>$u_id));
            $model= Building::model()->findAllByAttributes(array('corporate_id'=>$cor->id));
            return count($model);
        }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'building';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, address, zipcode, phone, email, title, content, status, district_id, amphur_id, province_id,building_type_id', 'required'),
			array('district_id, amphur_id, province_id, zipcode, corporate_id, status, author_id, gallery_id,building_type_id', 'numerical', 'integerOnly'=>true),
                        array('email','email','message'=>'รูปแบบอีเมลล์ไม่ถูกต้อง'),
			array('name, tags', 'length', 'max'=>100),
			array('address', 'length', 'max'=>255),
			array('phone,view', 'length', 'max'=>10),
			array('fax', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			array('title', 'length', 'max'=>500),
			array('create_time, update_time', 'safe'),
                        array('status', 'in', 'range'=>array(1,2,3)),
                        array('tags', 'match', 'pattern'=>'/^[\w\s,]+$/', 'message'=>'Tags can only contain word characters.'),
			array('tags', 'normalizeTags'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, address, district_id, amphur_id, province_id, zipcode, phone, fax, email, corporate_id,building_type_id, title, content, tags, status, create_time, update_time, author_id, gallery_id', 'safe', 'on'=>'search'),
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
			'author' => array(self::BELONGS_TO, 'Usertable', 'author_id'),
			'district' => array(self::BELONGS_TO, 'Districts', 'district_id'),
			'corporate' => array(self::BELONGS_TO, 'Corporation', 'corporate_id'),
			'province' => array(self::BELONGS_TO, 'Province', 'province_id'),
			'comments' => array(self::HAS_MANY, 'Comment', 'building_id'),
                        'commentCount' => array(self::STAT, 'Comment', 'building_id', 'condition'=>'status='.Comment::STATUS_APPROVED),
			'floor' => array(self::HAS_MANY, 'Floor', 'building_id'),
			'roomTypeFeeGroups' => array(self::HAS_MANY, 'RoomTypeFeeGroup', 'building_id'),
                        'buildingType'=>array(self::BELONGS_TO,'BuildingType','building_type_id'),
                        'amenity'=>array(self::HAS_ONE,'Amenities','id'),
                        'map'=>array(self::HAS_ONE,'Map','id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'ชื่ออาคาร',
			'address' => 'ที่อยู่',
			'district_id' => 'ตำบล',
			'amphur_id' => 'อำเภอ',
			'province_id' => 'จังหวัด',
			'zipcode' => 'รหัสไปรษณีย์',
			'phone' => 'เบอร์โทรศัพท์',
			'fax' => 'Fax',
			'email' => 'Email',
			'corporate_id' => 'Corporate',
                        'building_type_id'=>'ประเภท',
			'title' => 'ข้อความบรรยาย',
			'content' => 'รายละเอียด',
			'tags' => 'Tags',
			'status' => 'สถานะ',
			'create_time' => 'Create Time',
			'update_time' => 'ปรับปรุงข้อมูลล่าสุดเมื่อ',
			'author_id' => 'ผู้สร้าง',
			'gallery_id' => 'คลังรูปภาพ',
                        'view'=>'ยอดการเข้าชม'
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
	public function search($userid)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('district_id',$this->district_id);
		$criteria->compare('amphur_id',$this->amphur_id);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('zipcode',$this->zipcode);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('corporate_id',$this->corporate_id);
                $criteria->compare('building_type_id',  $this->building_type_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('author_id',$userid);
		$criteria->compare('gallery_id',$this->gallery_id);
                
                $criteria->order='id desc';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchx()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('district_id',$this->district_id);
		$criteria->compare('amphur_id',$this->amphur_id);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('zipcode',$this->zipcode);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('corporate_id',$this->corporate_id);
                $criteria->compare('building_type_id',  $this->building_type_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('gallery_id',$this->gallery_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Building the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
         /**
	 * @return string the URL that shows the detail of the post
	 */
	public function getUrl()
	{
		return Yii::app()->createUrl('building/view', array(
			'id'=>$this->id,
			'title'=>$this->title,
		));
	}

	/**
	 * @return array a list of links that point to the post list filtered by every tag of this post
	 */
	public function getTagLinks()
	{
		$links=array();
		foreach(Tag::string2array($this->tags) as $tag)
			$links[]=CHtml::link(CHtml::encode($tag), array('post/index', 'tag'=>$tag));
		return $links;
	}

	/**
	 * Normalizes the user-entered tags.
	 */
	public function normalizeTags($attribute,$params)
	{
		$this->tags=Tag::array2string(array_unique(Tag::string2array($this->tags)));
	}

	/**
	 * Adds a new comment to this post.
	 * This method will set status and post_id of the comment accordingly.
	 * @param Comment the comment to be added
	 * @return boolean whether the comment is saved successfully
	 */
	public function addComment($comment)
	{
		if(Yii::app()->params['commentNeedApproval'])
			$comment->status=Comment::STATUS_PENDING;
		else
			$comment->status=Comment::STATUS_APPROVED;
		$comment->building_id=$this->id;
		return $comment->save();
	}

	/**
	 * This is invoked when a record is populated with data from a find() call.
	 */
	protected function afterFind()
	{
		parent::afterFind();
		$this->_oldTags=$this->tags;
	}

	/**
	 * This is invoked before the record is saved.
	 * @return boolean whether the record should be saved.
	 */
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->create_time=$this->update_time=date('Y-m-d H:i:s');
				$this->author_id=Yii::app()->user->id;
			}
			else
				$this->update_time=date('Y-m-d H:i:s');
			return true;
		}
		else
			return false;
	}

	/**
	 * This is invoked after the record is saved.
	 */
	protected function afterSave()
	{
		parent::afterSave();
		Tag::model()->updateFrequency($this->_oldTags, $this->tags);
	}

	/**
	 * This is invoked after the record is deleted.
	 */
	protected function afterDelete()
	{
		parent::afterDelete();
		Comment::model()->deleteAll('building_id='.$this->id);
		Tag::model()->updateFrequency($this->tags, '');
	}
        
        public function behaviors()
        {
            return array(

                'coverBehavior' => array(
                    'class' => 'ImageAttachmentBehavior',
                    'previewHeight' => 164,
                    'previewWidth' => 164,
                    'extension' => 'png',
                    'directory' => Yii::getPathOfAlias('webroot') . '/images/post-cover/',
                    'url' => Yii::app()->request->baseUrl . '/images/post-cover/',
                    'versions' => array(
                        'original'=>array(
                            'resize' => array(600,400),
                        ),
                        'preview' => array(
                            'resize' => array(600,400),
                        ),
                        'small' => array(
                            'fit' => array(164, 164),
                        )
                    )
                ),


                'galleryBehavior' => array(
                    'class' => 'GalleryBehavior',
                    'idAttribute' => 'gallery_id',
                    'versions' => array(
                        'small' => array(
                            'centeredpreview' => array(220, 170),
                        ),
                        'medium' => array(
                            'cresize' => array(800, null),
                        )
                    ),
                    'name' => true,
                    'description' => true,
                    
                ),
            );
        }
}
