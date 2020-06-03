<?php

    $host = 'localhost';
    $db   = 'to-do';
    $user = 'pablo';
    $pass = 'root';
    $charset = 'utf8';

    try {
        $conn = new PDO("mysql:host=$host; dbname=to-do",$user,$pass);
    }
    catch (PDDException $e){
        echo "Connect failed" . $e->getMessage();
    }

?>