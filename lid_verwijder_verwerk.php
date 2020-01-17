<?php
    require_once 'sessions.inc.php';
    require_once "config.inc.php";

    $id = $_GET['id'];

    if (is_numeric($id))
    {
        $result = mysqli_query($mysqli, "DELETE FROM back2_leden
                                         WHERE id = $id");
        if ($result)
        {
            header("Location:home.php");
            exit;
        }
        else
        {
            echo "Er ging wat mis met het verwijderen!";
        }                                 
    }
    else
    {
        echo "Id is fout.";
        exit;
    }
?>