<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 17.08.15
 * Time: 20:27
 */
?>
<div class="row item-card">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->renderPartial('//backend/menu'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

        <?php $form=$this->beginWidget('CActiveForm', array(
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // See class documentation of CActiveForm for details on this,
            // you need to use the performAjaxValidation()-method described there.
            'enableAjaxValidation'=>false,
        ));

        echo CHtml::hiddenField('drop',1);
        ?>

        Вы уверены, что хотите удалить страницу/статью "<?php echo $model->title; ?>"?<br /><br />

        <button class="btn btn-primary">Да <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
        <a class="btn btn-primary-straw pull-right" href="<?php echo Yii::app()->createUrl('backend/pages'); ?>">Нет</a>

        <?php $this->endWidget(); ?>

    </div>
</div>