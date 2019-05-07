<?php


require __DIR__ . '/src/resolve-route.php';

function render($content, $template, array $data = []){

    $content = __DIR__ . '/template/' . $content . '.tpl.php';
    return require __DIR__ .'/template/' . $template . '.tpl.php';
}

if (resolve('/admin/?(.*)')) {
    require __DIR__ . '/admin/routes.php';
}elseif (resolve('/(.*)')) {
    require __DIR__ . '/site/routes.php';
}