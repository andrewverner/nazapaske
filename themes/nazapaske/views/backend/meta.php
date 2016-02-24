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
            'id'=>'item-item-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // See class documentation of CActiveForm for details on this,
            // you need to use the performAjaxValidation()-method described there.
            'enableAjaxValidation'=>false,
        )); ?>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php echo $form->errorSummary($model); ?>
            </div>
        </div>

        <table class="table table-hover">
            <tr>
                <td width="15%">
                    <?php echo $form->labelEx($model,'controller'); ?>
                </td>
                <td width="85%">
                    <?php echo $form->textField($model,'controller'); ?>
                    <?php echo $form->error($model,'controller'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'action'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'action'); ?>
                    <?php echo $form->error($model,'action'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'pk'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'pk'); ?>
                    <?php echo $form->error($model,'pk'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'title'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'title'); ?>
                    <?php echo $form->error($model,'title'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'keywords'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'keywords'); ?>
                    <?php echo $form->error($model,'keywords'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'description'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'description'); ?>
                    <?php echo $form->error($model,'description'); ?>
                </td>
            </tr>
        </table>

        <div class="row buttons">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php echo CHtml::submitButton('Сохранить', array('class' => 'btn btn-primary-straw')); ?> <!--label><input checked type="checkbox" name="return_to_referer" /> Вернуться к списку</label-->
            </div>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>