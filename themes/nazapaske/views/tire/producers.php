<div class="part-title">КАТАЛОГ</div>
<ul class="side-producers-list">
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: verner
 * Date: 3/17/15
 * Time: 5:28 PM
 * To change this template use File | Settings | File Templates.
 */
foreach (TireProducer::model()->findAll() as $producer) {
?>
    <li>
        <a href="<?php echo Yii::app()->createUrl("tire/producer/$producer->id"); ?>"><?php echo mb_strtoupper($producer->name); ?></a>
    </li>
<?php } ?>
</ul>