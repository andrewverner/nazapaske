<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 3/29/16
 * Time: 6:31 PM
 */
class YstTireAction extends CAction
{

    public function run()
    {
        if (Yii::app()->user->isGuest || !Yii::app()->user->isAdmin) throw new CHttpException(403); else {
            $xml = simplexml_load_string(file_get_contents("http://www.yst.ru/data/tyre_kr_opt.xml"));
            foreach ($xml as $item) {
                $producer = TireProducer::model()->findByAttributes(['name' => strtolower($item->brand)]);
                if ($producer == null) {
                    $producer = new TireProducer();
                    $producer->name = strtolower($item->brand);
                    $producer->save();
                }

                $seasonWord = $item->season;
                if ($seasonWord == 'Зима') $season = WheelsTire::SEASON_WINTER;
                elseif ($seasonWord == 'Лето') $season = WheelsTire::SEASON_SUMMER;
                else $season = WheelsTire::SEASON_ALL;

                $model = WheelsTire::model()->findByAttributes([
                    'width' => $item->width,
                    'diameter' => $item->diameter,
                    'shape' => $item->height,
                    'studding' => $xml->thorn,
                    'season' => $season,
                    'producer' => $producer->id,
                ]);

                if ($model) {
                    if ($model->price > (int)$item->price) {
                        $model->price = (int)$item->price;
                        $model->raw_price = (int)$item->price + ceil((int)$item->price*0.1);
                        $model->save();
                    }
                } else {
                    $model = new WheelsTire();
                    $model->width = $item->width;
                    $model->diameter = $item->diameter;
                    $model->shape = $item->height;
                    $model->season = $season;
                    $model->price = (int)$item->price;
                    $model->raw_price = (int)$item->price + ceil((int)$item->price*0.1);
                    $model->name = "$item->model $item->width/$item->height $item->load_index$item->speed_index";
                    $model->model = $item->model;
                    $model->speed = $item->speed_index;
                    $model->studding = $item->thorn;
                    $model->producer = $producer->id;
                    $model->in_index = $item->load_index;
                    $model->rest = 4;
                    $model->save(false);
                }
            }
        }
    }

}