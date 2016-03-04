<div class="row">
    <?php
    $c = 0;
    foreach ($models as $model) {
        $c++;
    ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mini">
            <div class="mini-details">
                <div class="img-rounded img-thumbnail">
                    <img src="<?php echo strstr($model->image(),'http://') ? $model->image() : "http://nazapaske.ru".$model->image() ; ?>" /><br />
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 model-name"><?php echo $model->name; ?></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price">от <?php echo $model->minimalPrice(); ?> <span class="glyphicon glyphicon-ruble"></span></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 details-link"><a href="<?php echo Yii::app()->createUrl("/disk/info/{$model->brand->alias}/$model->alias"); ?>" class="btn btn-primary btn-sm">Подробнее</a></div>
                </div>
            </div>
        </div>
        <?php if ($c % 4 == 0) { ?></div><div class="row"><?php } ?>
    <?php } ?>
</div>