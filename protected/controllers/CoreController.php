<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/28/15
 * Time: 11:34 AM
 * To change this template use File | Settings | File Templates.
 */

class CoreController extends Controller {

    public function init()
    {
        Yii::app()->theme = 'core';
    }

    public function actions()
    {
        return array(
            'index' => 'application.controllers.actions.core.IndexAction',
            'login' => 'application.controllers.actions.core.LoginAction',
        );
    }

}