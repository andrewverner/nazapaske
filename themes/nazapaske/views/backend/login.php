<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 16.08.15
 * Time: 0:22
 */
?>
<div id="login-form-wrapper">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <p class="note">Поля со <span class="required">*</span> обязательны.</p>

    <div class="form-group">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username', array(
            'class'=>'form-control'
        )); ?>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password', array(
            'class'=>'form-control'
        )); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="form-group buttons">
        <?php echo CHtml::submitButton('Войти', array(
            'class' => 'btn btn-primary item-buy'
        )); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>