<?php

class UController extends Controller
{

    public function actionTire()
    {
        $rows = explode('
',"NOKIAN;HAKKA GREEN 2;165;60;15;77H;летняя;легковая;;4;2 941р.
NOKIAN;HAKKA GREEN 2;165;70;14;81T;летняя;легковая;;4;2 353р.
NOKIAN;HAKKA GREEN 2;175;65;14;86T;летняя;легковая;;4;2 402р.
NOKIAN;HAKKA GREEN 2;175;70;13;82T;летняя;легковая;;4;2 132р.
NOKIAN;HAKKA GREEN 2;175;70;14;88T;летняя;легковая;;4;2 637р.
NOKIAN;HAKKA GREEN 2;185;60;14;82T;летняя;легковая;;4;2 452р.
NOKIAN;HAKKA GREEN 2;185;65;14;86H;летняя;легковая;;4;2 693р.
NOKIAN;HAKKA GREEN 2;185;65;15;92H;летняя;легковая;;4;2 990р.
NOKIAN;HAKKA GREEN 2;185;70;14;88T;летняя;легковая;;4;2 948р.
NOKIAN;HAKKA GREEN 2;195;55;15;89V;летняя;легковая;;4;4 154р.
NOKIAN;HAKKA GREEN 2;195;55;16;91H;летняя;легковая;;4;4 641р.
NOKIAN;HAKKA GREEN 2;195;60;15;88H;летняя;легковая;;4;3 500р.
NOKIAN;HAKKA GREEN 2;195;65;15;95H;летняя;легковая;;4;3 203р.
NOKIAN;HAKKA GREEN 2;205;55;16;94H;летняя;легковая;;4;3 509р.
NOKIAN;HAKKA GREEN 2;205;65;15;99H;летняя;легковая;;4;3 763р.
NOKIAN;HAKKA GREEN 2;215;55;16;97V;летняя;легковая;;4;5 441р.");

        $producers = array();

        $s = array(
            'Всесезонная'   => 1,
            'Летняя'        => 2,
            'Зимняя'        => 3
        );

        foreach ($rows as $row) {
            list($producerName,$model,$width,$shape,$diameter,$in,$season,$type,$studding,$count,$price) = explode(';',$row);
            $diameter = (int)preg_replace('/[^0-9\/]/','',str_replace(',0','',$diameter));
            $is = preg_replace('/[^A-Z]/','',$in);
            $in = preg_replace('/[^0-9\/]/','',$in);
            $price = preg_replace('/[^0-9\/]/','',$price);

            $producerName = strtolower(trim($producerName));
            $model = strtolower(trim($model));

            if (!in_array($producerName,$producers)) {
                $producers[] = $producerName;
            }
            $producerID = array_search($producerName,$producers)+1;
            echo $producerID;

            $check = WheelsTire::model()->findByAttributes(array(
                'producer' => $producerID,
                'model' => $model,
                'shape' => $shape,
                'width' => $width,
                'diameter' => $diameter
            ));

            if ($check == null) {
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
                    //'code'      => $article,
                    'name'      => "$model $width/$shape R$diameter $in$is",
                    'model'     => $model,
                    'speed'     => $is,
                    'studding'  => ($studding == 'Да') ? 1 : 2,
                    'img'       => $img,
                    'producer'  => $producerID,
                    'raw_price' => $price,
                    'in_index'  => $in,
                    'rest'      => $count
                ));
                $tire->save();
            }
        }

