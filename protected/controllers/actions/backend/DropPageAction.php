<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:53
 */

class DropPageAction extends CAction {

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $model = Page::model()->findByPk($id);
            if ($model != null) {
                if (isset($_POST["drop"]) && $_POST["drop"] == 1) {
                    Page::model()->deleteByPk($id);
                    $this->controller->redirect(Yii::app()->createUrl('backend/pages'));
                }
                else
                    $this->controller->render('dropPage',array('model'=>$model));
            }
            else
                throw new CHttpException(404);
        }
    }

} 