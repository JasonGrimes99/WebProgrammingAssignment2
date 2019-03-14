<?php
/**
 * Created by PhpStorm.
 * User: Pascal-PC
 * Date: 01/03/2019
 * Time: 19:31
 */


$dbServername = "127.0.0.1";
$dbUsername = "s5074177";
$dbPassword = "R79vfoMNJuHad9sMHiscpJHUpzFXcMkT";
$dbName = "s5074177";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    echo "something failed";
    die('DB connection failed: ' . $conn->connect_error);
}