        foreach ($producers as $index => $name) {
            $producer = new TireProducer;
            $producer->name = $name;
            $producer->save();
        }
    }

    public function actionW()
    {
        ini_set('max_execution_time',0);
        echo '<meta charset="utf-8" />';
        error_reporting(E_ALL);
        $w = Yii::app()->w;
        $opts = new WaterMarkOpts;
        $opts->ratio = 0.45;
        $opts->scale = false;
        $opts->alpha = true;
        $opts->horizontalAlign = WaterMarkOpts::HORIZONTAL_ALIGN_RIGHT;
        $opts->verticalAlign = WaterMarkOpts::VERTICAL_ALIGN_BOTTOM;
        /*$opts->horizontalAlign = WaterMarkOpts::HORIZONTAL_ALIGN_LEFT;
        $opts->verticalAlign = WaterMarkOpts::VERTICAL_ALIGN_TOP;*/
        $opts->x = 100;
        $opts->y = 100;
        $opts->stampType = WaterMarkOpts::STAMP_TYPE_IMAGE;
        $opts->outputFilePath = '/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei';
        $opts->sourceFilePath = '/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei';
        $opts->outputType = WaterMarkOpts::OUTPUT_TYPE_JPG;
        $opts->stampFilePath = '/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images';

        $path = $opts->sourceFilePath;
        $files = scandir($path);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..' && !file_exists("$path/wtm_$file") && !strstr($file,'wtm_')) {
                list($name,$ext) = explode('.',basename($file));
                echo "$name ".$this->_t($name)."<br />";
                if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                    $opts->sourceFile = $file;
                    $opts->resultFilePrefix = 'wtm_';

                    list($sourceWidth,$sourceHeight) = getimagesize("$opts->sourceFilePath/$opts->sourceFile");
                    $scale = ceil(ceil(round($sourceWidth/10))/5)*5;

                    if ($scale > 100) $scale = 100;
                    if ($scale < 15) $scale = 15;

                    $opts->stampFile = "wtm_$scale.png";

                    if (!Yii::app()->w->run($opts)) echo print_r(Yii::app()->w->error());
                }
            }
        }
    }

    private function _t($str)
    {
        $str = mb_strtolower($str);
        $a = array(
            'й' => 'i',
            'ц' => 'ts',
            'у' => 'u',
            'к' => 'k',
            'е' => 'e',
            'н' => 'n',
            'г' => 'g',
            'ш' => 'sh',
            'щ' => 'sch',
            'з' => 'z',
            'х' => 'h',
            'ъ' => '',
            'ё' => 'yo',
            'ф' => 'f',
            'ы' => 'y',
            'в' => 'v',
            'а' => 'a',
            'п' => 'p',
            'р' => 'r',
            'о' => 'o',
            'л' => 'l',
            'д' => 'd',
            'ж' => 'j',
            'э' => 'e',
            'я' => 'ya',
            'ч' => 'ch',
            'с' => 's',
            'м' => 'm',
            'и' => 'i',
            'т' => 't',
            'ь' => '',
            'б' => 'b',
            'ю' => 'yu',
            ' ' => '_'
        );
        foreach ($a as $c => $l) {
            str_replace($c,$l,$str);
        }
        return $str;
    }

    public function actionDisk()
    {
        error_reporting(E_ALL);
        echo '<meta charset="utf-8">';

        $rows = explode('
','');

        foreach ($rows as $row) {
            if (count(explode(';',$row)) > 5) {
                list($name,$article,$width,$diameter,$pcd,$pcd2,$et,$dco,$color,$count,$price) = explode(';',$row);
                $m = str_replace('Диск ENKEI ','',$name);
                $model = preg_replace('/[0-9\/]/','',substr($m,0,3));
                $width = str_replace(',','.',$width);
                $pcd2 = str_replace(',','.',$pcd2);
                $dco = str_replace(',','.',$dco);
                $price = preg_replace('/[^0-9\/]/','',$price);

                $file = "/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei/wtm_$m-$color.jpg";
                $img = (file_exists($file)) ? "/images/disk/Enkei/wtm_$m-$color.jpg" : null;
                if (!$img) {
                    $file = "/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei/wtm_$m-$color.png";
                    $img = (file_exists($file)) ? "/images/disk/Enkei/wtm_$m-$color.png" : null;
                }

                $disk = new WheelsDisk();
                $disk->setAttributes(array(
                    'width'                     => $width,
                    'diameter'                  => $diameter,
                    'mounting_holes'            => $pcd,
                    'mounting_holes_diameter'   => $pcd2,
                    'outreach'                  => $et,
                    'central_hole_diameter'     => $dco,
                    'name'                      => $name,
                    'price'                     => $price,
                    'article'                   => $article,
                    'color'                     => $color,
                    'producer'                  => 4,
                    'img'                       => $img,
                    'raw_price'                 => $price,
                    'priority'                  => 0,
                    'percent'                   => 0,
                    //'model'                     => $model
                ));
                $disk->save();
            }
        }

    }

    public function actionReplayFix()
    {
        ini_set('max_execution_time',0);
        $models = WheelsDisk::model()->findAllByAttributes(array('producer'=>2));
        foreach ($models as $model) {
            if (!strstr($model->name,"Replay")) {
                $model->name = "Replay $model->name";
                $model->save();
            }
        }
    }

    public function actionYstDisk()
    {
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

    public function actionYstTire()
    {
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

    public function actionYstImgFix()
    {
        $cr = new CDbCriteria;
        $cr->condition = 'producer >= :producer';
        $cr->params = array(':producer' => 17);
        $models = WheelsDisk::model()->findAll($cr);
        foreach ($models as $model) {
            $img = str_replace(' ','',trim($model->img));
            if ($img != $model->img) {
                $model->img = $img;
                $model->save();
            }
            /*if (!file_exists($model->img)) {
                $model->img = null;
            }*/
        }
    }

    public function actionModel()
    {
        $models = WheelsDisk::model()->findAllByAttributes(array('producer'=>20));
        $m = [];
        foreach ($models as $model) {
            $code = $price = preg_replace('/[^A-Z\/]/','',str_replace('CONCEPT','',strtoupper($model->name)));
            if (!in_array($code,$m)) $m[] = $code;
            $model->model = $code;
            $model->save();
        }
        echo '<pre>';
        print_r($m);
        echo '</pre>';
    }

    public function actionImgFix()
    {
        //ini_set('max_execution_time',0);
        $cr = new CDbCriteria();
        $cr->condition = 'img IS NOT NULL';
        $models = WheelsDisk::model()->findAllBySql("SELECT diskid, img FROM wheels_disk WHERE img IS NOT NULL");
        foreach ($models as $model) {
            if (!strstr($model->img,'http')) {
                if (!file_exists("/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels$model->img")) {
                    $model->img = null;
                    $model->save();
                }
            }
        }
    }

    public function actionImgExFix()
    {
        ini_set('max_execution_time',0);
        $models = WheelsDisk::model()->findAllBySql("SELECT diskid, img FROM wheels_disk WHERE img IS NOT NULL AND producer >= 17");
        foreach ($models as $model) {
            if (strstr($model->img,'http')) {
                if (!file_exists($model->img)) {
                    echo "$model->img<br />";
                    $model->img = null;
                    $model->save(false);
                }
            }
        }
    }

    public function actionEImgFix()
    {
        $models = WheelsDisk::model()->findAllByAttributes(['producer'=>4]);
        foreach ($models as $model) {
            $modelName = str_replace('Диск ENKEI ','',$model->name);
            if (file_exists("/var/www/andrewverner/data/www/wheels.andrewverner.ru/wheels/images/disk/Enkei/wtm_$modelName-$model->color.jpg")) {
                $model->img = "/images/disk/Enkei/wtm_$modelName-$model->color.jpg";
                $model->save(false);
            }
        }
    }

    public function actionPHPInfo()
    {
        phpinfo();
    }

}
