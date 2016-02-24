<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/23/15
 * Time: 11:46 AM
 * To change this template use File | Settings | File Templates.
 */

class RemoveAction extends CAction {

    public function run($id) {
        $disk = Yii::app()->session->get('disk');
        unset($disk[$id]);
        $this->controller->redirect(Yii::app()->createUrl('cart'));
    }

}