<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 19.04.15
 * Time: 11:22
 */

class PageController extends Controller {

    public function actions()
    {
        return array(
            'index' => 'application.controllers.actions.page.IndexAction',
            'page' => 'application.controllers.actions.page.PageAction',
        );
    }

} 