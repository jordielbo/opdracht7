<?php
require_once 'sessions.inc.php';
?>
<!doctype>
<html>
<head>
    <title>Nieuw lid inschrijven</title>
</head>

<body>
<h1>Nieuw lid inschrijven</h1>

<form action="lid_nieuw_verwerk.php" method="post">
    <p>
        <label>
            <input type="radio" name="gender" id="gender_m" value="M" checked="checked">
            Male</label>
        <br/>
        <label>
            <input type="radio" name="gender" id="gender_f" value="F">
            Female</label>
    </p>

    <p>
        <label for="first_name">First name:</label>
        <input type="text" name="first_name" id="first_name" required="required">
    </p>

    <p>
        <label for="last_name">Last name:</label>
        <input type="text" name="last_name" id="last_name" required="required">
    </p>

    <p>
        <label for="birth_date">Birth date:</label>
        <input type="date" name="birth_date" id="birth_date" required="required">
    </p>

    <p>
        <label for="member_since">Member since:</label>
        <input type="date" name="member_since" id="member_since" required="required">
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="opslaan">
        <button onclick="history.back();return false;">Cancel</button>
    </p>
</form>
</body>
