<?php

if (resolve('/')) {
    render('site/home', '/site');
} elseif (resolve('/contatos')) {
    render('site/contatos', 'site');
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}