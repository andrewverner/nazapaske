<div class="row">
    <?php
    $c = 0;
    foreach ($models as $model) {
    $c++;
    ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mini">
        <div class="mini-details">
            <div class="img-rounded img-thumbnail">
                <img src="http://nazapaske.ru<?php echo $model->image(); ?>" alt="<?php echo $model->model; ?>" /><br />
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 model-name"><?php echo $model->getProducerName($model->producer); ?> <?php echo $model->model; ?></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 price">от <?php echo $model->minimalPrice(); ?> <span class="glyphicon glyphicon-ruble"></span></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 details-link"><a href="<?php echo Yii::app()->createUrl("/tire/details/$model->tireid"); ?>" class="btn btn-primary btn-sm">Подробнее</a></div>
            </div>
        </div>
    </div>
    <?php if ($c % 4 == 0) { ?></div><div class="row"><?php } ?>
    <?php } ?>
</div>