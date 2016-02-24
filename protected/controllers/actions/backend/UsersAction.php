<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:25
 */

class UsersAction extends CAction
{

    public function run()
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $criteria = new CDbCriteria;

            $count = User::model()->count($criteria);
            $pages = new CPagination($count);

            // results per page
            $pages->pageSize = 25;
            $pages->applyLimit($criteria);
            $models = User::model()->findAll($criteria);

            $this->controller->render('users', array(
                'models' => $models,
                'pages' => $pages,
            ));
        }
    }

} 