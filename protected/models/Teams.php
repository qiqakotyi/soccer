<?php

/**
 * This is the model class for table "teams".
 *
 * The followings are the available columns in table 'teams':
 * @property integer $id
 * @property string $team_name
 * @property integer $P
 * @property integer $W
 * @property integer $D
 * @property integer $L
 * @property integer $GS
 * @property integer $GA
 * @property integer $GD
 * @property integer $PTS
 * @property string $league_id
 * @property string $header
 * @property string $group_name
 */
class Teams extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'teams';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team_name, P, W, D, L, GS, GA, GD, PTS, league_id, header, group_name', 'required'),
			array('P, W, D, L, GS, GA, GD, PTS', 'numerical', 'integerOnly'=>true),
			array('team_name, league_id, group_name', 'length', 'max'=>35),
			array('header', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, team_name, P, W, D, L, GS, GA, GD, PTS, league_id, header, group_name', 'safe', 'on'=>'search'),
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
			'team_name' => 'Team Name',
			'P' => 'P',
			'W' => 'W',
			'D' => 'D',
			'L' => 'L',
			'GS' => 'Gs',
			'GA' => 'Ga',
			'GD' => 'Gd',
			'PTS' => 'Pts',
			'league_id' => 'League',
			'header' => 'Header',
			'group_name' => 'Group Name',
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
		$criteria->compare('team_name',$this->team_name,true);
		$criteria->compare('P',$this->P);
		$criteria->compare('W',$this->W);
		$criteria->compare('D',$this->D);
		$criteria->compare('L',$this->L);
		$criteria->compare('GS',$this->GS);
		$criteria->compare('GA',$this->GA);
		$criteria->compare('GD',$this->GD);
		$criteria->compare('PTS',$this->PTS);
		$criteria->compare('league_id',$this->league_id,true);
		$criteria->compare('header',$this->header,true);
		$criteria->compare('group_name',$this->group_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Teams the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
