<?php
include('includes/connection.php');
include('homepage.html');
?>
<head>
    <link rel="stylesheet" type="text/css" href="stylish.css">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap-4.1.0-dist/css/bootstrap.css">
</head>
<body>
    <div class="center">
        <h2>Добро пожаловать!</h2>
        <p>Эта страница содержит в себе информацию о странах</p>
        <table class="table table-striped">
            <tr>
                <th>Страны</th>
                <th>Столица</th>
                <th>Год основания страны</th>
                <th>Население</th>
                <th>Краткое описание</th>
            </tr>


        <?php
            $db = mysqli_query($connection, "SELECT * FROM `states`");
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
</body>