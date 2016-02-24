<div class="breadcrumbs">
    <?php echo implode('|',array(
        CHtml::link('Главная','/'),
    )); ?>
</div>
<div class="row">
    <?php if (isset($_GET["bc"])) : ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php $this->renderPartial('auto_filter'); ?>
        </div>
        <br /><br />
    <?php endif; ?>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <?php $this->renderPartial('disk_filter',array('grid'=>4)); ?>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <?php $this->renderPartial('tire_filter'); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 part-title">
        ДИСКИ
    </div>
</div>
<?php
    $models = WheelsDisk::getItemsList(false,8,'priority DESC');
    if ($models != null) $this->renderPartial('//disk/item',array('models'=>$models));
?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 part-title">
        ШИНЫ
    </div>
</div>
<?php
$models = WheelsTire::getItemsList(false,8,'priority DESC');
if ($models != null) $this->renderPartial('//tire/item',array('models'=>$models));
?>