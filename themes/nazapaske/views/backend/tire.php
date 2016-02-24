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
                CHtml::link('Шины',Yii::app()->createUrl('backend/producer/tire')),
                CHtml::link($model->getProducerName(),Yii::app()->createUrl("backend/tires/$model->producer")),
                CHtml::link($model->name,Yii::app()->createUrl("backend/tire/$model->tireid")),
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
                    <?php echo $form->labelEx($model,'shape'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'shape'); ?>
                    <?php echo $form->error($model,'shape'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'season'); ?>
                </td>
                <td>
                    <?php echo $form->dropDownList($model,'season',[WheelsTire::SEASON_ALL => 'Всесезонная',WheelsTire::SEASON_SUMMER => 'Летняя',WheelsTire::SEASON_WINTER => 'Зимняя']); ?>
                    <?php echo $form->error($model,'season'); ?>
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
                    <?php echo $form->labelEx($model,'model'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'model'); ?>
                    <?php echo $form->error($model,'model'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'speed'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'speed'); ?>
                    <?php echo $form->error($model,'speed'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'studding'); ?>
                </td>
                <td>
                    <?php echo $form->dropDownList($model,'studding',[1=>'Да',2=>'Нет']); ?>
                    <?php echo $form->error($model,'studding'); ?>
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
                    <?php echo $form->labelEx($model,'in_index'); ?>
                </td>
                <td>
                    <?php echo $form->textField($model,'in_index'); ?>
                    <?php echo $form->error($model,'in_index'); ?>
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