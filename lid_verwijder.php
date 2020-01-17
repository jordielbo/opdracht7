<?php
require_once 'sessions.inc.php';
require_once "config.inc.php";

$id = $_GET['id'];

if (is_numeric($id))
{
    $result = mysqli_query($mysqli, "SELECT * FROM back2_leden
                                             WHERE id = $id");
    if (mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_array($result);
    }
    else
    {
        echo "Geen lid gevonden.";
        exit;
    }
}
else
{
    echo "ID is fout";
    exit;
}
?>
<!doctype>
<html>
<head>
    <title>Ledenbeheer - Lid verwijderen</title>
</head>
<body>
    <h1>Lid verwijderen</h1>
    
    <p>
        Weet je zeker dat je het lid
        <strong><?php echo $row['first_name'] . " " . $row['last_name']; ?></strong>
        wilt verwijderen?
    </p>
    
    <p>
        <a href="lid_verwijder_verwerk.php?id=<?php echo $id; ?>">Ja, verwijder</a>
        /
        <a href="home.php">Nee, ga terug</a>
    </p>
</body>
</html>