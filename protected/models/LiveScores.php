<?php

/**
 * This is the model class for table "live_scores".
 *
 * The followings are the available columns in table 'live_scores':
 * @property integer $id
 * @property string $time
 * @property string $home
 * @property string $score
 * @property string $away
 * @property string $game_time
 * @property string $status
 * @property string $header
 */
class LiveScores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'live_scores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('time, home, score, away, game_time, status, header', 'required'),
			array('home, away', 'length', 'max'=>35),
			array('score, game_time', 'length', 'max'=>5),
			array('status', 'length', 'max'=>9),
			array('header', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, time, home, score, away, game_time, status, header', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'time' => 'Time',
			'home' => 'Home',
			'score' => 'Score',
			'away' => 'Away',
			'game_time' => 'Game Time',
			'status' => 'Status',
			'header' => 'Header',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('home',$this->home,true);
		$criteria->compare('score',$this->score,true);
		$criteria->compare('away',$this->away,true);
		$criteria->compare('game_time',$this->game_time,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('header',$this->header,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LiveScores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
