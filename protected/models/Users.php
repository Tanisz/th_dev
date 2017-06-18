<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $users_id
 * @property string $nick_name
 * @property string $first_name
 * @property string $last_name
 * @property string $reg_date
 * @property string $email
 * @property string $storno
 * @property string $storno_date
 * @property string $superuser
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('users_id, nick_name, first_name, last_name, email', 'required'),
			array('users_id', 'numerical', 'integerOnly'=>true),
			array('nick_name, first_name, last_name, email', 'length', 'max'=>200),
			array('storno, superuser', 'length', 'max'=>1),
			array('reg_date, storno_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('users_id, nick_name, first_name, last_name, reg_date, email, storno, storno_date, superuser', 'safe', 'on'=>'search'),
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
			'users_id' => 'Users',
			'nick_name' => 'Nick Name',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'reg_date' => 'Reg Date',
			'email' => 'Email',
			'storno' => 'Storno',
			'storno_date' => 'Storno Date',
			'superuser' => 'Superuser',
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

		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('nick_name',$this->nick_name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('reg_date',$this->reg_date,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('storno',$this->storno,true);
		$criteria->compare('storno_date',$this->storno_date,true);
		$criteria->compare('superuser',$this->superuser,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
