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
                <td>ID</td><td>Контроллер</td><td>Метод</td><td>Ключ</td><td></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach($models as $model): ?>
                <tr>
                    <td><?php echo $model->id; ?></td>
                    <td><?php echo CHtml::link($model->controller,Yii::app()->createUrl("backend/meta/$model->id")); ?></td>
                    <td><?php echo CHtml::link($model->action,Yii::app()->createUrl("backend/meta/$model->id")); ?></td>
                    <td><?php echo CHtml::link($model->pk,Yii::app()->createUrl("backend/meta/$model->id")); ?></td>
                    <td><?php echo CHtml::link('<span class="glyphicon glyphicon-remove"></span>',Yii::app()->createUrl("backend/dropMeta/$model->id")); ?></td>
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