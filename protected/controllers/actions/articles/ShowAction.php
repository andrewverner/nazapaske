<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 19.04.15
 * Time: 11:23
 */

class ShowAction extends CAction {

    public function run($id)
    {
        $article = Page::model()->findByPk($id);
        if ($article != null) {
            $this->controller->render('show',array('model' => $article));
        }
        else
            throw new CHttpException('404');
    }

} 