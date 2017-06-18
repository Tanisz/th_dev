<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $news_id
 * @property string $create_date
 * @property integer $create_user_id
 * @property string $public_date
 * @property string $test_mode
 * @property integer $public_user_id
 *
 * The followings are the available model relations:
 * @property NewsItems[] $newsItems
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('news_id, create_user_id', 'required'),
			array('news_id, create_user_id, public_user_id', 'numerical', 'integerOnly'=>true),
			array('test_mode', 'length', 'max'=>1),
			array('create_date, public_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('news_id, create_date, create_user_id, public_date, test_mode, public_user_id', 'safe', 'on'=>'search'),
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
			'newsItems' => array(self::HAS_MANY, 'NewsItems', 'news_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'news_id' => 'News',
			'create_date' => 'Create Date',
			'create_user_id' => 'Create User',
			'public_date' => 'Public Date',
			'test_mode' => 'Test Mode',
			'public_user_id' => 'Public User',
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

		$criteria->compare('news_id',$this->news_id);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('public_date',$this->public_date,true);
		$criteria->compare('test_mode',$this->test_mode,true);
		$criteria->compare('public_user_id',$this->public_user_id);
               
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
