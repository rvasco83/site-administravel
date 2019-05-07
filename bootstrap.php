<?php


require __DIR__ . '/src/resolve-route.php';

if (resolve('/admin/?(.*)')) {
    require __DIR__ . '/admin/routes.php';
}elseif (resolve('/(.*)')) {
    require __DIR__ . '/site/routes.php';
}