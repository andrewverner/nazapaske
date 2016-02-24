<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/23/15
 * Time: 2:58 PM
 * To change this template use File | Settings | File Templates.
 */

class UpdateTireAction extends CAction {

    public function run()
    {
        $ids = $_REQUEST["id"];
        $counts = $_REQUEST["count"];
        $tire = array();
        for ($i=0;$i<=count($ids)-1;$i++) {
            $tire[$ids[$i]] = $counts[$i];
        }
        Yii::app()->session->add('tire',$tire);
        $this->controller->redirect(Yii::app()->createUrl('cart'));
    }

}