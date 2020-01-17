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
    <title>Ledenbeheer - Lid bewerken</title>
</head>
<body>
<h1>Lid bewerken</h1>

<form action="lid_bewerk_verwerk.php" method="post">


            <input type="hidden" name="id" value="<?php echo $id; ?>">
    <p>
        <label>
            <input type="radio" name="gender" id="gender_m" value="M" 
            <?php if ($row['gender'] == 'M') echo 'checked="checked"'; ?>>
            Male</label>
        <br/>
        <label>
            <input type="radio" name="gender" id="gender_f" value="F"
            <?php if ($row['gender'] == 'F') echo 'checked="checked"'; ?>>
            Female</label>
    </p>

    <p>
        <label for="first_name">First name:</label>
        <input type="text" name="first_name" id="first_name" required="required"
        value="<?php echo $row['first_name']; ?>">
    </p>

    <p>
        <label for="last_name">Last name:</label>
        <input type="text" name="last_name" id="last_name" required="required"
        value="<?php echo $row['last_name']; ?>">
    </p>

    <p>
        <label for="birth_date">Birth date:</label>
        <input type="date" name="birth_date" id="birth_date" required="required"
        value="<?php echo $row['birth_date']; ?>">
    </p>

    <p>
        <label for="member_since">Member since:</label>
        <input type="date" name="member_since" id="member_since" required="required"
        value="<?php echo $row['member_since']; ?>">
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="opslaan">
        <button onclick="history.back();return false;">Cancel</button>
    </p>
</form>
</body>