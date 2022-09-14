<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="3styles.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="3.php?page=home">Home</a></li>
            <li><a href="3.php?page=info">Info</a></li>
            <li><a href="3.php?page=login">Login</a></li>
            <li><a href="3.php?page=contact">Contact</a></li>
        </ul>
    </nav>

    <?php

    if (empty($_GET['page'])) {
        $_GET['page'] = 'home';
    }

    if ($_GET['page'] === 'home') {
        echo "<h1>Home sweet home.</h1>";
    }

    if ($_GET['page'] === 'info') {
        echo "<h1>Here's all the information you could ever want.</h1>";
    }

    ?>

    <?php if ($_GET['page'] === 'login') : ?>

        <form action="3.php" method="post">
            <fieldset>
                <legend>Login:</legend>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Login" name="login">
            </fieldset>
        </form>


    <?php endif; ?>

    <?php
    if ($_GET['page'] === 'contact') {
        echo "<h1>Don't contact us, we'll contact you.</h1>";
    }

    ?>

</body>

</html>