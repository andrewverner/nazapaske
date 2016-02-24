<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 3/17/15
 * Time: 4:57 PM
 * To change this template use File | Settings | File Templates.
 */

class InfoAction extends CAction
{

    public function run($producer, $name)
    {
        $producer = str_replace('_',' ',$producer);
        $name = str_replace('_',' ',$name);
        $producer = DiskProducer::model()->findByAttributes(['name' => $producer]);
        if (!$producer) throw new CHttpException(404);
        $model = WheelsDisk::model()->findByAttributes(['producer' => $producer->id, 'name' => $name]);
        if ($model != null) {
            $this->controller->render('info',['model' => $model]);
        } else
            throw new CHttpException(404);
    }

}