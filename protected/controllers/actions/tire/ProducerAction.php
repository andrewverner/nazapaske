<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 3/19/15
 * Time: 12:39 PM
 * To change this template use File | Settings | File Templates.
 */

class ProducerAction extends CAction
{

    public function run($id)
    {
        $cr = new CDbCriteria;

        $params = array(
            ':producer' => $id
        );
        $cr->addCondition("producer=:producer");
        foreach (WheelsTire::getFilters() as $field => $title) {
            if (isset($_GET[$field]) && $_GET[$field] != '') {
                $cr->addCondition("$field=:$field");
                $params[":$field"] = $_GET[$field];
            }
        }
        $cr->params = $params;

        $cr->order = 'price ASC';
        $cr->group = "model";

        $cr->order = 'model ASC';

        $count = WheelsTire::model()->count($cr);
        $pages=new CPagination($count);

        // results per page
        $pages->pageSize=30;
        $pages->applyLimit($cr);

        $cr->limit = 30;
        $models = WheelsTire::model()->findAll($cr);

        $this->controller->render('producer', array(
            'models' => $models,
            'count' => $count,
            'pages' => $pages,
            'pid' => $id
        ));
    }

}