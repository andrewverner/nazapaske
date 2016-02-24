<script type="text/javascript" src="http://credit-cart.su/services/easycredit/inc.js"></script>
<div class="breadcrumbs">
    <?php
    $bread = ($model->producer == 2) ? array(
        CHtml::link('Главная','/'),
        CHtml::link('Диски',Yii::app()->createUrl('disk')),
        CHtml::link($details->producerName,Yii::app()->createUrl("disk/producer/$model->producer")),
        CHtml::link(WheelsDisk::tModel($model->model),Yii::app()->createUrl("disk/model/$model->model")),
        CHtml::link($model->name,Yii::app()->createUrl("disk/details/$model->diskid")),
    ) : array(
        CHtml::link('Главная','/'),
        CHtml::link('Диски',Yii::app()->createUrl('disk')),
        CHtml::link($details->producerName,Yii::app()->createUrl("disk/producer/$model->producer")),
        CHtml::link($model->name,Yii::app()->createUrl("disk/details/$model->diskid")),
    );
        echo implode('|',$bread);
    ?>
</div>
<div class="row item-card">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->renderPartial('//disk/producers'); ?>
        <br /><br />
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-rounded img-thumbnail">
                <?php echo CHtml::link(CHtml::image((strstr($model->img,'http://')) ? $model->img : "http://nazapaske.ru/".$model->image()),(strstr($model->img,'http://')) ? $model->img : "http://nazapaske.ru/".$model->image(),array("data-lightbox"=>"disk")); ?>
            </div>
            <?php $images = $model->images(); ?>
            <?php if ($images != null) { ?>
                <div class="gallery">
                    <?php foreach ($images as $image) { ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gallery-row">
                            <div class="img-rounded img-thumbnail">
                                <?php echo CHtml::link(CHtml::image((strstr($image->img,'http://')) ? $image->img : "http://nazapaske.ru/$image->img"),(strstr($image->img,'http://')) ? $image->img : "http://nazapaske.ru/$image->img",array("data-lightbox"=>"disk")); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="plogo">
                <a href="<?php echo Yii::app()->createUrl("disk/producer/$model->producer"); ?>"><img src="http://nazapaske.ru/images/logos/disks/<?php echo $details->producer->logo; ?>" /></a>
            </div>
            <div class="part-title creditgoods"><?php echo $model->name; ?></div>
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
                        <td>Диаметр</td>
                        <td><?php echo $details->diameter->min; ?><?php echo ($details->diameter->min != $details->diameter->max) ? " - ".$details->diameter->max : ''; ?></td>
                    </tr>
                    <tr>
                        <td>Сверловка</td>
                        <td><?php echo $details->pcd->min; ?><?php echo ($details->pcd->min != $details->pcd->max) ? " - ".$details->pcd->max : ''; ?></td>
                    </tr>
                    <tr>
                        <td>PCD</td>
                        <td><?php echo $details->pcd2->min; ?><?php echo ($details->pcd2->min != $details->pcd2->max) ? " - ".$details->pcd2->max : ''; ?></td>
                    </tr>
                    <tr>
                        <td>Вылет</td>
                        <td><?php echo $details->et->min; ?><?php echo ($details->et->min != $details->et->max) ? " - ".$details->et->max : ''; ?></td>
                    </tr>
                    <tr>
                        <td>ДЦО</td>
                        <td><?php echo $details->dco->min; ?><?php echo ($details->dco->min != $details->dco->max) ? " - ".$details->dco->max : ''; ?></td>
                    </tr>
                    <tr>
                        <td>Цвет</td>
                        <td><?php echo implode(', ',$details->color); ?></td>
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
                            <td>PCD</td>
                            <td>ET</td>
                            <td>ДЦО</td>
                            <td>Цвет</td>
                            <td>Цена</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($list as $disk) { ?>
                            <tr>
                                <td>
                                    <div class="img-rounded img-thumbnail">
                                        <?php echo CHtml::link(CHtml::image((strstr($disk->img,'http://')) ? $disk->img : "http://nazapaske.ru/".($disk->img ? $disk->img : '/images/no-image.png')),(strstr($disk->img,'http://')) ? $disk->img : "http://nazapaske.ru/".($disk->img ? $disk->img : '/images/no-image.png'),array("data-lightbox"=>"disk-$disk->diskid")); ?>
                                    </div>
                                </td>
                                <td><?php echo $disk->width; ?>*<?php echo $disk->diameter; ?></td>
                                <td><?php echo $disk->mounting_holes; ?>*<?php echo $disk->mounting_holes_diameter; ?></td>
                                <td><?php echo $disk->outreach; ?></td>
                                <td><?php echo $disk->central_hole_diameter; ?></td>
                                <td><?php echo $disk->color; ?></td>
                                <td class="price-cell creditprice"><?php echo $disk->price(); ?> <span class="glyphicon glyphicon-ruble"></span></td>
                                <td class="counter-cell">
                                    <div class="input-group counter">
                                        <div class="input-group-addon glyphicon glyphicon-minus"></div>
                                        <input type="text" class="form-control" value="4" />
                                        <div class="input-group-addon glyphicon glyphicon-plus"></div>
                                    </div>
                                </td>
                                <td class="to-cart-btn-cell">
                                    <div class="input-group cart-btn" data-id="<?php echo $disk->diskid; ?>" data-type="disk">
                                        <div class="input-group-addon glyph-to-cart">&nbsp;</div>
                                        <input type="submit" class="form-control" value="Купить" />
                                    </div>
                                </td>
                                <td><a href="javascript:void(0);" class="gocredit btn btn-danger">В кредит</a></td>
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