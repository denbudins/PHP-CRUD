<?php
    //connnection string for connecting to database
    $host = "localhost";
    $dbname = "phpbeginnercrudlevel1";
    $username = "root";
    $password = "";

    //connecting to database
    try {
        $con = new PDO("mysql: host={$host}; dbname={$dbname}", $username, $password);
    } catch (PDOExeception $exeception) {
        echo "Connection error: " . $exeception->getMessage();
    }
?>