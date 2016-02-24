<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:53
 */

class DropOrderAction extends CAction {

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $model = WheelsCart::model()->findByPk($id);
            if ($model != null) {
                if (isset($_POST["drop"]) && $_POST["drop"] == 1) {
                    WheelsCart::model()->deleteByPk($id);
                    $this->controller->redirect(Yii::app()->createUrl('backend/orders'));
                }
                else
                    $this->controller->render('dropOrder',array('model'=>$model));
            }
            else
                throw new CHttpException(404);
        }
    }

} 