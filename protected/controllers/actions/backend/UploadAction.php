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
                        WheelsDisk::model()->deleteAllByAttributes(['producer' => $_POST['producer']]);
                    }
                    $producer = DiskProducer::model()->findByPk($_POST['producer']);
                    $rows = file("/var/www/andrewverner/data/www/w.andrewverner.ru/protected/prices/$type/$time.csv");
                    foreach ($rows as $row) {
                        list($name,$article,$width,$diameter,$pcd,$pcd2,$et,$dco,$color,$count,$price) = explode(';',$row);

                        $width = str_replace(',','.',$width);
                        $pcd2 = str_replace(',','.',$pcd2);
                        $dco = str_replace(',','.',$dco);
                        $price = preg_replace('/[^0-9\/]/','',$price);

                        $file = "/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei/wtm_$name-$color.jpg";
                        $img = (file_exists($file)) ? "/images/disk/Enkei/wtm_$name-$color.jpg" : null;
                        if (!$img) {
                            $file = "/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei/wtm_$name-$color.png";
                            $img = (file_exists($file)) ? "/images/disk/Enkei/wtm_$name-$color.png" : null;
                        }

                        $model = WheelsDisk::model()->findByAttributes([
                            'name'                      => "{$producer->name} $name",
                            'producer'                  => $producer->id,
                            'width'                     => $width,
                            'diameter'                  => $diameter,
                            'mounting_holes'            => $pcd,
                            'mounting_holes_diameter'   => $pcd2,
                            'outreach'                  => $et,
                            'central_hole_diameter'     => $dco,
                        ]);
                        if ($model && $_POST['collision'] == 1) {
                            $model->saveAttributes([
                                'price' => $price,
                                'raw_price' => $price,
                                'percent' => $_POST['percent']
                            ]);
                        } else {
                            $model = new WheelsDisk();
                            $model->setAttributes(array(
                                'width'                     => $width,
                                'diameter'                  => $diameter,
                                'mounting_holes'            => $pcd,
                                'mounting_holes_diameter'   => $pcd2,
                                'outreach'                  => $et,
                                'central_hole_diameter'     => $dco,
                                'name'                      => "{$producer->name} $name",
                                'price'                     => $price,
                                'article'                   => $article,
                                'color'                     => $color,
                                'producer'                  => $producer->id,
                                'img'                       => $img,
                                'raw_price'                 => $price,
                                'priority'                  => 0,
                                'percent'                   => 0,
                                'model'                     => (in_array(strtolower($producer->name),['replay','replica'])) ? $name : null,
                            ));
                            $model->save();
                        }
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