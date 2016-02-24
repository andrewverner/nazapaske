<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/23/15
 * Time: 11:46 AM
 * To change this template use File | Settings | File Templates.
 */

class RemoveDiskAction extends CAction {

    public function run($id) {
        $disk = Yii::app()->session->get('disk');
        unset($disk[$id]);
        Yii::app()->session->add('disk',$disk);
        $this->controller->redirect(Yii::app()->createUrl('cart'));
    }

}