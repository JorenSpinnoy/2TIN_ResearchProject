<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    $serverName = "10.0.1.50";
    $username = "admin";
    $password = "Urafgt_69";
    $dbName = "employees";

    // Create a new mysqli connection. Remember to enable this in php.ini !!
    $conn = new mysqli($serverName, $username, $password, $dbName);
