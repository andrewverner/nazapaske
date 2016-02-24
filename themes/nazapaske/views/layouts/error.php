<div class="breadcrumbs">
    <?php echo implode('|',array(
        CHtml::link('Главная','/'),
        'Ошибка'
    )); ?>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 articles-left-column">
        <?php $this->renderPartial('//layouts/left_links'); ?>
        <br /><br />
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 article-description-block">
        
    </div>
</div>