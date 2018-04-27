<?php
include('homepage.html');
include('text_from_db.php');
$arResult = text_from_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap-4.1.0-dist/css/bootstrap.css">
</head>
<body>
    <div class="center indents">
        <h2>Добро пожаловать!</h2>
        <p>Эта страница содержит в себе информацию о странах</p>
<!--Создана таблица для отображения текста-->
        <table class="table table-striped table-bordered">
<!--Заголовочная часть таблицы -->
            <thead class="color-th text-light">
                <tr>
                    <th>Страны</th>
                    <th>Столица</th>
                    <th>Год основания страны</th>
                    <th>Население</th>
                    <th>Краткое описание</th>
                </tr>
            </thead>
<!--Часть таблицы с ячееками данных
 *вывод с помощью цикла PHP-->
            <tbody>
                <? foreach ($arResult as $value): ?>
                    <tr>
                        <td>
                            <?= $value["countres"][0] ?>
                        </td>
                        <td>
                            <?= $value["countres"][1] ?>
                        </td>
                        <td>
                            <?= $value["countres"][2] ?>
                        </td>
                        <td>
                            <?= $value["countres"][3] ?>
                        </td>
                        <td>
                            <?= $value["countres"][4] ?>
                        </td>
                    </tr>
                <? endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>