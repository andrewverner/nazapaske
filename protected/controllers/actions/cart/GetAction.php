<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 3/18/15
 * Time: 5:17 PM
 * To change this template use File | Settings | File Templates.
 */

class GetAction extends CAction {

    public function run()
    {
        $total = array(
            'count' => 0,
            'price' => 0,
        );
        Yii::app()->session->open();
        $disks = Yii::app()->session->get('disk');
        if ($disks) {
            foreach ($disks as $id => $count) {
                $disk = WheelsDisk::model()->findByPk($id);
                if ($disk != null) {
                    $total['count']++;
                    $total['price'] += $disk->price()*$count;
                }
            }
        }
        echo json_encode($total);
    }

}