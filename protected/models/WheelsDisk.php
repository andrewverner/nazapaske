<?php

/**
 * This is the model class for table "wheels_disk".
 *
 * The followings are the available columns in table 'wheels_disk':
 * @property integer $diskid
 * @property string $width
 * @property integer $diameter
 * @property integer $mounting_holes
 * @property string $mounting_holes_diameter
 * @property string $outreach
 * @property string $central_hole_diameter
 * @property string $price
 * @property string $article
 * @property string $name
 * @property string $color
 * @property string $text
 * @property string $logo
 * @property integer $producer
 * @property string $model
 * @property string $img
 * @property integer $raw_price
 * @property integer $priority
 * @property integer $percent
 */
class WheelsDisk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wheels_disk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('diameter, mounting_holes, producer, raw_price, priority, percent', 'numerical', 'integerOnly'=>true),
			array('width, mounting_holes_diameter, outreach, central_hole_diameter, price, color, logo', 'length', 'max'=>45),
			array('article, name, img', 'length', 'max'=>255),
			array('model', 'length', 'max'=>4),
			array('text', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('diskid, width, diameter, mounting_holes, mounting_holes_diameter, outreach, central_hole_diameter, price, article, name, color, text, logo, producer, model, img, raw_price, priority, percent', 'safe', 'on'=>'search'),
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
			'diskid' => 'ИД',
			'width' => 'Ширина',
			'diameter' => 'Диаметр',
			'mounting_holes' => 'PCD',
			'mounting_holes_diameter' => 'PCD2',
			'outreach' => 'Вылет',
			'central_hole_diameter' => 'ДЦО',
			'price' => 'Цена',
			'article' => 'Артикул',
			'name' => 'Имя',
			'color' => 'Цвет',
			'text' => 'Text',
			'logo' => 'Logo',
			'producer' => 'Произодитель',
			'model' => 'Модель',
			'img' => 'Img',
			'raw_price' => '"Сырая" цена',
			'priority' => 'Приоритет',
			'percent' => 'Процент',
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

		$criteria->compare('diskid',$this->diskid);
		$criteria->compare('width',$this->width,true);
		$criteria->compare('diameter',$this->diameter);
		$criteria->compare('mounting_holes',$this->mounting_holes);
		$criteria->compare('mounting_holes_diameter',$this->mounting_holes_diameter,true);
		$criteria->compare('outreach',$this->outreach,true);
		$criteria->compare('central_hole_diameter',$this->central_hole_diameter,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('article',$this->article,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('producer',$this->producer);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('raw_price',$this->raw_price);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('percent',$this->percent);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WheelsDisk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function getFilter($name)
    {
        $models = Yii::app()->db->createCommand("SELECT DISTINCT $name FROM wheels_disk ORDER BY $name ASC")->queryAll();
        if ($models != null) {
            $filter = array();
            foreach ($models as $model) {
                $filter[$model[$name]] = $model[$name];
            }
            return $filter;
        }
        else
            return false;
    }

    public static function getFilters()
    {
        return array(
            'width'                     => 'Ширина',
            'diameter'                  => 'Диаметр',
            'mounting_holes'            => 'Крепёж',
            'mounting_holes_diameter'   => 'PCD',
            'outreach'                  => 'Вылет'
        );
    }

    public static function getItemsList($filter = false,$limit = false, $order = false)
    {
        $cr = new CDbCriteria;
        if ($filter) {
            $params = array();
            foreach (WheelsDisk::getFilters() as $field => $title) {
                if (isset($filter[$field]) && $filter[$field] != '') {
                    $cr->addCondition("$field=:$field");
                    $params[":$field"] = $filter[$field];
                }
            }
            $cr->params = $params;
        }
        $cr->limit = $limit ? $limit : 30;
        $cr->order = $order ? $order : 'name ASC';
        $cr->group = "name";
        return WheelsDisk::model()->findAll($cr);
    }

    public function minimalPrice()
    {
        $cr = new CDbCriteria;
        $params = array(':name' => $this->name);
        $cr->addCondition("name=:name");
        foreach (WheelsDisk::getFilters() as $field => $title) {
            if (isset($_REQUEST[$field]) && $_REQUEST[$field] != '' && $_REQUEST[$field] != 0) {
                $cr->addCondition("$field=:$field");
                $params[":$field"] = $_REQUEST[$field];
            }
        }
        $cr->params = $params;
        $cr->limit = 1;
        $cr->order = 'raw_price ASC';
        $model = WheelsDisk::model()->find($cr);
        return $model->price();
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

    public function getProducerName($id = false)
    {
        if (!$id) $id = $this->producer;
        return DiskProducer::model()->findByPk($id)->getAttribute('name');
    }

    public function getProducer_name()
    {
        return DiskProducer::model()->findByPk($this->producer)->getAttribute('name');
    }

    public function getProducer_name_alias()
    {
        return str_replace(' ','_',DiskProducer::model()->findByPk($this->producer)->getAttribute('name'));
    }

    public function getName_alias()
    {
        return str_replace(' ','_',$this->name);
    }

    public function getInterval($field)
    {
        $row = Yii::app()->db->createCommand("SELECT min($field) as min, max($field) as max FROM wheels_disk WHERE name='$this->name'")->queryRow();
        $res = new stdClass;
        $res->min = $row["min"];
        $res->max = $row["max"];
        return $res;
    }

    public function getColors()
    {
        $cr = new CDbCriteria;
        $cr->select = 'color';
        $cr->distinct = true;
        $cr->condition = 'name=:name';
        $cr->params = array(
            ':name' => $this->name
        );

        $rows = $this->findAll($cr);
        $c = array();
        foreach ($rows as $row)
        {
            $c[] = $row->color;
        }
        return $c;
    }

    public function price()
    {
        return ceil(round($this->raw_price + ($this->percent*$this->raw_price)/100)/10)*10;
    }

    public function replayMods()
    {
        $cr = new CDbCriteria;
        $cr->select = 'model';
        $cr->condition = 'producer=:producer';
        $cr->params = array(':producer' => 2);
        $cr->distinct = true;
        $cr->order = 'model ASC';
        return WheelsDisk::model()->findAll($cr);
    }

    public static function tModel($a,$b=false)
    {
        $arr = array(
            'AC'	=> 'Acura',
            'A'	    => 'Audi',
            'B'	    => 'BMW',
            'BR'    => 'Brilliance',
            'CL'	=> 'Cadillac',
            'CHR'	=> 'Chery',
            'GN'	=> 'Chevrolet',
            'CR'	=> 'Chrysler',
            'CI'	=> 'Citroen',
            'DW'	=> 'Daewoo',
            'FA'	=> 'FAW',
            'FT'	=> 'Fiat',
            'FD'	=> 'Ford',
            'GL'    => 'Geely',
            'EM'    => 'Geely',
            'GW'	=> 'Great Wall',
            'H'	    => 'Honda',
            'HM'    => 'Haima',
            'HND'	=> 'Hyundai',
            'INF'	=> 'Infiniti',
            'JG'	=> 'Jaguar',
            'KI'	=> 'KIA',
            'LR'	=> 'Land Rover',
            'LX'	=> 'Lexus',
            'LF'	=> 'Lifan',
            'MZ'	=> 'Mazda',
            'MR'	=> 'Mercedes',
            'MN'	=> 'Mini',
            'MI'	=> 'Mitsubishi',
            'NS'	=> 'Nissan',
            'OPL'	=> 'Opel',
            'PG'	=> 'Peugeot',
            'PR'	=> 'Porsche',
            'RN'	=> 'Renault',
            'ST'	=> 'Seat',
            'SK'	=> 'Skoda',
            'SM'	=> 'Smart',
            'SNG'	=> 'Ssang Yong',
            'SB'	=> 'Subaru',
            'SZ'	=> 'Suzuki',
            'TG'	=> 'Tagaz',
            'TY'	=> 'Toyota',
            'VV'	=> 'Volkswagen',
            'V'	    => 'Volvo',
        );
        if ($b) return $arr; else {
            if (array_key_exists($a,$arr)) return $arr[$a]; else return $a;
        }
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
        return ($model != null) ? $model->img : '/images/no-image.png';
    }

    public function getProducer()
    {
        return DiskProducer::model()->findByPk($this->producer);
    }

    public function interval($field)
    {
        $row = Yii::app()->db->createCommand()
            ->select("max($field), min($field)")
            ->from('wheels_disk')
            ->where('producer=:producer AND name=:name', [
                ':producer' => $this->producer,
                ':name' => $this->name
            ])
            ->queryRow();
        return ($row['min'] == $row['max']) ? $row['min'] : "{$row['min']} - {$row['max']}";
    }

}
