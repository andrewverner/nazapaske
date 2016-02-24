<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 19.08.15
 * Time: 20:44
 */

class CatalogListAction extends CAction
{

    public function run($type)
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $this->controller->render(($type == 'disks') ? 'catalogDisk' : 'catalogTire',['models' => ($type == 'disks') ? DiskProducer::model()->findAll() : TireProducer::model()->findAll()]);
        }
    }

} 