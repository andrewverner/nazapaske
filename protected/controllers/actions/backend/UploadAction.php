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
        var_dump($_FILES);
        if (move_uploaded_file($_FILES['file']['name'],"/var/www/andrewverner/data/www/w.andrewverner.ru/protected/prices/$type/".time().".csv")) {
            switch ($type) {
                case 'disk':

                    break;
                case 'tire':

                    break;
                default:
                    throw new CHttpException(404);
                    break;
            }
        }
    }

}