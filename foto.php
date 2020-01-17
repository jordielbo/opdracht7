<?php




require_once 'sessions.inc.php';

$id = $_GET['id'];




?>




    <!doctype html>

    <html>

    <meta charset="UTF-8">

    </html>




    <body>




    <form action="foto_verwerk.php" method="post" enctype="multipart/form-data">




        <input type="hidden" name="id" value="<?php echo $id; ?>">




        <p>

            <label for="foto">Foto:</label>

            <input type="file" name="foto" id="foto" required="required">

        </p>




        <p>

            <input type="submit" name="submit" id="submit" value="uploaden">

            <button onclick="history.back();return false;">Annuleren</button>

        </p>

    </form>




    </body>




<?php




if (file_exists(__DIR__ . '/uploads/' . $id . '.jpg')) {

    echo "<p><img src='uploads/" . $id . ".jpg' alt='foto'></p>";

}




?>