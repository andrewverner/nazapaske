<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 19.08.15
 * Time: 20:44
 */

class DisksAction extends CAction
{

    public function run($id)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $criteria = new CDbCriteria;

            $criteria->order = 'name';
            $criteria->condition = 'producer=:producer';
            $criteria->params = [':producer'=>$id];

            $count = WheelsDisk::model()->count($criteria);
            $pages = new CPagination($count);

            // results per page
            $pages->pageSize = 50;
            $pages->applyLimit($criteria);
            $models = WheelsDisk::model()->findAll($criteria);

            $this->controller->render('disks', [
                'producer' => DiskProducer::model()->findByPk($id),
                'models' => $models,
                'pages' => $pages,
            ]);
        }
    }

} 