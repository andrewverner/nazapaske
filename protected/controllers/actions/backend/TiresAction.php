<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 19.08.15
 * Time: 20:44
 */

class TiresAction extends CAction
{

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $criteria = new CDbCriteria;

            $criteria->order = 'name';
            $criteria->condition = 'producer=:producer';
            $criteria->params = [':producer'=>$id];

            $count = WheelsTire::model()->count($criteria);
            $pages = new CPagination($count);

            // results per page
            $pages->pageSize = 50;
            $pages->applyLimit($criteria);
            $models = WheelsTire::model()->findAll($criteria);

            $this->controller->render('tires', [
                'producer' => TireProducer::model()->findByPk($id),
                'models' => $models,
                'pages' => $pages,
            ]);
        }
    }

} 