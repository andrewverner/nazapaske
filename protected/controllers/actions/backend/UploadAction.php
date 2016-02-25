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
        $time = time();
        if (move_uploaded_file($_FILES['file']['tmp_name'],"/var/www/andrewverner/data/www/w.andrewverner.ru/protected/prices/$type/$time.csv")) {
            switch ($type) {
                case 'disk':
                    if (isset($_POST['drop'])) {
                        echo 'drop';
                    }
                    else echo 'no drop';
                    $rows = file("/var/www/andrewverner/data/www/w.andrewverner.ru/protected/prices/$type/$time.csv");
                    foreach ($rows as $row) {
                        list($producer,$name,$article,$width,$diameter,$pcd,$pcd2,$et,$dco,$color,$count,$price) = explode(';',$row);

                    }
                    break;
                case 'tire':

                    break;
                default:
                    throw new CHttpException(404);
                    break;
            }
        }
        else
            echo 'Arse';
    }

}