<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/23/15
 * Time: 5:02 PM
 * To change this template use File | Settings | File Templates.
 */

class SendAction extends CAction {

    public function run()
    {
        if ($data = Yii::app()->getRequest()->getPost('WheelsCart')) {
            $cart = new WheelsCart;
            $cart->setAttributes($data);
            $cart->data = json_encode(
                array('cart' => array(
                    'disk' => Yii::app()->session->get('disk'),
                    'tire' => Yii::app()->session->get('tire')
                ))
            );
            $cart->comment = $data["comment"];
            if ($cart->validate()) {
                $cart->number = time();
                $cart->create_date = date("Y-m-d H:i:s");
                if ($cart->save()) {
                    switch ($cart->payment) {
                        case WheelsCart::PAYMENT_CARD:
                            $payment = 'Пластиковая карта';
                            break;
                        case WheelsCart::PAYMENT_CASH:
                            $payment = 'Наличный расчёт';
                            break;
                        case WheelsCart::PAYMENT_NOCASH:
                            $payment = 'Безналичный расчёт (банковский перевод)';
                            break;
                    }
                    $delivery = ($cart->delivery == WheelsCart::DELIVERY_SELF) ? 'Доставка: Самовывоз' : "Доставка: Доставка транспортом магазина<br />Адрес: $cart->address";
                    $total = 0;

                    if (Yii::app()->session->get('disk')) {
                        $disks = '<b>Диски</b>
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                        <tr style="background-color: #a9b35d">
                            <td width="5%" style="padding: 5px 10px;">#</td>
                            <td width="40%" style="padding: 5px 10px;">Наименование</td>
                            <td width="10%" style="padding: 5px 10px;">Количество</td>
                            <td width="20%" style="padding: 5px 10px;">Цена за штуку</td>
                            <td width="25%" style="padding: 5px 10px;">Общая стоимость</td>
                        </tr>
                        </thead>
                        <tbody>';
                        $z=1;
                        foreach (Yii::app()->session->get('disk') as $id => $count) {
                            $disk = WheelsDisk::model()->findByPk($id);
                            $disks .= '<tr>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;">'.$z.'</td>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;"><a href="http://nazapaske.ru/index.php/disk/details/'.$disk->diskid.'">'.$disk->name.'</a></td>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;">'.$count.'</td>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;">'.number_format($disk->price(),2,'.',' ').'</td>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;">'.number_format($count*$disk->price(),2,'.',' ').'</td>
                            </tr>';
                            $total += $count*$disk->price();
                            $z++;
                        }
                        $disks .= '</tbody>
                    </table><br />';
                    }
                    else
                        $disks = false;

                    if (Yii::app()->session->get('tire')) {
                        $tires = '<b>Шины</b>
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                        <tr style="background-color: #a9b35d">
                            <td width="5%" style="padding: 5px 10px;">#</td>
                            <td width="40%" style="padding: 5px 10px;">Наименование</td>
                            <td width="10%" style="padding: 5px 10px;">Количество</td>
                            <td width="20%" style="padding: 5px 10px;">Цена за штуку</td>
                            <td width="25%" style="padding: 5px 10px;">Общая стоимость</td>
                        </tr>
                        </thead>
                        <tbody>';
                        $z=1;
                        foreach (Yii::app()->session->get('tire') as $id => $count) {
                            $tire = WheelsTire::model()->findByPk($id);
                            $tires .= '<tr>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;">'.$z.'</td>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;"><a href="http://nazapaske.ru/index.php/tire/details/'.$tire->tireid.'">'.$tire->name.'</a></td>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;">'.$count.'</td>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;">'.number_format($tire->raw_price,2,'.',' ').'</td>
                                <td style="padding: 5px 10px; border-bottom: 1px solid #bbbbbb;">'.number_format($count*$tire->raw_price,2,'.',' ').'</td>
                            </tr>';
                            $total += $count*$tire->raw_price;
                            $z++;
                        }
                        $tires .= '</tbody>
                    </table><br />';
                    }
                    else
                        $tires = false;

                    $total = number_format($total,2,'.',' ');

                    $message = <<<HTML
Здравствуйте, $cart->name.<br /><br />
Спасибо за Ваш заказ в интернет-магазине шин и дисков Nazapaske.ru. Мы получили Ваш заказ . В ближайшее время наши менеджеры свяжутся с Вами для уточнения деталей. Если у Вас возникли какие-либо вопросы по заказу, пожалуйста, свяжитесь с нами по электронной почте nazapaske@mail.ru или по телефону 8 (800) 550-76-10 ежедневно с 9 до 21 часов (время московское).<br /><br />
Ниже предоставлена информация о Вашем заказе. Еще раз спасибо за покупку в нашем магазине.<br /><br />
Ваш заказ №$cart->number (размещен $cart->create_date MSK)<br /><br />
Информация об оплате, способ оплаты:<br />
<table style="width:100%">
    <tr>
        <td style="text-align: left; vertical-align: top; background-color: #f1f1f1; border: 1px solid #bbbbbb; padding: 10px;">
            $cart->name<br />
            $delivery<br />
            Телефон: $cart->phone<br />
            Email: $cart->email
        </td>
        <td></td>
        <td style="text-align: left; vertical-align: top; background-color: #f1f1f1; border: 1px solid #bbbbbb; padding: 10px;">
            $payment<br /><br />
            $cart->comment
        </td>
    </tr>
</table><br />
$disks
$tires
<div style="font-weight: bold; font-size: 14px;">Итоговая стоимость заказа: $total руб.</div><br />
С уважением, Администрация<br />
<b>интернет-магазина NaZapaske.ru</b>
HTML;
                    $e = Yii::app()->mailer;
                    $e->from('nazapaske@yandex.ru')
                        ->to($cart->email)
                        ->subject('Ваш заказ на Nazapaske.ru')
                        ->message($message)
                        ->html(true)
                        ->style()
                        ->send();
                    $e->from('nazapaske@yandex.ru')
                        ->to('nazapaske@yandex.ru')
                        //->to('andrewverner85@gmail.com')
                        ->subject('Заказ с сайта')
                        ->message($message)
                        ->html(true)
                        ->style()
                        ->send();
                    $e->from('nazapaske@yandex.ru')
                        ->to('nazapaske@mail.ru')
                        //->to('andrewverner85@gmail.com')
                        ->subject('Заказ с сайта')
                        ->message($message)
                        ->html(true)
                        ->style()
                        ->send();
                    Yii::app()->session->remove('disk');
                    Yii::app()->session->remove('tire');
                    $this->controller->render('thanks');
                }
             } else {
                $disks = Yii::app()->session->get('disk');
                $tires = Yii::app()->session->get('tire');
                $disk = true;
                $tire = true;
                if (!$disks || empty($disks)) $disk = false;
                if (!$tires || empty($tires)) $tire = false;
                $this->controller->render('index',array('disk' => $disk,'tire' => $tire,'cart' => $cart));
            }
        }
    }

}