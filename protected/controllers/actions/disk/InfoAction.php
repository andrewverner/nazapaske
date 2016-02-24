<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 3/17/15
 * Time: 4:57 PM
 * To change this template use File | Settings | File Templates.
 */

class DetailsAction extends CAction
{

    public function run()
    {
        echo 123123;
        /*$producer = DiskProducer::model()->findByAttributes(['name' => $producer]);
        if (!$producer) throw new CHttpException(404);
        $model = WheelsDisk::model()->findByAttributes(['producer' => $producer->id, 'name' => $name]);
        if ($model != null) {
            $details = new stdClass;
            $details->producerName = $model->getProducerName();
            $details->width = $model->getInterval('width');
            $details->diameter = $model->getInterval('diameter');
            $details->pcd = $model->getInterval('mounting_holes');
            $details->pcd2 = $model->getInterval('mounting_holes_diameter');
            $details->et = $model->getInterval('outreach');
            $details->dco = $model->getInterval('central_hole_diameter');
            $details->color = $model->getColors();
            $details->producer = DiskProducer::model()->findByPk($model->producer);

            $cr = new CDbCriteria;
            $params = array(
                ':name' => $model->name
            );
            $cr->addCondition("name=:name");
            foreach (WheelsDisk::getFilters() as $field => $title) {
                if (isset($_REQUEST[$field]) && $_REQUEST[$field] != '' && $_REQUEST[$field] != 0) {
                    $cr->addCondition("$field=:$field");
                    $params[":$field"] = $_REQUEST[$field];
                }
            }
            $cr->params = $params;
            $cr->order = 'diameter, width ASC';

            $this->controller->render('details',array(
                'model' => $model,
                'details' => $details,
                'list' => WheelsDisk::model()->findAll($cr)
            ));
        } else
            throw new CHttpException(404);*/
    }

}