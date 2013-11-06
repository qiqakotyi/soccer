<?php

/**
 * This is the model class for table "leagues".
 *
 * The followings are the available columns in table 'leagues':
 * @property integer $league_id
 * @property string $league_name
 * @property string $fixtures_url
 * @property string $results_url
 * @property string $teams_url
 */
class Leagues extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'leagues';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('league_name, fixtures_url, results_url, teams_url', 'required'),
			array('league_name', 'length', 'max'=>25),
			array('fixtures_url, results_url, teams_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('league_id, league_name, fixtures_url, results_url, teams_url', 'safe', 'on'=>'search'),
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
			'league_id' => 'League',
			'league_name' => 'League Name',
			'fixtures_url' => 'Fixtures Url',
			'results_url' => 'Results Url',
			'teams_url' => 'Teams Url',
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

		$criteria->compare('league_id',$this->league_id);
		$criteria->compare('league_name',$this->league_name,true);
		$criteria->compare('fixtures_url',$this->fixtures_url,true);
		$criteria->compare('results_url',$this->results_url,true);
		$criteria->compare('teams_url',$this->teams_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Leagues the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
