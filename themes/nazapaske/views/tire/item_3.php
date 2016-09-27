<?php
$width = (isset($_REQUEST["width"]) && $_REQUEST["width"] != '') ? $_REQUEST["width"] : 0;
$diameter = (isset($_REQUEST["diameter"]) && $_REQUEST["diameter"] != '') ? $_REQUEST["diameter"] : 0;
$shape = (isset($_REQUEST["shape"]) && $_REQUEST["shape"] != '') ? $_REQUEST["shape"] : 0;
$season = (isset($_REQUEST["season"]) && $_REQUEST["season"] != '') ? $_REQUEST["season"] : 0;
$studding = (isset($_REQUEST["studding"]) && $_REQUEST["studding"] != '') ? $_REQUEST["studding"] : 0;
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
                    <img src="<?php echo $model->image(); ?>" alt="<?php echo $model->model ?>" /><br />
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 model-name"><?php echo $model->getProducerName() ?> <?php echo $model->model ?></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price">от <?php echo $model->minimalPrice(); ?> <span class="glyphicon glyphicon-ruble"></span></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 details-link"><a href="<?php echo Yii::app()->createUrl(($width || $diameter || $shape || $season || $studding) ? "/tire/details/$model->tireid/$width/$diameter/$shape/$season/$studding" : "/tire/details/$model->tireid/"); ?>" class="btn btn-primary btn-sm">Подробнее</a></div>
                </div>
            </div>
        </div>
        <?php if ($c % 3 == 0) { ?></div><div class="row"><?php } ?>
    <?php } ?>
</div>