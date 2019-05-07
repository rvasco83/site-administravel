<?php

function render($content, $template, array $data = []){

    $content = __DIR__ . '/../template/' . $content . '.tpl.php';
    return require __DIR__ .'/../template/' . $template . '.tpl.php';
}