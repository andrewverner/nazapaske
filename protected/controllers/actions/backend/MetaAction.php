<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:32
 */

class MetaAction extends CAction
{

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $model = WheelsMeta::model()->findByPk($id);

            if (!empty($_POST["WheelsMeta"])) {
                $model->setAttributes($_POST["WheelsMeta"]);
                if ($model->validate()) {
                    $model->save();
                    $this->controller->redirect(Yii::app()->createUrl('backend/metas'));
                }
            }

            $this->controller->render('meta',array('model'=>$model,'edit'=>true));
        }
    }

} 