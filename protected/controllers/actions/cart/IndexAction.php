<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 3/18/15
 * Time: 5:21 PM
 * To change this template use File | Settings | File Templates.
 */

class IndexAction extends CAction {

    public function run()
    {
        Yii::app()->session->open();
        $disks = Yii::app()->session->get('disk');
        $tires = Yii::app()->session->get('tire');
        $disk = true;
        $tire = true;
        if (!$disks || empty($disks)) $disk = false;
        if (!$tires || empty($tires)) $tire = false;
        $this->controller->render('index',array('disk' => $disk,'tire' => $tire,'cart' => new WheelsCart));
    }

}