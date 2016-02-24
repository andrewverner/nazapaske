<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:32
 */

class OrderAction extends CAction
{

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $model = WheelsCart::model()->findByPk($id);

            $this->controller->render('order',array('model'=>$model));
        }
    }

} 