<?php

/**
 * This is the model class for table "downloads".
 *
 * The followings are the available columns in table 'downloads':
 * @property integer $downloads_id
 * @property integer $download_type_id
 * @property string $filename
 * @property integer $projects_id
 */
class Downloads extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'downloads';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('download_type_id, filename, projects_id', 'required'),
			array('download_type_id, projects_id', 'numerical', 'integerOnly'=>true),
			array('filename', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('downloads_id, download_type_id, filename, projects_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'downloads_id' => 'Downloads',
			'download_type_id' => 'Download Type',
			'filename' => 'Filename',
			'projects_id' => 'Projects',
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

		$criteria->compare('downloads_id',$this->downloads_id);
		$criteria->compare('download_type_id',$this->download_type_id);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('projects_id',$this->projects_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Downloads the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
