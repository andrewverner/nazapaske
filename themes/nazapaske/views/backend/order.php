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

        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tables" aria-controls="home" role="tab" data-toggle="tab">Общая информация</a></li>
            <li role="presentation"><a href="#dumps" aria-controls="profile" role="tab" data-toggle="tab">Товары</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="tables">
                <table id="all-items" class="table table-hover">
                    <tr>
                        <td>ID</td>
                        <td><?php echo $model->cartid; ?></td>
                    </tr>
                    <tr>
                        <td>Номер</td>
                        <td><?php echo $model->number; ?></td>
                    </tr>
                    <tr>
                        <td>Имя</td>
                        <td><?php echo $model->name; ?></td>
                    </tr>
                    <tr>
                        <td>Телефон</td>
                        <td><?php echo $model->phone; ?></td>
                    </tr>
                    <tr>
                        <td>Почта</td>
                        <td><?php echo $model->email; ?></td>
                    </tr>
                    <tr>
                        <td>Доставка</td>
                        <td><?php echo $model->getDeliveryType($model->delivery); ?></td>
                    </tr>
                    <tr>
                        <td>Оплата</td>
                        <td><?php echo $model->getPaymentType($model->payment); ?></td>
                    </tr>
                    <tr>
                        <td>Адрес</td>
                        <td><?php echo $model->address; ?></td>
                    </tr>
                    <tr>
                        <td>Дата заказа</td>
                        <td><?php echo $model->create_date; ?></td>
                    </tr>
                    <tr>
                        <td>Товары</td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>Комментарий</td>
                        <td><?php echo $model->comment; ?></td>
                    </tr>
                </table>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="dumps">
                <?php $data = json_decode($model->data); ?>
                <?php if (isset($data->cart->disk) && $data->cart->disk != null) { ?>
                    <div>Диски</div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td>#</td><td>Производитель</td><td>Модель</td><td>Размер</td><td>PCD</td><td>ET</td><td>ДЦО</td><td>Цвет</td><td>Количество</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data->cart->disk as $id => $count) : ?>
                            <?php $disk = WheelsDisk::model()->findByPk($id); ?>
                            <?php if ($disk != null) { ?>
                            <tr>
                                <td><?php echo CHtml::link($id,Yii::app()->createUrl("disk/details/$id"),['target'=>'_blank']); ?></td>
                                <td><?php echo $disk->getProducerName(); ?></td>
                                <td><?php echo $disk->name; ?></td>
                                <td><?php echo $disk->width ?>*<?php echo $disk->diameter ?></td>
                                <td><?php echo $disk->mounting_holes ?>*<?php echo $disk->mounting_holes_diameter ?></td>
                                <td><?php echo $disk->outreach ?></td>
                                <td><?php echo $disk->central_hole_diameter ?></td>
                                <td><?php echo $disk->color ?></td>
                                <td><?php echo $count; ?></td>
                            </tr>
                            <?php } else { ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td colspan="8">Товар был удалён из базы</td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php } ?>

                <?php if (isset($data->cart->tire) && $data->cart->tire != null) { ?>
                    <div>Шины</div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td>#</td><td>Производитель</td><td>Модель</td><td>Размер</td><td>Диаметр</td><td>Сезонность</td><td>Шиповка</td><td>Количество</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data->cart->tire as $id => $count) : ?>
                            <?php $tire = WheelsTire::model()->findByPk($id); ?>
                            <?php if ($tire != null) { ?>
                                <tr>
                                    <td><?php echo CHtml::link($id,Yii::app()->createUrl("tire/details/$id"),['target'=>'_blank']); ?></td>
                                    <td><?php echo $tire->getProducerName(); ?></td>
                                    <td><?php echo $tire->name; ?></td>
                                    <td><?php echo $tire->width ?>/<?php echo $tire->shape ?></td>
                                    <td><?php echo $tire->diameter ?></td>
                                    <td><?php echo $tire->getSeasonName() ?></td>
                                    <td><?php echo ($tire->studding == 1) ? 'Да' : 'Нет' ?></td>
                                    <td><?php echo $count; ?></td>
                                </tr>
                            <?php } else { ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td colspan="7">Товар был удалён из базы</td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>

    </div>
</div>