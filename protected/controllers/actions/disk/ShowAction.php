<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 18.08.15
 * Time: 0:16
 */

class ShowAction extends CAction
{

    public function run($producer,$model)
    {
        $model = WheelsDisk::model()->findByAttributes([
            'producer' => DiskProducer::idByAlias($producer),
            'name' => $model
        ]);
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
            throw new CHttpException(404);
    }

} 