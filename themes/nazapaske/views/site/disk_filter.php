<?php $grid = isset($grid) ? $grid : 4; ?>
<?php if (isset($_REQUEST["producer"])) $_REQUEST["id"] = $_REQUEST["producer"]; ?>
<div class="filter">
    <div class="block head ybg">Подбор по дискам</div>
    <div class="block content gbg">
        <div class="row">
            <form action="<?php echo Yii::app()->createUrl('disk/filter'); ?>" method="get">
            <?php foreach (WheelsDisk::getFilters() as $field => $title) { ?>
                <div class="col-lg-<?php echo $grid; ?> col-md-<?php echo $grid; ?> col-sm-<?php echo $grid; ?> col-xs-<?php echo $grid; ?> select">
                    <?php echo $title; ?><br />
                    <select name="<?php echo $field ?>">
                        <option value="0">---</option>
                        <?php foreach (WheelsDisk::getFilter($field) as $key => $val) : ?>
                            <option value="<?php echo $key; ?>" <?php echo (isset($_REQUEST[$field]) && $_REQUEST[$field] == $val) ? 'selected' : ''; ?>><?php echo $val; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <?php } ?>
                <div class="col-lg-<?php echo $grid; ?> col-md-<?php echo $grid; ?> col-sm-<?php echo $grid; ?> col-xs-<?php echo $grid; ?> select">
                    <br />
                    <input type="submit" value="Подобрать" />
                    <input type="hidden" name="producer" value="<?php echo (isset($_REQUEST["id"])) ? $_REQUEST["id"] : ''; ?>" />
                </div>
            </form>
        </div>
    </div>
</div>