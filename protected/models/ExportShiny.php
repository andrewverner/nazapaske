<?php

/**
 * This is the model class for table "export_shiny".
 *
 * The followings are the available columns in table 'export_shiny':
 * @property integer $id
 * @property string $model
 * @property string $brand
 * @property string $status
 * @property integer $width
 * @property integer $height
 * @property string $goods_thumb
 * @property string $goods_img
 * @property string $model_search
 * @property string $brand_search
 * @property string $brand2
 * @property string $brand2_search
 * @property string $brand3
 * @property string $brand3_search
 * @property string $brand4
 * @property string $brand4_search
 * @property string $model2
 * @property string $model2_search
 * @property string $model3
 * @property string $model3_search
 * @property string $model4
 * @property string $model4_search
 */
class ExportShiny extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'export_shiny';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('model, brand, status, width, height, goods_thumb, goods_img, model_search, brand_search, brand2, brand2_search, brand3, brand3_search, brand4, brand4_search, model2, model2_search, model3, model3_search, model4, model4_search', 'required'),
			array('width, height', 'numerical', 'integerOnly'=>true),
			array('model, goods_thumb, goods_img, model_search, brand_search, brand2, brand2_search, brand3, brand3_search, brand4, brand4_search, model2, model2_search, model3, model3_search, model4, model4_search', 'length', 'max'=>250),
			array('brand, status', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, model, brand, status, width, height, goods_thumb, goods_img, model_search, brand_search, brand2, brand2_search, brand3, brand3_search, brand4, brand4_search, model2, model2_search, model3, model3_search, model4, model4_search', 'safe', 'on'=>'search'),
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
			'model' => 'Model',
			'brand' => 'Brand',
			'status' => 'Status',
			'width' => 'Width',
			'height' => 'Height',
			'goods_thumb' => 'Goods Thumb',
			'goods_img' => 'Goods Img',
			'model_search' => 'Model Search',
			'brand_search' => 'Brand Search',
			'brand2' => 'Brand2',
			'brand2_search' => 'Brand2 Search',
			'brand3' => 'Brand3',
			'brand3_search' => 'Brand3 Search',
			'brand4' => 'Brand4',
			'brand4_search' => 'Brand4 Search',
			'model2' => 'Model2',
			'model2_search' => 'Model2 Search',
			'model3' => 'Model3',
			'model3_search' => 'Model3 Search',
			'model4' => 'Model4',
			'model4_search' => 'Model4 Search',
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
		$criteria->compare('model',$this->model,true);
		$criteria->compare('brand',$this->brand,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('width',$this->width);
		$criteria->compare('height',$this->height);
		$criteria->compare('goods_thumb',$this->goods_thumb,true);
		$criteria->compare('goods_img',$this->goods_img,true);
		$criteria->compare('model_search',$this->model_search,true);
		$criteria->compare('brand_search',$this->brand_search,true);
		$criteria->compare('brand2',$this->brand2,true);
		$criteria->compare('brand2_search',$this->brand2_search,true);
		$criteria->compare('brand3',$this->brand3,true);
		$criteria->compare('brand3_search',$this->brand3_search,true);
		$criteria->compare('brand4',$this->brand4,true);
		$criteria->compare('brand4_search',$this->brand4_search,true);
		$criteria->compare('model2',$this->model2,true);
		$criteria->compare('model2_search',$this->model2_search,true);
		$criteria->compare('model3',$this->model3,true);
		$criteria->compare('model3_search',$this->model3_search,true);
		$criteria->compare('model4',$this->model4,true);
		$criteria->compare('model4_search',$this->model4_search,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ExportShiny the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
