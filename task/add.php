<?php

    $task = $_POST['task'];
    if($task == '') {
        echo 'Введите задание';
        exit();
    }

    require 'dataConfig.php';

    $sql = 'INSERT INTO tasks(task) VALUES(:task)';
    $query = $conn->prepare($sql);
    $query->execute(['task' => $task]);
    
    
    header('location: /deals/index.php');

?>