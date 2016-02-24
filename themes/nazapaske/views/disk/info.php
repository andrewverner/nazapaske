<script type="text/javascript" src="http://credit-cart.su/services/easycredit/inc.js"></script>
<div class="breadcrumbs">
    <?php
    $bread = ($model->producer == 2) ? array(
        CHtml::link('Главная','/'),
        CHtml::link('Диски',Yii::app()->createUrl('disk')),
        CHtml::link($model->producer_name,Yii::app()->createUrl("disk/brand/$model->producer_name_alias")),
        //CHtml::link(WheelsDisk::tModel($model->model),Yii::app()->createUrl("disk/model/$model->model")),
        CHtml::link($model->name,Yii::app()->createUrl("disk/info/$model->producer_name_alias/$model->name_alias")),
    ) : array(
        CHtml::link('Главная','/'),
        CHtml::link('Диски',Yii::app()->createUrl('disk')),
        CHtml::link($model->producer_name,Yii::app()->createUrl("disk/brand/$model->producer_name_alias")),
        CHtml::link($model->name,Yii::app()->createUrl("disk/info/$model->producer_name_alias/$model->name_alias")),
    );
        echo implode('|',$bread);
    ?>
</div>