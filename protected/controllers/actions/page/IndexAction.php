<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 19.04.15
 * Time: 11:23
 */

class IndexAction extends CAction {

    public function run()
    {
        $cr = new CDbCriteria;
        $cr->condition = 'type = :type';
        $cr->params = array(':type' => 2);
        $cr->order = 'date DESC';

        $this->controller->render('index',array('models' => Page::model()->findAll($cr)));
    }

} 