<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/28/15
 * Time: 11:35 AM
 * To change this template use File | Settings | File Templates.
 */

class LoginAction extends CAction {

    public function run()
    {
        $this->controller->render('index');
    }

}