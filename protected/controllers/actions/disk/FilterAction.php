<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 09.03.15
 * Time: 17:44
 */

class FilterAction extends \CAction {

    public function run()
    {
        $cr = new CDbCriteria;

        $params = array();
        foreach (array_merge(WheelsDisk::getFilters(),array('producer'=>'Производитель')) as $field => $title) {
            if (isset($_GET[$field]) && $_GET[$field] != '' && $_GET[$field] != 0) {
                $cr->addCondition("$field=:$field");
                $params[":$field"] = $_GET[$field];
            }
        }
        $cr->params = $params;

        $cr->order = 'name ASC';
        $cr->group = "name";

        $count = WheelsDisk::model()->count($cr);
        $pages=new CPagination($count);

        // results per page
        $pages->pageSize=30;
        $pages->applyLimit($cr);

        $cr->limit = 30;
        $models = WheelsDisk::model()->findAll($cr);

        $this->controller->render('filter', array(
            'models' => $models,
            'count' => $count,
            'pages' => $pages
        ));
    }

} 