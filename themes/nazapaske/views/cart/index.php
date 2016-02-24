<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 4/23/15
 * Time: 11:00 AM
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="breadcrumbs">
    <?php
    echo implode('|',array(
        CHtml::link('Главная','/'),
        CHtml::link('Корзина',Yii::app()->createUrl('cart'))));
    ?>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cart-page">
        <div class="part-title">КОРЗИНА</div>
        <?php if (!$disk && !$tire) { ?>
            Корзина пуста
        <?php } else { ?>
            <?php if ($disk) { ?>
                <br />
                <div class="part-title">ДИСКИ</div>
                <form action="<?php echo Yii::app()->createUrl('cart/updateDisk'); ?>" method="post">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td width="5%">#</td>
                                <td width="35%">Модель</td>
                                <td width="15%">Цена</td>
                                <td width="20%">Количество</td>
                                <td width="20%">Общая стоимость</td>
                                <td width="5%"></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $z = 0; $dTotal = 0; ?>
                            <?php foreach (Yii::app()->session->get('disk') as $id => $count) { ?>
                                <?php $z++; ?>
                                <?php $model = WheelsDisk::model()->findByPk($id); ?>
                                <?php $dTotal += $model->price()*$count; ?>
                                <tr>
                                    <td>
                                        <?php echo $z; ?>
                                        <?php echo CHtml::hiddenField('id[]',$model->diskid); ?>
                                    </td>
                                    <td><?php echo CHtml::link($model->name,Yii::app()->createUrl("disk/details/$model->diskid")); ?></td>
                                    <td><?php echo number_format($model->price(),2,'.',' '); ?></td>
                                    <td>
                                        <div class="input-group counter">
                                            <div class="input-group-addon glyphicon glyphicon-minus"></div>
                                            <input type="text" name="count[]" value="<?php echo $count; ?>" class="form-control">
                                            <div class="input-group-addon glyphicon glyphicon-plus"></div>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($model->price()*$count,2,'.',' ') ?></td>
                                    <td>
                                        <?php echo CHtml::link('<span class="glyphicon glyphicon-remove"></span>',Yii::app()->createUrl("cart/removeDisk/$model->diskid")); ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Итого</td>
                                <td><?php echo number_format($dTotal,2,'.',' '); ?></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" value="Обновить список дисков" class="btn btn-primary btn-sm" />
                    <div style="clear: both;"></div>
                </form>
            <?php } ?>

            <?php if ($tire) { ?>
                <br />
                <div class="part-title">ШИНЫ</div>
                <form action="<?php echo Yii::app()->createUrl('cart/updateTire'); ?>" method="post">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td width="5%">#</td>
                            <td width="35%">Модель</td>
                            <td width="15%">Цена</td>
                            <td width="20%">Количество</td>
                            <td width="20%">Общая стоимость</td>
                            <td width="5%"></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $z = 0; $tTotal = 0; ?>
                        <?php foreach (Yii::app()->session->get('tire') as $id => $count) { ?>
                            <?php $z++; ?>
                            <?php $model = WheelsTire::model()->findByPk($id); ?>
                            <?php $tTotal += $model->raw_price*$count; ?>
                            <tr>
                                <td>
                                    <?php echo $z; ?>
                                    <?php echo CHtml::hiddenField('id[]',$model->tireid); ?>
                                </td>
                                <td><?php echo CHtml::link($model->name,Yii::app()->createUrl("tire/details/$model->tireid")); ?></td>
                                <td><?php echo number_format($model->raw_price,2,'.',' '); ?></td>
                                <td>
                                    <div class="input-group counter">
                                        <div class="input-group-addon glyphicon glyphicon-minus"></div>
                                        <input type="text" name="count[]" value="<?php echo $count; ?>" class="form-control">
                                        <div class="input-group-addon glyphicon glyphicon-plus"></div>
                                    </div>
                                </td>
                                <td><?php echo number_format($model->raw_price*$count,2,'.',' ') ?></td>
                                <td>
                                    <?php echo CHtml::link('<span class="glyphicon glyphicon-remove"></span>',Yii::app()->createUrl("cart/removeTire/$model->tireid")); ?>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Итого</td>
                            <td><?php echo number_format($tTotal,2,'.',' '); ?></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="submit" value="Обновить список шин" class="btn btn-primary btn-sm" />
                    <div style="clear: both;"></div>
                </form>
            <?php } ?>

            <div align="center">
                <?php $form = $this->beginWidget('CActiveForm', array('id' => 'cart-form','action' => '/index.php/cart/send', 'method' => 'post')); ?>

                <?php if (!empty($cart->errors)) { ?>
                    <?php echo $form->errorSummary($cart); ?>
                <?php } ?>

                <div class="row">
                    <?php echo $form->labelEx($cart, 'name'); ?>
                    <?php echo $form->textField($cart, 'name'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($cart, 'phone'); ?>
                    <?php
                    $this->widget('CMaskedTextField', array(
                        'model' => $cart,
                        'attribute' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                    ));
                    ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($cart, 'email'); ?>
                    <?php echo $form->textField($cart, 'email'); ?>
                </div>

                <div class="row radio-group delivery">
                    <label class="required title">Доставка <span class="required">*</span></label>
                    <?php echo $form->radioButtonList($cart,'delivery',WheelsCart::getDeliveryList()); ?>
                </div>

                <div class="row radio-group payment">
                    <label class="required title">Способ оплаты <span class="required">*</span></label>
                    <?php echo $form->radioButtonList($cart,'payment',WheelsCart::getPaymentList()); ?>
                </div>

                <div class="row delivery-address">
                    <?php echo $form->labelEx($cart, 'address'); ?>
                    <?php echo $form->textArea($cart, 'address'); ?>
                </div>

                <div class="row shop-address">
                    <label class="required title">Адрес магазина</label>
                    <label class="required title">344091 г.Ростов-на-Дону, ул.Краснодарская 2-я, дом 80/14</label>
                    <a href="/index.php/page/page/contacts" target="_blank" style="color:#564f44;">Смотреть на карте</a>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($cart, 'comment'); ?>
                    <?php echo $form->textArea($cart, 'comment'); ?>
                </div>

                <input type="submit" value="Оформить заказ" />

                <?php $this->endWidget(); ?>
            </div>

        <?php } ?>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".glyphicon-minus").click(function(){
            var amount = parseInt($(this).next("input[type=text]").val());
            if (amount > 1) $(this).next("input[type=text]").val(amount-1);
        });

        $(".glyphicon-plus").click(function(){
            var amount = parseInt($(this).prev("input[type=text]").val());
            if (amount > 0) $(this).prev("input[type=text]").val(amount+1);
        });

        $(".radio-group.delivery input[type=radio]").click(function(){
            if ($(this).val() == 1) {
                $(".shop-address").show();
                $(".delivery-address").hide();
                $("")
            } else {
                $(".shop-address").hide();
                $(".delivery-address").show();
            }
        });

        if ($(".radio-group.delivery input[type=radio]").val() == 1) {
            $(".shop-address").show();
            $(".delivery-address").hide();
            $("")
        } else {
            $(".shop-address").hide();
            $(".delivery-address").show();
        }
    });
</script>