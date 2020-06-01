<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <?php
        if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1> 
    <form action="php/check.php" method="POST">
        <input type='text' id="login" name='login' placeholder="Введите логин" class="form-control"><br>
        <input type='text' id="name" name='name' placeholder="Введите имя" class="form-control"><br>
        <input type='password' id="pass" name='pass' placeholder="Введите пароль" class="form-control"><br>
        <button type='submit'  class="btn btn-success">Зарегистрироваться</button>
    </form>
            </div>
            <div class="col">
                <h1>Форма авторизации</h1> 
    <form action="php/auth.php" method="POST">
        <input type='text' id="login" name='login' placeholder="Введите логин" class="form-control"><br>
        <input type='password' id="pass" name='pass' placeholder="Введите пароль" class="form-control"><br>
        <button type='submit' class="btn btn-success">Войти</button>
    </form>
            </div>
        <?php else: ?>
            <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="php/exit.php">Здесь</a></p>
        <?php endif; ?>
        </div>
    </div>    
</body>
</html>