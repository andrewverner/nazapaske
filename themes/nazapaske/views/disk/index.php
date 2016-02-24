<div class="breadcrumbs">
    <?php echo implode('|',array(
        CHtml::link('Главная','/'),
        CHtml::link('Диски',Yii::app()->createUrl('disk')),
    )); ?>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->renderPartial('//disk/producers'); ?>
        <br /><br />
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $this->renderPartial('//site/disk_filter',array('grid'=>2)); ?>
            </div>
        </div>
        <?php foreach (DiskProducer::model()->findAll() as $producer) { ?>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 producer-link-div">
                <div class="hover-shadow">
                    <a class="producer-logo img-rounded img-thumbnail" style="background-image: url('http://nazapaske.ru/images/logos/disks/<?php echo $producer->logo; ?>')" href="<?php echo Yii::app()->createUrl("disk/producer/$producer->id"); ?>"></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>