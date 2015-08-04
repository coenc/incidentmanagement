<?php

/**
 * This is the model class for table "incidents".
 *
 * The followings are the available columns in table 'incidents':
 * @property integer $id
 * @property integer $project_id
 * @property integer $status_id
 * @property integer $user_id
 * @property integer $priority_id
 * @property integer $category_id
 * @property string $submit_date
 * @property string $title
 * @property string $subtitle
 * @property string $description
 * @property string $resolution

 *
 * The followings are the available model relations:
 * @property Statuses $status
 * @property Priorities $priority
 * @property Users $user
 * @property Projects $project
 */
class Incidents extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'incidents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_id, status_id, priority_id, user_id', 'numerical', 'integerOnly'=>true),
			array('title, subtitle, description, resolution', 'length', 'max'=>2000),
			array('submit_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('submit_date, title, subtitle, description, resolution', 'safe', 'on'=>'search'),
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
			'status' => array(self::BELONGS_TO, 'Statuses', 'status_id'),
			'priority' => array(self::BELONGS_TO, 'Priorities', 'priority_id'),
			'project' => array(self::BELONGS_TO, 'Projects', 'project_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'category' => array(self::BELONGS_TO, 'Categories', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'project_id' => 'Project',
			'user_id' => 'Developer',
			'status_id' => 'Status',
			'priority_id' => 'Prioriteit',
			'category_id' => 'Categorie',
			'submit_date' => 'Datum aangemeld',
			'title' => 'Titel',
			'subtitle' => 'Subtitel',
			'description' => 'Beschrijving',
			'resolution' => 'Oplossing',
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

		$criteria->compare('submit_date',$this->submit_date,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('subtitle',$this->subtitle,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('resolution',$this->resolution,true);
		
		//$sort->attributes = array(
		//
		//);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Incidents the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
