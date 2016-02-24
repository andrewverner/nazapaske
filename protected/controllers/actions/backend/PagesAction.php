<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:32
 */

class PagesAction extends CAction
{

    public function run()
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) $this->controller->redirect(Yii::app()->createUrl('backend')); else {
            $criteria = new CDbCriteria;

            $count = Page::model()->count($criteria);
            $pages = new CPagination($count);

            // results per page
            $pages->pageSize = 25;
            $pages->applyLimit($criteria);
            $models = Page::model()->findAll($criteria);

            $this->controller->render('pages', array(
                'models' => $models,
                'pages' => $pages,
            ));
        }
    }

} 