<ul class="side-producers-list">
    <?php
    /**
     * Created by JetBrains PhpStorm.
     * User: verner
     * Date: 3/17/15
     * Time: 5:28 PM
     * To change this template use File | Settings | File Templates.
     */
    foreach (WheelsDisk::tModel(false,true) as $code => $title) {
        ?>
        <li>
            <a href="<?php echo Yii::app()->createUrl("disk/model/$code"); ?>"><?php echo mb_strtoupper($title); ?></a>
        </li>
    <?php } ?>
</ul>