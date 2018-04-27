<?php
/*Подключение к базе данных, также реализована проверка подключения к БД*/
$connection = mysqli_connect('127.0.0.1', 'root', '', 'country');
if ( $connection == false ){
    echo "Error";
    echo mysqli_connect_error();
    exit();
}

