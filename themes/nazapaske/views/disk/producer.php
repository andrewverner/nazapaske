<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 3/19/15
 * Time: 12:49 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="breadcrumbs">
    <?php echo implode('|',array(
        CHtml::link('Главная','/'),
        CHtml::link('Диски',Yii::app()->createUrl('disk')),
        CHtml::link(WheelsDisk::model()->getProducerName($pid),Yii::app()->createUrl("disk/producer/$pid")),
    )); ?>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->renderPartial('//disk/producers'); ?>
        <?php if ($pid == 2) : ?>
            <br /><br />
            <?php $this->renderPartial('//disk/replay_models'); ?>
        <?php endif ?>
        <br /><br />
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $this->renderPartial('//site/disk_filter',array('grid'=>2)); ?>
            </div>
        </div>

        <?php if ($pid == 2) { ?>
            <?php foreach (WheelsDisk::model()->replayMods() as $mod) { ?>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 producer-link-div">
                    <div class="hover-shadow">
                        <a class="producer-logo" style="background-image: url('http://nazapaske.ru/images/logos/disks/Replay/<?php echo WheelsDisk::tModel($mod->model); ?>.jpg')" href="<?php echo Yii::app()->createUrl("disk/model/$mod->model"); ?>"></a>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 part-title">
                ДИСКИ <?php echo WheelsDisk::model()->getProducerName($pid); ?>
            </div>
        </div>
        <?php
        $this->renderPartial('//disk/item_3',array('models'=>$models));
        ?>
        <?php $this->widget('CLinkPager', array(
            'pages' => $pages,
            'firstPageLabel' => '<< Первая',
            'lastPageLabel' => 'Последняя >>',
            'nextPageLabel' => 'Следующая >',
            'prevPageLabel' => '< Предыдущая',
            'header' => 'Страницы:'
        )) ?>
    </div>
</div>