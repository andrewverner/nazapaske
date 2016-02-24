<?php

/**
 * This is the model class for table "wheels_cart".
 *
 * The followings are the available columns in table 'wheels_cart':
 * @property integer $cartid
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property integer $delivery
 * @property integer $payment
 * @property string $address
 * @property string $number
 * @property string $create_date
 */
class WheelsCart extends CActiveRecord
{

    const DELIVERY_SELF = 1;
    const DELIVERY_SHOP = 2;

    const PAYMENT_CASH = 1;
    const PAYMENT_CARD = 2;
    const PAYMENT_NOCASH = 3;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wheels_cart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, email, delivery, payment, data', 'required'),
			array('delivery, payment', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
            array('data', 'length', 'max'=>4096),
			array('phone, email, number', 'length', 'max'=>45),
			array('address, create_date', 'safe'),
            array('address', 'ifShopDelivery'),
            //array('payment', 'checkPaymentMethods'),
            array('email', 'email','message'=>'Указан некорректный адрес email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cartid, name, phone, email, delivery, payment, address, number, create_date', 'safe', 'on'=>'search'),
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
			'cartid' => 'Cartid',
			'name' => 'Ваше имя',
			'phone' => 'Ваш телефон',
			'email' => 'Ваш email',
			'delivery' => 'Delivery',
			'payment' => 'Payment',
			'address' => 'Адрес доставки',
			'number' => 'Number',
			'create_date' => 'Create Date',
            'data' => 'Order data',
            'comment' => 'Комментарий',
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

		$criteria->compare('cartid',$this->cartid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('delivery',$this->delivery);
		$criteria->compare('payment',$this->payment);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('create_date',$this->create_date,true);
        $criteria->compare('data',$this->data,true);

        return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WheelsCart the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function getDeliveryList() {
        return array(
            self::DELIVERY_SELF => 'Самовывоз',
            self::DELIVERY_SHOP => 'Доставка транспортом магазина',
        );
    }

    public static function getPaymentList() {
        return array(
            self::PAYMENT_CASH => 'Наличный расчёт',
            self::PAYMENT_CARD => 'Пластиковая карта',
            self::PAYMENT_NOCASH => 'Безналичный расчёт',
        );
    }

    public function ifShopDelivery($attribute) {
        if ($this->delivery == self::DELIVERY_SHOP && trim($this->address) == '') $this->addError($attribute,'Укажите адрес доставки');
    }

    public function checkPaymentMethods($attribute) {
        if ($this->delivery == self::DELIVERY_SHOP && $this->payment == self::PAYMENT_CARD) $this->addError($attribute,'Оплата картой при доставке невозможна');
    }

    public static function getDeliveryType($id) {
        $arr =  array(
            WheelsCart::DELIVERY_SELF => 'Самовывоз',
            WheelsCart::DELIVERY_SHOP => 'Доставка транспортом магазина',
        );
        return $arr[$id];
    }

    public static function getPaymentType($id) {
        $arr =  array(
            WheelsCart::PAYMENT_CASH => 'Наличный расчёт',
            WheelsCart::PAYMENT_CARD => 'Пластиковая карта',
            WheelsCart::PAYMENT_NOCASH => 'Безналичный расчёт',
        );
        return $arr[$id];
    }

    public function items()
    {
        $json = json_decode($this->data);
        $data = array();
        if ($json->cart->disk) {
            foreach ($json->cart->disk as $id => $count) {
                $disk = WheelsDisk::model()->findByPk($id);
                if ($disk != null) {
                    $data['disk'] = [
                        'id' => $disk->diskid,
                        'name' => $disk->name,
                        'count' => $count,
                        'price' => $disk->price
                    ];
                }
            }
        }
        if ($json->cart->tire) {
            foreach ($json->cart->tire as $id => $count) {
                $tire = WheelsTire::model()->findByPk($id);
                if ($tire!= null) {
                    $data['tire'] = [
                        'id' => $tire->tireid,
                        'name' => $tire->name,
                        'count' => $count,
                        'price' => $tire->price
                    ];
                }
            }
        }
        return json_decode(json_encode($data));
    }

}