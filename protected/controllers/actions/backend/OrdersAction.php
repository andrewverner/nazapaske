<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:32
 */

class OrdersAction extends CAction
{

    public function run()
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $criteria = new CDbCriteria;

            $criteria->order = 'cartid DESC';

            $count = WheelsCart::model()->count($criteria);
            $pages = new CPagination($count);

            // results per page
            $pages->pageSize = 25;
            $pages->applyLimit($criteria);
            $models = WheelsCart::model()->findAll($criteria);

            $this->controller->render('orders', array(
                'models' => $models,
                'pages' => $pages,
            ));
        }
    }

} 