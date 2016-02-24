<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:32
 */

class PageAction extends CAction
{

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $model = Page::model()->findByPk($id);

            if (!empty($_POST["Page"])) {
                $model->setAttributes($_POST["Page"]);
                if ($model->validate()) {
                    $model->save();
                    $this->controller->redirect(Yii::app()->createUrl('backend/pages'));
                }
            }

            $this->controller->render('page',array('model'=>$model,'edit'=>true));
        }
    }

} 