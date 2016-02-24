<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 21:00
 */

class MenuItemAction extends CAction {

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $model = Menu::model()->findByPk($id);

            if (!empty($_POST["Menu"])) {
                $model->setAttributes($_POST["Menu"]);
                if ($model->validate()) {
                    $model->save();
                    $this->controller->redirect(Yii::app()->createUrl('backend/menu'));
                }
            }

            $this->controller->render('menuItem',array('model'=>$model,'edit'=>true));
        }
    }

} 