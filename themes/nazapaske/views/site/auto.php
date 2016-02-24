<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 09.05.15
 * Time: 1:18
 */
?>
<div class="breadcrumbs">
    <?php echo implode('|',array(
        CHtml::link('Главная','/'),
        CHtml::link('Полезная информация',Yii::app()->createUrl('articles')),
    )); ?>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 articles-left-column">
        <?php $this->renderPartial('//layouts/left_links'); ?>
        <br /><br />
        <?php $this->renderPartial('//layouts/vk'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="part-title">Подбор по автомобилю (<?php echo $auto_title ?>)</div>
        <table class="auto_result" width="100%">
            <tr>
                <td width="50%" valign="top">
                    <div class="part-title">ШИНЫ</div>
                    <table class="res-tbl" width="90%">
                        <thead>
                        <tr>
                            <td width="10%"></td>
                            <td width="45%" class="c-1">Заводская комплектация:</td>
                            <td width="45%" class="c-2">Замена:</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($td as $diameter) { ?>
                            <tr>
                                <td>R<?php echo $diameter ?></td>
                                <td class="c-1">
                                    <?php if (isset($ntf[$diameter])) { ?>
                                        <?php foreach ($ntf[$diameter] as $detail) { ?>
                                            <?php echo $detail[0] ?>/<?php echo $detail[1] ?> R<?php echo $diameter; ?><br />
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                                <td class="c-2">
                                    <?php if (isset($atf[$diameter])) { ?>
                                        <?php foreach ($atf[$diameter] as $detail) { ?>
                                            <?php echo $detail[0] ?>/<?php echo $detail[1] ?> R<?php echo $diameter; ?><br />
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </td>
                <td width="50%" valign="top">
                    <div class="part-title">ДИСКИ</div>
                    <table class="res-tbl" width="90%">
                        <thead>
                        <tr>
                            <td width="10%"></td>
                            <td width="45%" class="c-1">Заводская комплектация:</td>
                            <td width="45%" class="c-2">Замена:</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dd as $diameter) { ?>
                            <tr>
                                <td>R<?php echo $diameter ?></td>
                                <td class="c-1">
                                    <?php if (isset($ndf[$diameter])) { ?>
                                        <?php foreach ($ndf[$diameter] as $detail) { ?>
                                            <?php echo $detail[0] ?>X<?php echo $diameter ?> ET<?php echo $detail[1]; ?><br />
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                                <td class="c-2">
                                    <?php if (isset($adf[$diameter])) { ?>
                                        <?php foreach ($adf[$diameter] as $detail) { ?>
                                            <?php echo $detail[0] ?>X<?php echo $diameter ?> ET<?php echo $detail[1]; ?><br />
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>