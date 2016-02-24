<!DOCTYPE html>
<html>
<head>
    <?php
        if (isset($_GET["id"])) $pk = $_GET["id"];
        elseif (isset($_GET["model"])) $pk = $_GET["model"];
        elseif (isset($_GET["producer"])) $pk = $_GET["producer"];
        elseif (isset($_GET["alias"])) $pk = $_GET["alias"];
        else $pk = false;
    ?>
    <?php $meta = WheelsMeta::getMeta($this->id,$this->action->id,$pk); ?>
    <meta name='yandex-verification' content='717656df2ad7a2bd' />

    <title><?php echo $meta->title; ?></title>
    <meta name="description" content="<?php echo $meta->description; ?>" />
    <meta name="keywords" content="<?php echo $meta->keywords; ?>"/>
    <meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <link href="/css/style-xs.css" type="text/css" rel="stylesheet" />
    <link href="/css/style-sm.css" type="text/css" rel="stylesheet" />
    <link href="/css/style-md.css" type="text/css" rel="stylesheet" />
    <link href="/css/style-lg.css" type="text/css" rel="stylesheet" />

    <link href="/css/style.css" type="text/css" rel="stylesheet" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Exo+2:400,800,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="/js/script.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 logo">
            <a href="/" class="logo">
                <img src="http://nazapaske.ru/images/logo.png" />
            </a>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 glyph glyph-timer">
                <strong>Приём звонков</strong><br />
                ежедневно с 09:00 до 21:00
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6 glyph glyph-phone">
                <strong>Позвоните нам</strong><br />
                <span class="big">8 (800) 550-76-10</span><br />
                <span class="small">* звонок по России бесплатный</span><br />
                <span class="small">+7 (863)</span> <span class="big">275-76-10</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 glyph glyph-cart">
                <strong>Корзина</strong><br />
                <div id="cart-content">Корзина пуста</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="top-nav">
            <?php foreach (Menu::model()->findAll('status=:status',array(':status' => 1)) as $menu) { ?>
                <?php echo CHtml::link($menu->title,Yii::app()->createUrl($menu->url)); ?>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container">
<?php echo $content; ?>
</div>

<?php $this->renderPartial('//layouts/footer'); ?>

<script>
    $(document).ready(function(){
        $.ajax({
            url: '<?php echo Yii::app()->createUrl('/cart/mini'); ?>',
            success: function(data){
                var json = JSON.parse(data);
                setCart(json.count,json.price);
            }
        });
    });
</script>

</body>
</html>