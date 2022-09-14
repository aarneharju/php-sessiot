<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <form action="1.php" method="post">
        <fieldset>
            <legend>Set session variables:</legend>
            <label for="key">Key:</label>
            <input type="text" name="key" id="key">
            <label for="value">Value:</label>
            <input type="text" name="value" id="value">
            <input type="submit" name="addSessionVariable" value="Add session variable">
        </fieldset>
    </form>

    <?php
    // echo "<pre>";
    // echo var_export($_POST);
    // echo "</pre>";

    if (!empty($_GET['clearSessionVariablesAndCloseSession'])) {
        session_unset();
        session_destroy();
    }

    if (!empty($_POST['addSessionVariable'])) {
        if (!empty($_POST['key']) && !empty($_POST['value'])) {
            $_SESSION[$_POST['key']] =  $_POST['value'];
        }
    }

    if (!empty($_SESSION)) {
        echo "<ul>";
        foreach ($_SESSION as $sessionVariableKey => $sessionVariableValue) {
            echo "<li>{$sessionVariableKey}: {$sessionVariableValue}</li>";
        }
        echo "</ul>";

        echo '<a href="1.php?clearSessionVariablesAndCloseSession=true">Clear session variables and close session</a>';
    }


    ?>

</body>

</html>