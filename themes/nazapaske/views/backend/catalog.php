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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Диски</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo CHtml::form(Yii::app()->createUrl('backend/upload/disk'),'post',array('enctype'=>'multipart/form-data')); ?>

                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">!!!!!!!!!</h3>
                            </div>
                            <div class="panel-body">
                            Загружаемый прайс должен быть в формате CSV. Без шапки - только список моделей! Разделитель полей - точка с запятой. Строгая структура:<br />
                                <ul>
                                    <li>Название модели (без наименования производителя, ничего лишнего, кроме сокращения. 4Ex: Uros, LM01, CI25)</li>
                                    <li>Артикул (если нет, то пустой столбец)</li>
                                    <li>Ширина</li>
                                    <li>Диаметр</li>
                                    <li>PCD</li>
                                    <li>PCD2</li>
                                    <li>ET (вылет)</li>
                                    <li>ДЦО</li>
                                    <li>Цвет</li>
                                    <li>Остаток</li>
                                    <li>Цена</li>
                                </ul>
                                При другом порядке столбцов обновление пройдёт с ошибками и придётся разворачивать дамп БД (если таковой был сделан заранее руками перед обновлением).<br />
                                В случае, если обновляется каталог реплея или легеартиса, то сокращение модели авто должно быть в имени модели
                            </div>
                        </div>

                        <?php echo CHtml::fileField('file'); ?>
                        <div>Производитель: <?php echo CHtml::dropDownList('producer',false,DiskProducer::getList()) ?></div>
                        <div><label><?php echo CHtml::checkBox('drop',false) ?> Удалить все модели производителя перед обновлением</label></div>
                        <div>Что делаем с пересекающимися моделями? (если старые модели не удаляются)</div>
                        <div><?php echo CHtml::radioButtonList('collision',0,[0 => 'Не трогаем', 1 => 'Обновляем']) ?></div>
                        <div>Процент <?php echo CHtml::textField('percent',0); ?></div>
                        <?php echo CHtml::submitButton('Обновить'); ?>
                        <?php echo CHtml::endForm(); ?>
                    </div>
                </div>
                <br />
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Шины</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo CHtml::form(Yii::app()->createUrl('backend/upload/tire'),'post',array('enctype'=>'multipart/form-data')); ?>

                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">!!!!!!!!!</h3>
                            </div>
                            <div class="panel-body">
                                Загружаемый прайс должен быть в формате CSV. Без шапки - только список моделей! Разделитель полей - точка с запятой. Строгая структура:<br />
                                <ul>
                                    <li>Название производителя (глявное, чтобы в имена совпадали с теми, которые уже есть на сайте. т.е. "BFGoodrich" и "BFGood rich" будут считаться разными производителями)</li>
                                    <li>Название модели (без наименования производителя, ничего лишнего, кроме сокращения. 4Ex: Activan, All Terrain T/A KO, Matrac XM KH35)</li>
                                    <li>Артикул (если нет, то пустой столбец)</li>
                                    <li>Профиль</li>
                                    <li>Высота</li>
                                    <li>Диаметр</li>
                                    <li>Индекс скорости и нагрузки</li>
                                    <li>Сезонность</li>
                                    <li>Тип</li>
                                    <li>Шиповка</li>
                                    <li>Остаток</li>
                                    <li>Цена</li>
                                </ul>
                                При другом порядке столбцов обновление пройдёт с ошибками и придётся разворачивать дамп БД (если таковой был сделан заранее руками перед обновлением).
                            </div>
                        </div>

                        <?php echo CHtml::fileField('file'); ?>
                        <div>Что делаем с пересекающимися моделями?</div>
                        <div><?php echo CHtml::radioButtonList('collision',0,[0 => 'Не трогаем', 1 => 'Обновляем']) ?></div>
                        <?php echo CHtml::submitButton('Обновить'); ?>
                        <?php echo CHtml::endForm(); ?>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="files">
                С файлами, думаю будет проще заливать их через ФТП
            </div>
        </div>
    </div>
</div>