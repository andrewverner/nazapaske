<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 12.06.15
 * Time: 13:19
 */
?>
<script src="/ckeditor/ckeditor.js"></script>
<script>
    $(document).ready( function(){
        $('<?php echo $selector; ?>').ckeditor();
    });
</script>