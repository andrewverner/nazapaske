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
        CHtml::link('Полезная информация',Yii::app()->createUrl('articles')),
    )); ?>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 articles-left-column">
        <?php $this->renderPartial('//layouts/left_links'); ?>
        <br /><br />
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php if ($models != null) { ?>
            <?php foreach ($models as $model) : ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 article-description-block">
                    <time><?php echo $model->date; ?></time>
                    <div class="article-title"><?php echo $model->title; ?></div>
                    <div class="article-description"><?php echo $model->description; ?></div>
                    <li class="read-more">
                        <a href="<?php echo Yii::app()->createUrl("/articles/show/$model->id"); ?>">Подробнее...</a>
                    </li>
                </div>
            <?php endforeach; ?>
        <?php } else { ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                Статей пока нет
            </div>
        <?php } ?>
    </div>
</div>