<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 3/18/16
 * Time: 3:57 PM
 */
class Helper extends CComponent
{

    public function init()
    {

    }

    public static function log($data,$category)
    {
        file_put_contents(Yii::app()->basePath."/runtime/log.log",date("Y-m-d H:i:s")." $data
",FILE_APPEND);
    }

}