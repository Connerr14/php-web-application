<?php
    // Linking to session configuration file and login view file
    require_once "../includes/config_session.inc.php";
    require_once "../includes/login_view.inc.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body id="loginPage">
    <header>
        <a id="home" href="index.php">Home</a>
    </header>

    <?php
        if (!isset($_SESSION['user_id'])) { ?>
            <h1>Login</h1>
            <p>Please enter your username and password to login</p>
            <div class="formWrapper">
                <form action="../includes/login.inc.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
            <a href="register.php" id="create">Or Create Account</a>
    <?php } ?>
    <?php
        check_login_errors();
    ?>

    <?php
        if (isset($_SESSION['user_id'])) { ?>
            <h3>Logout</h3>
            <form action="../includes/logout.inc.php" method="post">
                <button id="logoutButton" type="submit">Logout</button>
            </form>
        <?php } ?>
</body>
</html>