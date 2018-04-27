<?php
/*Реализована функция вывода текста хранимого в базе данных*/
function text_from_db(){
    include('includes/connection.php');
    $db = mysqli_query($connection, "SELECT * FROM `states`");
    while (($result = mysqli_fetch_assoc($db))) {
        $result1[]["countres"] = array(
// Название страны, население, год основания, столица, описание
            $result['name'],
            $result['capital'],
            $result['year_of_foundation'],
            $result['population'],
            $result['short_description']);
    }
    return($result1);
}?>