<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список дел</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Список дел</h1>
    <form action="add.php" method="post">
    <input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control">
    <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
    </form>
    <div class='deals'>
        <?php
            require 'dataConfig.php';
            $query = $conn->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo '<li><b>'.$row->task.'</b><button><a href="delete.php?id='.$row->id.'">Удалить</a></button></li>';
            }
        ?>
    </div>
    </div>
</body>
</html>