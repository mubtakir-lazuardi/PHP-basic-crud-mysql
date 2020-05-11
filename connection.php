<?php

$connect = mysqli_connect('localhost', 'root', '1', 'sinau_php_mysql');

if (!$connect) {
    exit('Gagal koneksi database..');
}