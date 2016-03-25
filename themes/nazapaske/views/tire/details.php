<div class="breadcrumbs">
    <?php
    echo implode('|',array(
        CHtml::link('Главная','/'),
        CHtml::link('Шины',Yii::app()->createUrl('tire')),
        CHtml::link(ucfirst($details->producerName),Yii::app()->createUrl("tire/producer/$model->producer")),
        CHtml::link($model->name,Yii::app()->createUrl("tire/details/$model->tireid")),
    ));
    ?>
</div>
<div class="row item-card">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->renderPartial('//tire/producers'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-rounded img-thumbnail">
                <?php echo CHtml::link(CHtml::image("http://nazapaske.ru/$model->img"),"http://nazapaske.ru/$model->img",array("data-lightbox"=>"tire")); ?>
            </div>
            <?php $images = $model->images(); ?>
            <?php if ($images != null) { ?>
                <div class="gallery">
                    <?php foreach ($images as $image) { ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="img-rounded img-thumbnail">
                                <?php echo CHtml::link(CHtml::image("http://nazapaske.ru/$image->img"),"http://nazapaske.ru/$image->img",array("data-lightbox"=>"tire")); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="part-title"><?php echo $model->getProducerName() ?> <?php echo $model->name; ?></div>
            <div class="info">
                <table class="table table-hover">
                    <tr>
                        <td>Производитель</td>
                        <td><?php echo $details->producerName; ?></td>
                    </tr>
                    <tr>
                        <td>Ширина</td>
                        <td><?php echo $details->width->min; ?><?php echo ($details->width->min != $details->width->max) ? " - ".$details->width->max : ''; ?></td>
                    </tr>
                    <tr>
                        <td>Профиль</td>
                        <td><?php echo $details->shape->min; ?><?php echo ($details->shape->min != $details->shape->max) ? " - ".$details->shape->max : ''; ?></td>
                    </tr>
                    <tr>
                        <td>Диаметр</td>
                        <td><?php echo $details->diameter->min; ?><?php echo ($details->diameter->min != $details->diameter->max) ? " - ".$details->diameter->max : ''; ?></td>
                    </tr>
                    <tr>
                        <td>Сезонность</td>
                        <td><?php echo implode(', ',$details->season); ?></td>
                    </tr>
                    <tr>
                        <td>Шиповка</td>
                        <td><?php echo implode(', ',$details->studding); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 models-reviews">

            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#models" aria-controls="models" role="tab" data-toggle="tab">Модели</a></li>
                <!--li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Отзывы</a></li-->
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="models">
                    <table class="table table-hover model-list">
                        <thead>
                        <tr>
                            <td></td>
                            <td>Размер</td>
                            <td>Диаметр</td>
                            <td>Сезонность</td>
                            <td>Шиповка</td>
                            <td>Цена</td>
                            <td></td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $seasons = array(
                            false,
                            "Всесезонная",
                            "Летняя",
                            "Зимняя"
                        );
                        ?>
                        <?php foreach ($list as $tire) { ?>
                            <tr>
                                <td>
                                    <div class="img-rounded img-thumbnail">
                                        <?php echo CHtml::link(CHtml::image("http://nazapaske.ru/$tire->img"),"http://nazapaske.ru/$tire->img",array("data-lightbox"=>"disk-$tire->tireid")); ?>
                                    </div>
                                </td>
                                <td><?php echo $tire->width; ?>/<?php echo $tire->shape; ?></td>
                                <td><?php echo $tire->diameter; ?></td>
                                <td><?php echo $seasons[$tire->season]; ?></td>
                                <td><?php echo ($tire->studding == 1) ? 'Да' : 'Нет'; ?></td>
                                <td class="price-cell"><?php echo $tire->raw_price; ?> <span class="glyphicon glyphicon-ruble"></span></td>
                                <td class="counter-cell">
                                    <div class="input-group counter">
                                        <div class="input-group-addon glyphicon glyphicon-minus"></div>
                                        <input type="text" class="form-control" value="4" />
                                        <div class="input-group-addon glyphicon glyphicon-plus"></div>
                                    </div>
                                </td>
                                <td class="to-cart-btn-cell">
                                    <div class="input-group cart-btn" data-id="<?php echo $tire->tireid; ?>" data-type="tire">
                                        <div class="input-group-addon glyphicon glyphicon-shopping-cart"></div>
                                        <input type="submit" class="form-control" value="Купить" />
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="reviews">

                </div>
            </div>

        </div>
    </div>
</div>

<div class="alert alert-success" role="alert">
    Товар добавлен в корзину
</div>

<script src="/lightbox/js/lightbox.min.js"></script>
<link href="/lightbox/css/lightbox.css" rel="stylesheet" />
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

        $(".cart-btn").click(function(){
            $.ajax({
                url: '<?php echo Yii::app()->createUrl('cart/add'); ?>',
                type: 'post',
                data: {
                    id: $(this).data("id"),
                    type: $(this).data("type"),
                    count: $(this).parent(".to-cart-btn-cell").prev(".counter-cell").children(".counter").children("input").val()
                },
                success: function(){
                    $.ajax({
                        url: '<?php echo Yii::app()->createUrl('/cart/mini'); ?>',
                        success: function(data){
                            var json = JSON.parse(data);
                            setCart(json.count,json.price);
                        }
                    });
                    $(".alert").fadeIn(250).delay(3000).fadeOut(250);
                }
            });
        });
    });
</script>