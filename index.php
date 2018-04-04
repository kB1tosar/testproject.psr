<?php
include('includes/connection.php');
include('homepage.html');
?>
<head>
<link rel="stylesheet" type="text/css" href="stylish.css">
</head>
<div class="center">
<h2>Добро пожаловать!</h2>
<p>Эта страница содержит в себе информацию о странах</p>
<p>Кликнув <a href ="form_add.html" title="Добавить страну"><strong>сюда</strong></a>
    вы можете добавить информацию о новой стране</p>
<table>
    <tr>
        <th>Страны</th>
        <th>Столица</th>
        <th>Год основания страны</th>
        <th>Население</th>
        <th>Краткое описание</th>
    </tr>


<?php
    while (($result = mysqli_fetch_assoc($db))) {
        echo '<tr>' .
            '<td>' . $result['name'] . '</td>' .
            '<td>' . $result['capital'] . '</td>' .
            '<td>' . $result['year_of_foundation'] . '</td>' .
            '<td>' . $result['population'] . '</td>' .
            '<td>' . $result['sh_description'] . '</td>' .
            '</tr>';
    }
?>
</table>
</div>