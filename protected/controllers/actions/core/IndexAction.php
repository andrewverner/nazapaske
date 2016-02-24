<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/28/15
 * Time: 11:35 AM
 * To change this template use File | Settings | File Templates.
 */

class IndexAction extends CAction {

    public function run()
    {
        if (Yii::app()->user->isGuest) {
            $this->controller->redirect(Yii::app()->createUrl('core/login'));
        } else {
            $this->controller->render('index');
        }
    }

}