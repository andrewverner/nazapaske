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

        <?php $this->widget('CLinkPager', array(
            'pages' => $pages,
            'firstPageLabel' => '<<',
            'lastPageLabel' => '>>',
            'nextPageLabel' => '>',
            'prevPageLabel' => '<',
            'header' => '',
            'htmlOptions' => array(
                'class' => 'pagination'
            ),
            'selectedPageCssClass' => 'active'
        )) ?>

        <table id="all-items" class="table table-hover">
            <thead>
            <tr>
                <td>ID</td><td>Номер</td><td>Имя</td><td>Телефон</td><td>Почта</td><td>Доставка</td><td>Оплата</td><td></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach($models as $model): ?>
                <tr>
                    <td><?php echo $model->cartid; ?></td>
                    <td><?php echo CHtml::link($model->number,Yii::app()->createUrl("backend/order/$model->cartid")); ?></td>
                    <td><?php echo $model->name; ?></td>
                    <td><?php echo $model->phone; ?></td>
                    <td><?php echo $model->email; ?></td>
                    <td><?php echo $model->getDeliveryType($model->delivery); ?></td>
                    <td><?php echo $model->getPaymentType($model->payment); ?></td>
                    <td><?php echo CHtml::link('<span class="glyphicon glyphicon-remove"></span>',Yii::app()->createUrl("backend/dropOrder/$model->cartid")); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <?php $this->widget('CLinkPager', array(
            'pages' => $pages,
            'firstPageLabel' => '<<',
            'lastPageLabel' => '>>',
            'nextPageLabel' => '>',
            'prevPageLabel' => '<',
            'header' => '',
            'htmlOptions' => array(
                'class' => 'pagination'
            ),
            'selectedPageCssClass' => 'active'
        )) ?>

    </div>
</div>