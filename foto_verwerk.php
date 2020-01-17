<?php




require_once 'sessions.inc.php';




if(isset($_FILES['foto']) && $_FILES['foto']['error']== 0) {




    if ($_FILES['foto']['type'] == "image/jpg" ||

        $_FILES['foto']['type'] == "image/jpeg" ||

        $_FILES['foto']['type'] == "image/pjpeg") {



        $map = __DIR__ . "/uploads/";




        $bestand = $_POST['id'] . '.jpg';




        move_uploaded_file($_FILES['foto']['tmp_name'], $map . $bestand);




        header("Location:foto.php?id=" . $_POST['id']);

    } else {

        echo "Het bestand is van het verkeerde type.";

    }

} else {

    echo "Er ging iets fout bij het uploaden.";

}



?>