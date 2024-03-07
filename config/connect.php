<?php

$connect = mysqli_connect('localhost', 'root', 'password',
    'yeticave');

if(!$connect) {
    die('Ошибка соединения с датабазой');
}

