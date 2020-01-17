<?php
require_once 'sessions.inc.php';
require_once 'config.inc.php';
//var
$gender         = $_POST['gender'];
$first_name     = $_POST['first_name'];
$last_name      = $_POST['last_name'];
$birth_date     = $_POST['birth_date'];
$member_since   = $_POST['member_since'];

//check if everything came trough
if (strlen($gender)         > 0 &&
    strlen($first_name)     > 0 &&
    strlen($last_name)      > 0 &&
    strlen($birth_date)     > 0 &&
    strlen($member_since)   > 0 ) {


    //check if the dates exist
    $check1 = strtotime($birth_date);
    $check2 = strtotime($member_since);
    if (date('Y-m-d', $check1) == $birth_date &&
        date('Y-m-d', $check2) == $member_since) {

        //everything is correct. Create the query
        $query = "INSERT INTO back2_leden 
                              (gender, 
                              first_name, 
                              last_name, 
                              birth_date, 
                              member_since)
                              VALUES(
                              '$gender',
                              '$first_name',
                              '$last_name',
                              '$birth_date',
                              '$member_since')";
        //run the query
        $result = mysqli_query($mysqli, $query);

        //check if data was added
        if ($result) {
            header('Location:home.php');
            exit;
        } else {
            echo 'Er ging iets mis met het toevoegen!';
        }
    } else {
        echo 'Een van de ingevulde data was ongeldig!';
    }
}else
    {
    echo 'Niet alle velden waren ingevuld';
}