<?php
/**
 * Created by PhpStorm.
 * User: Verner
 * Date: 19.08.15
 * Time: 20:57
 */
?>
<div class="row item-card">
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <?php $this->renderPartial('//backend/menu'); ?>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"><br />
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tables" aria-controls="home" role="tab" data-toggle="tab">Таблицы</a></li>
            <li role="presentation"><a href="#dumps" aria-controls="profile" role="tab" data-toggle="tab">Дампы</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="tables">
                <table class="table table-hover">
                    <?php foreach ($tables as $table) { ?>
                        <tr>
                            <td><?php echo $table; ?></td>
                            <td>Экспорт</td>
                            <td>Очистить</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="dumps">

            </div>
        </div>
    </div>
</div>