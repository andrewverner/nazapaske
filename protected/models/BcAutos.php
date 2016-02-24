<?php

/**
 * This is the model class for table "bc_tires_autos".
 *
 * The followings are the available columns in table 'bc_tires_autos':
 * @property integer $id
 * @property integer $id_type_vehicle
 * @property integer $id_brand
 * @property integer $id_model
 * @property integer $id_modification
 * @property integer $id_year
 * @property integer $id_wheel_pcd
 * @property integer $id_wheel_dia
 * @property integer $id_wheel_fastener_size
 * @property integer $id_wheel_fastener_type
 * @property integer $id_tire_speed_index
 * @property integer $id_tire_load_index
 */
class BcAutos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bc_tires_autos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_type_vehicle, id_brand, id_model, id_modification, id_year, id_wheel_pcd, id_wheel_dia, id_wheel_fastener_size, id_wheel_fastener_type, id_tire_speed_index, id_tire_load_index', 'required'),
			array('id_type_vehicle, id_brand, id_model, id_modification, id_year, id_wheel_pcd, id_wheel_dia, id_wheel_fastener_size, id_wheel_fastener_type, id_tire_speed_index, id_tire_load_index', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_type_vehicle, id_brand, id_model, id_modification, id_year, id_wheel_pcd, id_wheel_dia, id_wheel_fastener_size, id_wheel_fastener_type, id_tire_speed_index, id_tire_load_index', 'safe', 'on'=>'search'),
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
			'id_type_vehicle' => 'Id Type Vehicle',
			'id_brand' => 'Id Brand',
			'id_model' => 'Id Model',
			'id_modification' => 'Id Modification',
			'id_year' => 'Id Year',
			'id_wheel_pcd' => 'Id Wheel Pcd',
			'id_wheel_dia' => 'Id Wheel Dia',
			'id_wheel_fastener_size' => 'Id Wheel Fastener Size',
			'id_wheel_fastener_type' => 'Id Wheel Fastener Type',
			'id_tire_speed_index' => 'Id Tire Speed Index',
			'id_tire_load_index' => 'Id Tire Load Index',
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
		$criteria->compare('id_type_vehicle',$this->id_type_vehicle);
		$criteria->compare('id_brand',$this->id_brand);
		$criteria->compare('id_model',$this->id_model);
		$criteria->compare('id_modification',$this->id_modification);
		$criteria->compare('id_year',$this->id_year);
		$criteria->compare('id_wheel_pcd',$this->id_wheel_pcd);
		$criteria->compare('id_wheel_dia',$this->id_wheel_dia);
		$criteria->compare('id_wheel_fastener_size',$this->id_wheel_fastener_size);
		$criteria->compare('id_wheel_fastener_type',$this->id_wheel_fastener_type);
		$criteria->compare('id_tire_speed_index',$this->id_tire_speed_index);
		$criteria->compare('id_tire_load_index',$this->id_tire_load_index);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BcAutos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
