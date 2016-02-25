<?php

/**
 * Created by PhpStorm.
 * User: denis.khodakovskiy
 * Date: 24-Feb-16
 * Time: 4:54 PM
 */
class UploadAction extends CAction
{

    public function run($type)
    {
        $model = new UploadForm();
        $model->setAttributes($_POST['UploadForm']);
        var_dump($model);
    }

}