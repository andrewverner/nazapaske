<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/23/15
 * Time: 2:58 PM
 * To change this template use File | Settings | File Templates.
 */

class UpdateDiskAction extends CAction {

    public function run()
    {
        $ids = $_REQUEST["id"];
        $counts = $_REQUEST["count"];
        $disk = array();
        for ($i=0;$i<=count($ids)-1;$i++) {
            $disk[$ids[$i]] = $counts[$i];
        }
        Yii::app()->session->add('disk',$disk);
        $this->controller->redirect(Yii::app()->createUrl('cart'));
    }

}