<?php

/**
 * Created by PhpStorm.
 * User: denis.khodakovskiy
 * Date: 25-Feb-16
 * Time: 9:55 AM
 */
class UploadForm extends \CActiveForm
{

    public $file;

    public function rules()
    {
        return ['file', 'required'];
    }

}