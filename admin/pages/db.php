<?php

$pages_all = function () use ($conn) {
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function ($id) {
    //buscar uma única página
};

$pages_create = function () {
    //cadastrar uma página
    flash('Criou registro com sucesso', 'success');
};

$pages_edit = function ($id) {
    //editar uma página
    flash('Alterou registro com sucesso', 'success');
};

$pages_delete = function ($id) {
    //remover uma página
    flash('Removeu registro com sucesso', 'success');
};