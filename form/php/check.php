    <?php

    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 2 || mb_strlen($login) >50) {
        echo "Недопустимая длина";
        exit();
    } else if(mb_strlen($name) < 2 || mb_strlen($name) >50) {
        echo "Недопустимая длина";
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) >50) {
        echo "Недопустимая длина";
        exit();
    }

    $pass = md5($pass."qwe");

    $mysql = new mysqli('localhost', 'pablo', 'root', 'Data');
    $mysql->set_charset('utf8');
    $mysql->query("INSERT INTO `users` ( `login`, `name`, `pass`)
    VALUES('$login', '$name', '$pass')");

    $mysql->close();

    header('Location: /form/index.php');

    ?>