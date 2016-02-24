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

    public function run($id)
    {
        $model = WheelsTire::model()->findByPk($id);
        if ($model != null) {
            $details = new stdClass;
            $details->producerName = $model->getProducerName();
            $details->width = $model->getInterval('width');
            $details->diameter = $model->getInterval('diameter');
            $details->shape = $model->getInterval('shape');
            $details->season = $model->getSeasons();
            $details->studding = $model->getStudding();

            $cr = new CDbCriteria;
            $params = array(
                ':model' => $model->model
            );
            $cr->addCondition("model=:model");
            foreach (WheelsTire::getFilters() as $field => $title) {
                if (isset($_REQUEST[$field]) && $_REQUEST[$field] != '' && $_REQUEST[$field] != 0) {
                    $cr->addCondition("$field=:$field");
                    $params[":$field"] = $_REQUEST[$field];
                }
            }
            $cr->params = $params;
            $cr->order = 'diameter, width, shape ASC';

            $this->controller->render('details',array(
                'model' => $model,
                'details' => $details,
                'list' => WheelsTire::model()->findAll($cr)
            ));
        }
        else
            throw new CHttpException('404');
    }

}