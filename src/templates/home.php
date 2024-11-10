<?php 
    require_once __DIR__ . '/partials/button.php'; 
    require_once __DIR__ . '/layouts/default.php'; 
?>

<?php function home (){ ob_start()?>

    <h1>Hello</h1>
    <?= button('Click me!'); ?>
    <?= button('Click me maybe?'); ?>

<?php return _default(ob_get_clean()); } ?>