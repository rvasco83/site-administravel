<?php

if (resolve('/')) {
    echo 'Home';
} elseif (resolve('/contato')) {
    echo 'Contatos';
} else {
    echo 'Página não encontrada';
}