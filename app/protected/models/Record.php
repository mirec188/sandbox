<?php

/**
 * This is the model class for table "Email".
 *
 * The followings are the available columns in table 'Email':
 * @property integer $id
 * @property string $email
 * @property string $unsubscribeHash
 * @property integer $sendNewletter
 * @property string $createTime
 * @property string $updateTime
 *
 * The followings are the available model relations:
 * @property NewsletterHasEmail[] $newsletterHasEmails
 * @property User[] $users
 */
class Record extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Email the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, name', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'	=> $criteria,
		));
	}
	
	public function onBeforeSave($event) {
	
	}
	
	public function behaviors(){
		return array(
		
			
		);
	}	
}