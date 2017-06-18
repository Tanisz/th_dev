<?php

/**
 * This is the model class for table "roles".
 *
 * The followings are the available columns in table 'roles':
 * @property integer $roles_id
 * @property integer $users_id
 * @property integer $role_type_id
 * @property string $allocate_date
 * @property string $back_date
 * @property integer $allocate_usr_id
 * @property integer $back_usr_id
 * @property string $storno
 * @property string $storno_date
 */
class Roles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'roles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('roles_id, users_id, allocate_date, allocate_usr_id', 'required'),
			array('roles_id, users_id, role_type_id, allocate_usr_id, back_usr_id', 'numerical', 'integerOnly'=>true),
			array('storno', 'length', 'max'=>1),
			array('back_date, storno_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('roles_id, users_id, role_type_id, allocate_date, back_date, allocate_usr_id, back_usr_id, storno, storno_date', 'safe', 'on'=>'search'),
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
			'roles_id' => 'Roles',
			'users_id' => 'Users',
			'role_type_id' => 'Role Type',
			'allocate_date' => 'Allocate Date',
			'back_date' => 'Back Date',
			'allocate_usr_id' => 'Allocate Usr',
			'back_usr_id' => 'Back Usr',
			'storno' => 'Storno',
			'storno_date' => 'Storno Date',
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

		$criteria->compare('roles_id',$this->roles_id);
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('role_type_id',$this->role_type_id);
		$criteria->compare('allocate_date',$this->allocate_date,true);
		$criteria->compare('back_date',$this->back_date,true);
		$criteria->compare('allocate_usr_id',$this->allocate_usr_id);
		$criteria->compare('back_usr_id',$this->back_usr_id);
		$criteria->compare('storno',$this->storno,true);
		$criteria->compare('storno_date',$this->storno_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Roles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
