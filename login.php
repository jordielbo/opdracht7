<?php
require_once "config.inc.php";

$username = $_POST['username'];
$password = $_POST['password'];

if (strlen($username) > 0 &&
    strlen($password) > 0)
{
    $password = md5($password);

    $query = "SELECT * FROM back2_users
              WHERE username = '$username'
              AND password = '$password'";

    //voer de query uit
    $result = mysqli_query($mysqli, $query);

    //controleer of de login correct is
    if (mysqli_num_rows($result) == 1)
    {
        //loggin correct? Start de sessie
        session_start();

        //sla de username op in de sessie
        $_SESSION['username'] = $username;

        //stuur door naar de homepage
        header("Location:home.php");
    }
    else
    {
        //login incorrect? Terug naar login formulier.
        header("Location:index.php");
        exit;
    }
}
else
{
    echo "Niet alle velden zijn ingevuld!";
    exit;
}