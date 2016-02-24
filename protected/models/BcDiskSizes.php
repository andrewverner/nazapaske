<?php

/**
 * This is the model class for table "bc_tires_wheel_sizes_dict".
 *
 * The followings are the available columns in table 'bc_tires_wheel_sizes_dict':
 * @property integer $id
 * @property double $id_rim
 * @property double $id_diameter
 * @property integer $id_et
 */
class BcDiskSizes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bc_tires_wheel_sizes_dict';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rim, id_diameter, id_et', 'required'),
			array('id_et', 'numerical', 'integerOnly'=>true),
			array('id_rim, id_diameter', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_rim, id_diameter, id_et', 'safe', 'on'=>'search'),
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
			'id_rim' => 'Id Rim',
			'id_diameter' => 'Id Diameter',
			'id_et' => 'Id Et',
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
		$criteria->compare('id_rim',$this->id_rim);
		$criteria->compare('id_diameter',$this->id_diameter);
		$criteria->compare('id_et',$this->id_et);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BcDiskSizes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
