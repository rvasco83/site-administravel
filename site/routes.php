<?php

if (resolve('/')) {
    render('site/home', '/site');
} elseif (resolve('/contatos')) {
    render('site/contatos', 'site');
} else {
    echo 'Página não encontrada';
}