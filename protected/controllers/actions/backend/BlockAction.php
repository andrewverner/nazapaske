<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:32
 */

class BlockAction extends CAction
{

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $model = ContentBlock::model()->findByPk($id);

            if (!empty($_POST["ContentBlock"])) {
                $model->setAttributes($_POST["ContentBlock"]);
                if ($model->validate()) {
                    $model->save();
                    $this->controller->redirect(Yii::app()->createUrl('backend/blocks'));
                }
            }

            $this->controller->render('block',array('model'=>$model,'edit'=>true));
        }
    }

} 