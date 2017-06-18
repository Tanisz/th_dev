<?php

/**
 * This is the model class for table "projects".
 *
 * The followings are the available columns in table 'projects':
 * @property integer $projects_id
 * @property integer $project_type_id
 * @property string $project_name
 * @property integer $conditions_id
 * @property string $create_date
 * @property string $public_date
 * @property integer $public_user_id
 * @property string $download_link
 * @property string $sheduled_release_date
 * @property string $picture_linke
 */
class Projects extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'projects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projects_id, project_type_id, project_name', 'required'),
			array('projects_id, project_type_id, conditions_id, public_user_id', 'numerical', 'integerOnly'=>true),
			array('project_name', 'length', 'max'=>500),
			array('download_link, picture_linke', 'length', 'max'=>1000),
                        array('text', 'length', 'max'=>4000),
			array('create_date, public_date, sheduled_release_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('projects_id, project_type_id, project_name, conditions_id, create_date, public_date, public_user_id, download_link, sheduled_release_date, picture_linke,text', 'safe', 'on'=>'search'),
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
                    'conditions' => array(self::BELONGS_TO, 'Conditions', 'conditions_id'),
                    'projects_part' => array(self::HAS_MANY, 'ProjectsPart', 'projects_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'projects_id' => 'Projects',
			'project_type_id' => 'Project Type',
			'project_name' => 'Project Name',
			'conditions_id' => 'Conditions',
			'create_date' => 'Create Date',
			'public_date' => 'Public Date',
			'public_user_id' => 'Public User',
			'download_link' => 'Download Link',
			'sheduled_release_date' => 'Sheduled Release Date',
			'picture_linke' => 'Picture Linke',
                        'text' => 'Text',
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

		$criteria->compare('projects_id',$this->projects_id);
		$criteria->compare('project_type_id',$this->project_type_id);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('conditions_id',$this->conditions_id);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('public_date',$this->public_date,true);
		$criteria->compare('public_user_id',$this->public_user_id);
		$criteria->compare('download_link',$this->download_link,true);
		$criteria->compare('sheduled_release_date',$this->sheduled_release_date,true);
		$criteria->compare('picture_linke',$this->picture_linke,true);
                $criteria->compare('text',$this->text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Projects the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
