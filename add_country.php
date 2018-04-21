<?php
include('includes/connection.php');
include('homepage.html');
$db = mysqli_query($connection, "SELECT * FROM `states`");
if (isset($_POST['add_data'])) {
    $add_name_Country = mysqli_real_escape_string($connection, htmlentities($_POST ['name_country']));
    $add_capital = mysqli_real_escape_string($connection, htmlentities($_POST ['capital']));
    $add_year = mysqli_real_escape_string($connection, htmlentities($_POST ['year_of_foundation']));
    $add_popul = mysqli_real_escape_string($connection, htmlentities($_POST ['population']));
    $add_short_ds = mysqli_real_escape_string($connection, htmlentities($_POST ['short_description']));
} else {
    echo "No connection";
}


$add_into_bd = mysqli_query($connection, "INSERT INTO `states` (`name`, `capital`, `year_of_foundation`, 
                                                    `population`, `short_description`) 
              VALUES ('{$add_name_Country}','{$add_capital}','{$add_year}','{$add_popul}','{$add_short_ds}' )");
if ($add_into_bd) {
    include('includes/success_add.html');
} else {
    include('includes/error_add.html');
}


