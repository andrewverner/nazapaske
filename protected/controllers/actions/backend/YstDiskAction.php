<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 3/29/16
 * Time: 6:36 PM
 */
class YstDiskAction extends CAction
{

    public function run()
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) throw new CHttpException(403); else {
            $xml = simplexml_load_string(file_get_contents("http://www.yst.ru/data/disk_base.xml"));
            foreach ($xml->gd as $disk) {
                if ($disk->price_recommend && in_array($disk->brand,array('ALCASTA','CROSS STREET','NZ','REPLICA','TREBL','X-RACE','YOKATTA','YST')) && trim($disk->foto)) {
                    $producer = DiskProducer::model()->findByAttributes(array('name' => $disk->brand));
                    if ($producer == null) {
                        $producer = new DiskProducer;
                        $producer->name = $disk->brand;
                        $producer->save();
                    }

                    $check = WheelsDisk::model()->findByAttributes(array(
                        'width' => $disk->width,
                        'diameter' => $disk->diameter,
                        'mounting_holes' => $disk->bolts_count,
                        'mounting_holes_diameter' => $disk->bolts_spacing,
                        'outreach' => $disk->et,
                        'central_hole_diameter' => $disk->dia,
                        'name' => $disk->model,
                        'color' => $disk->color,
                        'producer' => $producer->id,
                    ));

                    if (!$check) {
                        $model = new WheelsDisk;

                        $model->setAttributes(array(
                            'width' => $disk->width,
                            'diameter' => $disk->diameter,
                            'mounting_holes' => $disk->bolts_count,
                            'mounting_holes_diameter' => $disk->bolts_spacing,
                            'outreach' => $disk->et,
                            'central_hole_diameter' => $disk->dia,
                            'price' => $disk->price_recommend,
                            'article' => $disk->code,
                            'name' => $disk->model,
                            'color' => $disk->color,
                            'producer' => $producer->id,
                            'model' => '',
                            'img' => str_replace(' ','',trim($disk->foto)),
                            'raw_price' => $disk->price_recommend,
                            'percent' => ($disk->brand == 'REPLICA') ? 5 : null
                        ));
                        $model->save(false);
                    }
                    else
                        $check->saveAttributes([
                            'price' => $disk->price_recommend,
                            'raw_price' => $disk->price_recommend,
                        ]);
                }
            }
        }
    }

}