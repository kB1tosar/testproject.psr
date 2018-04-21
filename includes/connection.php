<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'country');
// Название, население, год основания, столица, описание
if ( $connection == false ){
    echo "Error";
    echo mysqli_connect_error();
    exit();
}

