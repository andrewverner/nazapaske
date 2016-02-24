<?php
$width = (isset($_REQUEST["width"]) && $_REQUEST["width"] != '') ? $_REQUEST["width"] : 0;
$diameter = (isset($_REQUEST["diameter"]) && $_REQUEST["diameter"] != '') ? $_REQUEST["diameter"] : 0;
$mh = (isset($_REQUEST["mounting_holes"]) && $_REQUEST["mounting_holes"] != '') ? $_REQUEST["mounting_holes"] : 0;
$pcd = (isset($_REQUEST["mounting_holes_diameter"]) && $_REQUEST["mounting_holes_diameter"] != '') ? $_REQUEST["mounting_holes_diameter"] : 0;
$et = (isset($_REQUEST["outreach"]) && $_REQUEST["outreach"] != '') ? $_REQUEST["outreach"] : 0;
?>
<div class="row">
    <?php
    $c = 0;
    foreach ($models as $model) {
        $c++;
    ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mini">
            <div class="mini-details">
                <div class="img-rounded img-thumbnail">
                    <img src="<?php echo strstr($model->image(),'http://') ? $model->image() : "http://nazapaske.ru".$model->image() ; ?>" alt="<?php echo $model->name; ?>" /><br />
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 model-name"><?php echo $model->name; ?></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price">от <?php echo $model->minimalPrice(); ?> <span class="glyphicon glyphicon-ruble"></span></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 details-link"><a href="<?php echo Yii::app()->createUrl(($width || $diameter || $mh || $pcd || $et) ? "/disk/details/$model->diskid/$width/$diameter/$mh/$pcd/$et" : "/disk/details/$model->diskid/"); ?>" class="btn btn-primary btn-sm">Подробнее</a></div>
                </div>
            </div>
        </div>
        <?php if ($c % 3 == 0) { ?></div><div class="row"><?php } ?>
    <?php } ?>
</div>