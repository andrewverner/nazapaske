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
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 articles-left-column">
        <div class="part-title">ДИСКИ</div>
        <div class="image" style="height:250px; overflow: hidden;">
            <a href="http://nazapaske.ru/index.php/disk">
                <img style="height:250px;" src="http://nazapaske.ru/images/disk-cat.png">
            </a>
        </div>
        <div class="part-title">ШИНЫ</div>
        <div class="image" style="height:250px; overflow: hidden;">
            <a href="http://nazapaske.ru/index.php/tire">
                <img style="height:250px;" src="http://nazapaske.ru/images/tire-cat.png">
            </a>
        </div>
        <br /><br />
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 article-description-block">
        <time><?php echo $model->date; ?></time>
        <div class="article-title"><?php echo $model->title; ?></div>
        <div class="article-text"><?php echo $model->text; ?></div>
    </div>
</div>