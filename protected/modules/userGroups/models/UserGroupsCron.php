<?php

/**
 * This is the model class for table "usergroups_cron".
 *
 * The followings are the available columns in table 'usergroups_cron':
 * @property string $id
 * @property string $name
 * @property integer $lapse
 * @property string $last_occurrence
 */
class UsergroupsCron extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return UsergroupsCron the static model class
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
		return Yii::app()->db->tablePrefix.'usergroups_cron';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lapse', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, lapse, last_occurrence', 'safe', 'on'=>'search'),
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
			'name' => Yii::t('UserGroupsModule.general','Name'),
			'lapse' => Yii::t('UserGroupsModule.admin','Lapse'),
			'last_occurrence' => Yii::t('UserGroupsModule.admin','Last Execution'),
			'status' => Yii::t('UserGroupsModule.admin','Status'),
			'description' => Yii::t('UserGroupsModule.admin','Description'),
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('lapse',$this->lapse);
		$criteria->compare('last_occurrence',$this->last_occurrence,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}