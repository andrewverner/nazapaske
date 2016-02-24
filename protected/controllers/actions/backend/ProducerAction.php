<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 19.08.15
 * Time: 20:44
 */

class ProducerAction extends CAction
{

    public function run($type)
    {
        error_reporting(E_ALL);
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $this->controller->render("{$type}Producers",['models' => ($type == 'disk') ? DiskProducer::model()->findAll() : TireProducer::model()->findAll()]);
        }
    }

} 