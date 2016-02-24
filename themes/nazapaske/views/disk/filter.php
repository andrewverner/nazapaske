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

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 part-title">
                ДИСКИ
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