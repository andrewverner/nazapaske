<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 19.08.15
 * Time: 20:57
 */
?>
<div class="row item-card">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->renderPartial('//backend/menu'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"><br />

        <div class="breadcrumbs">
            <?php
            $bread = array(
                CHtml::link('Backend',Yii::app()->createUrl('backend')),
                CHtml::link('Каталог',Yii::app()->createUrl('backend/catalog')),
                CHtml::link('Диски',Yii::app()->createUrl('backend/producer/disk')),
            );
            echo implode('|',$bread);
            ?>
        </div>

        <ul>
            <?php foreach ($models as $model) : ?>
                <li><?php echo CHtml::link($model->name,Yii::app()->createUrl("backend/disks/$model->id")) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>