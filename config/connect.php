<?php 

    $servername = "localhost";
    $username = "root";
    $serverpassword = "10012019_Maria";
    $database = "db_passwordgenerator";

    $connection = new mysqli ($servername, $username, $serverpassword, $database);

    if ($connection){
        echo "<p style='color:white;'>Connection Granted!</p>";
    } else {
        echo "<p style='color:white;'>Connection Severed!</p>";
    }

