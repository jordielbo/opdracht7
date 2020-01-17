<?php
require_once "sessions.inc.php";
require_once "config.inc.php";

$result = mysqli_query($mysqli,"SELECT * FROM back2_leden ORDER BY last_name");

//list of members
echo "<h1>Ledenlijst.</h1>";
echo "<p><a href='lid_nieuw.php'>Klik hier</a> om een nieuw lid toe te voegen</p>";
echo "<table>";
echo "<tr>";

echo "<th>ID</th>";
echo "<th>Geslacht</th>";
echo "<th>Voornaam</th>";
echo "<th>Achternaam</th>";
echo "<th>Geboortedatum</th>";
echo "<th>Lid sinds</th>";
echo "<th></th>";
echo "<th></th>";
echo "<th></th>";

echo "</tr>";



while($row = mysqli_fetch_array($result))
{
    echo "<tr>";

    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['birth_date'] . "</td>";
    echo "<td>" . $row['member_since'] . "</td>";
    echo "<td><a href='lid_bewerk.php?id=" . $row['id'] . "'>Edit</a></td>";
    echo "<td><a href='lid_verwijder.php?id=" . $row['id'] . "'>Delete</a></td>";
    echo "<td><a href='foto.php?id=" . $row['id'] . "'>Foto</a></td>";

    echo "</tr>";
}
echo "</table>";
?>

<p>
    Je bent ingelogd als <?php echo $_SESSION['username']; ?><br>
    <a href="logout.php">Klik hier</a> om uit te loggen.
</p>
