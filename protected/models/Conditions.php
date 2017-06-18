<?php

/**
 * This is the model class for table "conditions".
 *
 * The followings are the available columns in table 'conditions':
 * @property integer $conditions_id
 * @property double $translation
 * @property double $proofreading
 * @property integer $testing_status_id
 */
class Conditions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conditions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('conditions_id', 'required'),
			array('conditions_id, testing_status_id', 'numerical', 'integerOnly'=>true),
			array('translation, proofreading', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('conditions_id, translation, proofreading, testing_status_id', 'safe', 'on'=>'search'),
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
                    'testing_status' => array(self::HAS_ONE, 'TestingStatus', 'testing_status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'conditions_id' => 'Conditions',
			'translation' => 'Translation',
			'proofreading' => 'Proofreading',
			'testing_status_id' => 'Testing Status',
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

		$criteria->compare('conditions_id',$this->conditions_id);
		$criteria->compare('translation',$this->translation);
		$criteria->compare('proofreading',$this->proofreading);
		$criteria->compare('testing_status_id',$this->testing_status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Conditions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
