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

                        $file = "/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/$producer->name/wtm_$name-$color.jpg";
                        $img = (file_exists($file)) ? "/images/disk/$producer->name/wtm_$name-$color.jpg" : null;
                        if (!$img) {
                            $file = "/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/$producer->name/wtm_$name-$color.png";
                            $img = (file_exists($file)) ? "/images/disk/$producer->name/wtm_$name-$color.png" : null;
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
                    $s = [
                        'Всесезонная'   => 1,
                        'Летняя'        => 2,
                        'Зимняя'        => 3,
                    ];

                    $rows = file("/var/www/andrewverner/data/www/w.andrewverner.ru/protected/prices/$type/$time.csv");
                    foreach ($rows as $row) {
                        list($producerName,$model,$article,$width,$shape,$diameter,$in,$season,$type,$studding,$count,$price) = explode(';',$row);
                        $producer = TireProducer::model()->findByAttributes(['name' => strtolower($producerName)]);
                        if (!$producer) {
                            $producer = new TireProducer();
                            $producer->setAttributes(['name' => strtolower($producerName)]);
                            $producer->save();
                        }
                        $model = trim(str_replace($producer->name,'',strtolower($model)));
                        $diameter = (int)preg_replace('/[^0-9\/]/','',str_replace(',0','',$diameter));
                        $is = preg_replace('/[^A-Z]/','',$in);
                        $in = preg_replace('/[^0-9\/]/','',$in);
                        $price = preg_replace('/[^0-9\/]/','',$price);
                        
                        $check = WheelsTire::model()->findByAttributes(array(
                            'producer' => $producer->id,
                            'model' => $model,
                            'shape' => $shape,
                            'width' => $width,
                            'diameter' => $diameter
                        ));
                        if ($check && $_POST['collision'] == 1) {
                            $check->saveAttributes([
                                'price' => $price,
                                'raw_price' => $price,
                            ]);
                            //echo "update $model<br />";
                        } else {
                        
                            $export = ExportShiny::model()->findByAttributes(array(
                                'model' => $model
                            ));
                            $img = ($export != null) ? "/$export->goods_img" : null;

                            $tire = new WheelsTire;
                            $tire->setAttributes(array(
                                'width'     => $width,
                                'diameter'  => $diameter,
                                'shape'     => $shape,
                                'season'    => $s[$season],
                                'price'     => $price,
                                'name'      => "$model $width/$shape R$diameter $in$is",
                                'model'     => $model,
                                'speed'     => $is,
                                'studding'  => in_array($studding,['Да','да']) ? 1 : 2,
                                'img'       => $img,
                                'producer'  => $producer->id,
                                'raw_price' => $price,
                                'in_index'  => $in,
                                'rest'      => $count
                            ));
                            $tire->save();
                            //echo "new $model<br />";
                        }
                    }
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