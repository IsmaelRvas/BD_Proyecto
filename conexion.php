<?php
    $servername = "Tu direccion de RDS";
    $username = "admin";
    $password = "Root1234$";
    $bd="PROYECTO";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
 ?>