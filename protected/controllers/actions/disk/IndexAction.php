<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 09.03.15
 * Time: 17:40
 */

class IndexAction extends CAction {

    public function run()
    {
        $this->controller->render('index');
    }

} 