<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 16.08.15
 * Time: 0:10
 */

class IndexAction extends CAction {

    public function run()
    {
        if (Yii::app()->user->isGuest) {
            $this->controller->redirect(Yii::app()->createUrl('backend/login'));
        }
        else
            $this->controller->render('index');
    }

} 