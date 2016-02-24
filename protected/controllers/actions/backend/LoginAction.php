<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 16.08.15
 * Time: 0:37
 */

Class LoginAction extends CAction
{

    public function run()
    {
        $model = new BackendLoginForm;

        if (!empty($_POST['BackendLoginForm'])) {
            $model->setAttributes($_POST['BackendLoginForm']);
            if ($model->validate() && $model->login())
            {
                $this->controller->redirect(Yii::app()->createUrl('backend'));
            }
        }

        $this->controller->render('login',array('model'=>$model));
    }

}