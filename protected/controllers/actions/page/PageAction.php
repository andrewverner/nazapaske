<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 19.04.15
 * Time: 11:23
 */

class PageAction extends CAction {

    public function run($alias)
    {
        $article = Page::model()->findByAttributes(array('alias' => $alias));
        if ($article != null) {
            $this->controller->render('page',array('model' => $article));
        }
        else
            throw new CHttpException('404');
    }

} 