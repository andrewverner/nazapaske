<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 21:05
 */

class MetasAction extends CAction {

    public function run()
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $criteria = new CDbCriteria;

            $count = WheelsMeta::model()->count($criteria);
            $pages = new CPagination($count);

            // results per page
            $pages->pageSize = 25;
            $pages->applyLimit($criteria);
            $models = WheelsMeta::model()->findAll($criteria);

            $this->controller->render('metas', array(
                'models' => $models,
                'pages' => $pages,
            ));
        }
    }

} 