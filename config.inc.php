<?php
//login
$db_hostname    = 'localhost'; //127.0.0.1
$db_username    = '83400_back2';
$db_password    = '#1Geheim';
$db_database    = '83400_back2';

//maak de verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if(!$mysqli){
    echo "FOUT: geen connectie naar database. <br>";
    echo "Error: " . mysqli_connect_error() . "<br/>";
    echo "Errno " . mysqli_connect_errno() . "<br/>";
}

error_reporting(E_ALL);
ini_set('display_errors', '1');