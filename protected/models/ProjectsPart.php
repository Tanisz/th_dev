<?php

/**
 * This is the model class for table "projects_part".
 *
 * The followings are the available columns in table 'projects_part':
 * @property integer $projects_part_id
 * @property integer $projects_id
 * @property integer $conditions_id
 * @property string $sheduled_release_date
 * @property string $part_name
 */
class ProjectsPart extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'projects_part';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projects_id, part_name', 'required'),
			array('projects_id, conditions_id', 'numerical', 'integerOnly'=>true),
			array('part_name', 'length', 'max'=>200),
			array('sheduled_release_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('projects_part_id, projects_id, conditions_id, sheduled_release_date, part_name', 'safe', 'on'=>'search'),
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
                    //'projects' => array(self::BELONGS_TO, 'Projects', 'projects_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'projects_part_id' => 'Projects Part',
			'projects_id' => 'Projects',
			'conditions_id' => 'Conditions',
			'sheduled_release_date' => 'Sheduled Release Date',
			'part_name' => 'Part Name',
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

		$criteria->compare('projects_part_id',$this->projects_part_id);
		$criteria->compare('projects_id',$this->projects_id);
		$criteria->compare('conditions_id',$this->conditions_id);
		$criteria->compare('sheduled_release_date',$this->sheduled_release_date,true);
		$criteria->compare('part_name',$this->part_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProjectsPart the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
