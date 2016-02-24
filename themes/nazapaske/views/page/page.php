<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 19.04.15
 * Time: 11:26
 */
?>
<div class="breadcrumbs">
    <?php echo implode('|',array(
        CHtml::link('Главная','/'),
        CHtml::link($model->title,Yii::app()->createUrl("page/page/$model->alias")),
    )); ?>
</div>
<div class="row">
    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 article-description-block">
        <div class="article-text"><?php echo $model->text; ?></div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 article-description-block">
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
</div>