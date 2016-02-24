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
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 articles-left-column">
        <?php $this->renderPartial('//layouts/left_links'); ?>
        <br /><br />
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 cart-page">
        <div class="part-title">ЗАКАЗ ОФОРМЛЕН</div>
        Спасибо. В ближайшее время наши специалисты свяжутся с Вами для уточнения деталей заказа
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