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
        CHtml::link('Шины',Yii::app()->createUrl('tire')),
        CHtml::link(WheelsTire::model()->getProducerName($pid),Yii::app()->createUrl("tire/producer/$pid")),
    )); ?>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->renderPartial('//tire/producers'); ?>
        <br /><br />
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php $this->renderPartial('//site/tire_filter',array('grid'=>2)); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 part-title">
                ШИНЫ <?php echo WheelsTire::model()->getProducerName($pid); ?>
            </div>
        </div>
        <?php
        $this->renderPartial('//tire/item_3',array('models'=>$models));
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