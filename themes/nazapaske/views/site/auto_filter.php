<div class="block head ybg">Подбор по автомобилю</div>
<div class="block content gbg">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="<?php echo Yii::app()->createUrl('site/auto'); ?>" method="post">
                <table class="filters-table" width="100%">
                    <tr>
                        <td width="20%">
                            <div class="bc-brand-cell">
                                Производитель:<br />
                                <select name="auto_brand">
                                    <option value="0">----------</option>
                                    <?php foreach (BcAutoBrands::getBrandsList() as $id => $title) { ?>
                                        <option value="<?php echo $id ?>"><?php echo $title ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </td>
                        <td width="20%">
                            <div class="bc-model-cell" style="display: none;">

                            </div>
                        </td>
                        <td width="20%">
                            <div class="bc-year-cell" style="display: none;">

                            </div>
                        </td>
                        <td width="20%">
                            <div class="bc-power-cell" style="display: none;">

                            </div>
                        </td>
                        <td width="20%">
                            <div class="bc-submit-cell" style="display: none;">
                                <input type="submit" value="Поиск" />
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<br />
<script>
    $(document).ready(function(){
        $("select[name=auto_brand]").change(function(){
            if ($(this).val() != 0) {
                $.ajax({
                    url: '/index.php/site/bc',
                    data: {
                        type: 'model',
                        brand: $(this).val()
                    },
                    type: 'post',
                    success: function(data) {
                        $(".bc-model-cell").html(data).show();
                        $("select[name=auto_model]").change(function(){
                            if ($(this).val() != 0) {
                                $.ajax({
                                    url: '/index.php/site/bc',
                                    data: {
                                        type: 'year',
                                        model: $(this).val(),
                                        brand: $("select[name=auto_brand]").val()
                                    },
                                    type: 'post',
                                    success: function(data) {
                                        $(".bc-year-cell").html(data).show();
                                        $("select[name=auto_year]").change(function(){
                                            if ($(this).val() != 0) {
                                                $.ajax({
                                                    url: '/index.php/site/bc',
                                                    data: {
                                                        type: 'power',
                                                        year: $(this).val(),
                                                        model: $("select[name=auto_model]").val(),
                                                        brand: $("select[name=auto_brand]").val()
                                                    },
                                                    type: 'post',
                                                    success: function(data) {
                                                        $(".bc-power-cell").html(data).show();
                                                        $("select[name=auto_power]").change(function(){
                                                            if ($(this).val() != 0) $(".bc-submit-cell").show();
                                                        });
                                                    }
                                                });
                                            }
                                        });
                                    }
                                });
                            }
                        });
                    }
                });
            }
        });
    });
</script>