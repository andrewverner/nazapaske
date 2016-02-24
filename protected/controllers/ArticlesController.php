<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 19.04.15
 * Time: 11:22
 */

class ArticlesController extends Controller {

    public function actions()
    {
        return array(
            'index' => 'application.controllers.actions.articles.IndexAction',
            'show' => 'application.controllers.actions.articles.ShowAction',
        );
    }

} 