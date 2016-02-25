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
            <div role="tabpanel" class="tab-pane fade in active" id="catalog">
                <ul>
                    <li><?php echo CHtml::link('Диски',Yii::app()->createUrl('backend/producer/disk')); ?></li>
                    <li><?php echo CHtml::link('Шины',Yii::app()->createUrl('backend/producer/tire')); ?></li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="update">
                <div>Диски</div>
                <?php echo CHtml::form(Yii::app()->createUrl('backend/upload/disk'),'post',array('enctype'=>'multipart/form-data')); ?>
                <?php echo CHtml::activeFileField($model, 'file'); ?>
                <div>Что делаем с пересекающимися моделями?</div>
                <?php echo CHtml::radioButtonList('collision',false,[0 => 'Не трогаем', 1 => 'Обновляем']) ?>
                Процент <?php echo CHtml::textField('percent',0); ?>
                <?php echo CHtml::submitButton('Обновить'); ?>
                <?php echo CHtml::endForm(); ?>
                <br /><br />
                <div>Шины</div>
                <?php echo CHtml::form(Yii::app()->createUrl('backend/upload/tire'),'post',array('enctype'=>'multipart/form-data')); ?>
                <?php echo CHtml::activeFileField($model, 'file'); ?>
                <?php echo CHtml::submitButton('Обновить'); ?>
                <?php echo CHtml::endForm(); ?>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="files">
                С файлами, думаю будет проще заливать их через ФТП
            </div>
        </div>
    </div>
</div>