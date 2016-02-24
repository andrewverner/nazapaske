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
                CHtml::link($producer->name,Yii::app()->createUrl("backend/tires/$producer->id")),
            );
            echo implode('|',$bread);
            ?>
        </div>

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
                <td>ID</td><td>Имя</td><td>Ширина</td><td>Диаметр</td><td>Профиль</td><td>Сезонность</td><td>Модель</td><td>Шипы</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach($models as $model): ?>
                <tr>
                    <td><?php echo $model->tireid; ?></td>
                    <td><?php echo CHtml::link($model->name,Yii::app()->createUrl("backend/tire/$model->tireid")); ?></td>
                    <td><?php echo $model->width; ?></td>
                    <td><?php echo $model->diameter; ?></td>
                    <td><?php echo $model->shape; ?></td>
                    <td><?php echo implode(', ',$model->getSeasons()); ?></td>
                    <td><?php echo $model->model; ?></td>
                    <td><?php echo ($model->studding == 1) ? 'Да' : 'Нет'; ?></td>
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