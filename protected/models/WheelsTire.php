<?php

/**
 * This is the model class for table "wheels_tire".
 *
 * The followings are the available columns in table 'wheels_tire':
 * @property integer $tireid
 * @property double $width
 * @property double $diameter
 * @property double $shape
 * @property integer $season
 * @property double $price
 * @property string $text
 * @property string $code
 * @property string $name
 * @property string $model
 * @property string $speed
 * @property string $studding
 * @property string $img
 * @property string $producer
 * @property double $raw_price
 * @property integer $priority
 * @property string $in_index
 * @property string $power
 * @property string $run_flat
 * @property string $auto_type
 * @property integer $rest
 */
class WheelsTire extends CActiveRecord
{

    const SEASON_ALL = 1;
    const SEASON_SUMMER = 2;
    const SEASON_WINTER = 3;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wheels_tire';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('season, priority, rest', 'numerical', 'integerOnly'=>true),
			array('width, diameter, shape, price, raw_price', 'numerical'),
			array('code, speed, studding, producer, in_index, power, run_flat, auto_type', 'length', 'max'=>45),
			array('name, model, img', 'length', 'max'=>255),
			array('text', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tireid, width, diameter, shape, season, price, text, code, name, model, speed, studding, img, producer, raw_price, priority, in_index, power, run_flat, auto_type, rest', 'safe', 'on'=>'search'),
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
			'tireid' => 'Tireid',
			'width' => 'Ширина',
			'diameter' => 'Диаметр',
			'shape' => 'Профиль',
			'season' => 'Сезонность',
			'price' => 'Price',
			'text' => 'Text',
			'code' => 'Code',
			'name' => 'Имя',
			'model' => 'Модель',
			'speed' => 'Индекс скорости',
			'studding' => 'Шиповка',
			'img' => 'Img',
			'producer' => 'Производитель',
			'raw_price' => '"Сырая" цена',
			'priority' => 'Приоритет',
			'in_index' => 'Индекс нагрузки',
			'power' => 'Power',
			'run_flat' => 'Run Flat',
			'auto_type' => 'Auto Type',
			'rest' => 'Rest',
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

		$criteria->compare('tireid',$this->tireid);
		$criteria->compare('width',$this->width);
		$criteria->compare('diameter',$this->diameter);
		$criteria->compare('shape',$this->shape);
		$criteria->compare('season',$this->season);
		$criteria->compare('price',$this->price);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('speed',$this->speed,true);
		$criteria->compare('studding',$this->studding,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('producer',$this->producer,true);
		$criteria->compare('raw_price',$this->raw_price);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('in_index',$this->in_index,true);
		$criteria->compare('power',$this->power,true);
		$criteria->compare('run_flat',$this->run_flat,true);
		$criteria->compare('auto_type',$this->auto_type,true);
		$criteria->compare('rest',$this->rest);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WheelsTire the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function getFilter($name)
    {
        $models = Yii::app()->db->createCommand("SELECT DISTINCT $name FROM wheels_tire ORDER BY $name ASC")->queryAll();
        if ($models != null) {
            $filter = array();
            foreach ($models as $model) {
                if ($name == 'season') {
                    switch ($model[$name]) {
                        case self::SEASON_WINTER:
                            $filter[$model[$name]] = 'Зимняя';
                            break;
                        case self::SEASON_SUMMER:
                            $filter[$model[$name]] = 'Летняя';
                            break;
                        default:
                            $filter[$model[$name]] = 'Всесезонная';
                            break;
                    }
                } elseif ($name == 'studding') {
                    $filter[$model[$name]] = ($model[$name] == 1) ? "Да" : "Нет";
                } else {
                    $filter[$model[$name]] = $model[$name];
                }
            }
            return $filter;
        }
        else
            return false;
    }

    public function getProducerName($id = false)
    {
        if (!$id) $id = $this->producer;
        return TireProducer::model()->findByPk($id)->getAttribute('name');
    }

    public static function getFilters()
    {
        return array(
            'width'     => 'Ширина',
            'shape'     => 'Профиль',
            'diameter'  => 'Диаметр',
            'season'    => 'Сезонность',
            'studding'  => 'Шиповка'
        );
    }

    public function minimalPrice()
    {
        $cr = new CDbCriteria;
        $params = array(':model' => $this->model);
        $cr->addCondition("model=:model");
        foreach (WheelsTire::getFilters() as $field => $title) {
            if (isset($_REQUEST[$field]) && $_REQUEST[$field] != '' && $_REQUEST[$field] != 0) {
                $cr->addCondition("$field=:$field");
                $params[":$field"] = $_REQUEST[$field];
            }
        }
        $cr->params = $params;
        $cr->limit = 1;
        $cr->order = 'raw_price ASC';
        $model = WheelsTire::model()->find($cr);
        return $model->raw_price;
    }

    public function image()
    {
        $cr = new CDbCriteria;
        $cr->condition = "name=:name AND img IS NOT NULL AND img NOT LIKE :nophoto";
        $cr->params = array(
            ':name' => $this->name,
            ':nophoto' => '%nophoto%'
        );
        $model = $this->find($cr);
        if ($model) {
            return (strstr($model->img,'photo.yst.ru')) ? "http://{$model->img}" : $model->img;
        }
        else
            return '/images/no-image.png';
        //return ($model != null) ? $model->img : '/images/no-image.png';
    }

    public function getInterval($field)
    {
        //$row = Yii::app()->db->createCommand("SELECT min($field) as min, max($field) as max FROM wheels_tire WHERE name='$this->name'")->queryRow();
        $row = Yii::app()->db->createCommand()
            ->select("min($field) as min, max($field) as max")
            ->from('wheels_tire')
            ->where('name=:name', [':name' => $this->name])
            ->queryRow();
        $res = new stdClass;
        $res->min = $row["min"];
        $res->max = $row["max"];
        return $res;
    }

    public function images()
    {
        $cr = new CDbCriteria;
        $cr->select = 'img';
        $cr->distinct = true;
        $cr->condition = 'name=:name AND img NOT LIKE :nophoto AND img <> :this_image';
        $cr->params = array(
            ':name' => $this->name,
            ':nophoto' => '%nophoto%',
            ':this_image' => $this->img
        );

        return $this->findAll($cr);
    }

    public function getSeasons()
    {
        $cr = new CDbCriteria;
        $cr->select = 'season';
        $cr->distinct = true;
        $cr->condition = 'name=:name';
        $cr->params = array(
            ':name' => $this->name
        );

        $rows = $this->findAll($cr);
        $c = array();
        $seasons = array(
            false,
            "Всесезонная",
            "Летняя",
            "Зимняя"
        );
        foreach ($rows as $row)
        {
            $c[] = $seasons[$row->season];
        }
        return $c;
    }

    public function getSeasonName()
    {
        $seasons = array(
            false,
            "Всесезонная",
            "Летняя",
            "Зимняя"
        );
        return $seasons[$this->season];
    }

    public function getStudding()
    {
        $cr = new CDbCriteria;
        $cr->select = 'studding';
        $cr->distinct = true;
        $cr->condition = 'name=:name';
        $cr->params = array(
            ':name' => $this->name
        );

        $rows = $this->findAll($cr);
        $c = array();
        $studdings = array(
            "Нет",
            "Да",
            "Нет"
        );
        foreach ($rows as $row)
        {
            $c[] = $studdings[$row->studding];
        }
        return $c;
    }

    public static function getItemsList($filter = false,$limit = false, $order = false)
    {
        $cr = new CDbCriteria;
        /*if ($filter) {
            $params = array();
            foreach (WheelsTire::getFilters() as $field => $title) {
                if (isset($filter[$field]) && $filter[$field] != '') {
                    $cr->addCondition("$field=:$field");
                    $params[":$field"] = $filter[$field];
                }
            }
            $cr->params = $params;
        }*/
        $cr->limit = $limit ? $limit : 30;
        $cr->order = $order ? $order : 'model ASC';
        $cr->group = "model";
        return WheelsTire::model()->findAll($cr);
    }

}
