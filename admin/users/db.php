<?php

$users_all = function () use ($conn) {
    $result = $conn->query('SELECT * FROM users');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$users_view = function () use ($conn) {

};

$users_create = function () use ($conn) {

};

$users_edit = function () use ($conn) {

};

$users_delete = function () use ($conn) {

};