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
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#catalog" aria-controls="home" role="tab" data-toggle="tab">Каталог</a></li>
            <li role="presentation"><a href="#update" aria-controls="profile" role="tab" data-toggle="tab">Обновление прайсов</a></li>
            <!--li role="presentation"><a href="#files" aria-controls="profile" role="tab" data-toggle="tab">Файлы</a></li-->
        </ul>
        <div class="tab-content">
            <ul>
            <?php foreach ($models as $model) : ?>
                <li><?php echo CHtml($model->name,Yii::app()->createUrl("backend/tires/$model->id")) ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>