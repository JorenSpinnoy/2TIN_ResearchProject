<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    $serverName = "database-webserver.cl93jdddf6av.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "Urafgt_69";
    $dbName = "employees";

    // Create a new mysqli connection. Remember to enable this in php.ini !!
    $conn = new mysqli($serverName, $username, $password, $dbName);
