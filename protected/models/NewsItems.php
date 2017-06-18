<?php

/**
 * This is the model class for table "news_items".
 *
 * The followings are the available columns in table 'news_items':
 * @property integer $news_items_id
 * @property integer $news_id
 * @property string $text_hun
 * @property string $text_eng
 * @property string $title_hun
 * @property string $title_eng
 * @property string $mod_date
 * @property integer $mod_user_id
 *
 * The followings are the available model relations:
 * @property News $news
 */
class NewsItems extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('news_items_id, news_id, text_hun, title_hun, mod_date, mod_user_id', 'required'),
			array('news_items_id, news_id, mod_user_id', 'numerical', 'integerOnly'=>true),
			array('title_hun, title_eng', 'length', 'max'=>1000),
			array('text_eng', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('news_items_id, news_id, text_hun, text_eng, title_hun, title_eng, mod_date, mod_user_id', 'safe', 'on'=>'search'),
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
			'news' => array(self::BELONGS_TO, 'News', 'news_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'news_items_id' => 'News Items',
			'news_id' => 'News',
			'text_hun' => 'Text Hun',
			'text_eng' => 'Text Eng',
			'title_hun' => 'Title Hun',
			'title_eng' => 'Title Eng',
			'mod_date' => 'Mod Date',
			'mod_user_id' => 'Mod User',
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

		$criteria->compare('news_items_id',$this->news_items_id);
		$criteria->compare('news_id',$this->news_id);
		$criteria->compare('text_hun',$this->text_hun,true);
		$criteria->compare('text_eng',$this->text_eng,true);
		$criteria->compare('title_hun',$this->title_hun,true);
		$criteria->compare('title_eng',$this->title_eng,true);
		$criteria->compare('mod_date',$this->mod_date,true);
		$criteria->compare('mod_user_id',$this->mod_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewsItems the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
