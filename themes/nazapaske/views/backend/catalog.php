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
            <li role="presentation" class="active"><a href="#catalog" aria-controls="home" role="tab" data-toggle="tab">Каталог</a></li>
            <li role="presentation"><a href="#update" aria-controls="profile" role="tab" data-toggle="tab">Обновление прайсов</a></li>
            <!--li role="presentation"><a href="#files" aria-controls="profile" role="tab" data-toggle="tab">Файлы</a></li-->
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="catalog">
                <ul>
                    <li><?php echo CHtml::link('Диски',Yii::app()->createUrl('backend/producer/disk')); ?></li>
                    <li><?php echo CHtml::link('Шины',Yii::app()->createUrl('backend/producer/tire')); ?></li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="update">
                <div>Диски</div>
                <form action="<?php Yii::app()->createUrl('backend/upload/disk'); ?>" method="post" enctype="multipart/form-data">
                    <input type="file" name="disks" />
                    <input type="submit" value="Обновить" />
                </form>
                <br /><br />
                <div>Шины</div>
                <input type="file" name="tires" />
            </div>
            <div role="tabpanel" class="tab-pane fade" id="files">
                С файлами, думаю будет проще заливать их через ФТП
            </div>
        </div>
    </div>
</div>