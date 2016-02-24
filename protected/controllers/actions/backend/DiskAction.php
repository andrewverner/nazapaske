<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 19.08.15
 * Time: 20:44
 */

class DiskAction extends CAction
{

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $model = WheelsDisk::model()->findByPk($id);
            if ($model != null) {
                if (!empty($_POST["WheelsDisk"])) {
                    $model->setAttributes($_POST["WheelsDisk"]);
                    if ($model->validate()) {
                        $model->save();
                        //$this->controller->redirect(Yii::app()->createUrl('backend/blocks'));
                    }
                }
                $this->controller->render('disk',['model'=>$model]);
            }
            else
                throw new CHttpException(404);
        }
    }

} 