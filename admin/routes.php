<?php

if (resolve('/admin')) {
    echo 'Administração';
} elseif (resolve('/admin/pages')) {
    echo 'Adinistração de Páginas';
} else {
    echo 'Página não encontrada';
}