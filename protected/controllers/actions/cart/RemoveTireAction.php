<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/23/15
 * Time: 11:46 AM
 * To change this template use File | Settings | File Templates.
 */

class RemoveTireAction extends CAction {

    public function run($id) {
        $tire = Yii::app()->session->get('tire');
        unset($tire[$id]);
        Yii::app()->session->add('tire',$tire);
        $this->controller->redirect(Yii::app()->createUrl('cart'));
    }

}