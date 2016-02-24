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
                CHtml::link($model->getProducerName(),Yii::app()->createUrl("backend/disks/$model->producer")),
                CHtml::link($model->name,Yii::app()->createUrl("backend/disk/$model->diskid")),
            );
            echo implode('|',$bread);
            ?>
        </div>

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

        <table class="table table-hover backend-table">
            <tr>
                <td width="15%">
                    <?php echo $form->labelEx($model,'width'); ?>
                </td>
                <td width="85%">
                    <?php echo $form->textField($model,'width'); ?>
                    <?php echo $form->error($model,'width'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'diameter'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'diameter'); ?>
                    <?php echo $form->error($model,'diameter'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'mounting_holes'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'mounting_holes'); ?>
                    <?php echo $form->error($model,'mounting_holes'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'mounting_holes_diameter'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'mounting_holes_diameter'); ?>
                    <?php echo $form->error($model,'mounting_holes_diameter'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'outreach'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'outreach'); ?>
                    <?php echo $form->error($model,'outreach'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'central_hole_diameter'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'central_hole_diameter'); ?>
                    <?php echo $form->error($model,'central_hole_diameter'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'article'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'article'); ?>
                    <?php echo $form->error($model,'article'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'name'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'name'); ?>
                    <?php echo $form->error($model,'name'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'color'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'color'); ?>
                    <?php echo $form->error($model,'color'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'raw_price'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'raw_price'); ?>
                    <?php echo $form->error($model,'raw_price'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'priority'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'priority'); ?>
                    <?php echo $form->error($model,'priority'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'percent'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'percent'); ?>
                    <?php echo $form->error($model,'percent'); ?>
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