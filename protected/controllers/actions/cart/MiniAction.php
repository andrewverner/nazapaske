<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/23/15
 * Time: 10:37 AM
 * To change this template use File | Settings | File Templates.
 */

class MiniAction extends CAction {

    public function run()
    {
        Yii::app()->session->open();
        $count = 0;
        $price = 0;
        if (Yii::app()->session->get('disk')) {
            foreach (Yii::app()->session->get('disk') as $id => $amount) {
                $disk = WheelsDisk::model()->findByPk($id);
                $count++;
                $price += $disk->price()*$amount;
            }
        }
        if (Yii::app()->session->get('tire')) {
            foreach (Yii::app()->session->get('tire') as $id => $amount) {
                $tire = WheelsTire::model()->findByPk($id);
                $count++;
                $price += $tire->raw_price*$amount;
            }
        }
        echo json_encode(array(
            'count' => $count,
            'price' => $price
        ));
    }

}