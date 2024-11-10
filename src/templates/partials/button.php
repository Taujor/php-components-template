<?php function button ($content){ ob_start()?>
    <button><?=$content?></button>
<?php return ob_get_clean(); } ?>