<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

    require_once '../includes/config_session.inc.php';
    require_once '../includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Register an account with us to get started">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Register Account</title>
</head>
<body id="registerPage">
    <header>
        <a href="index.php">Home</a>
    </header>
    <h1>Register Account</h1>
    <p>Already have an account? <a href="login.php">Login</a></p>
    <div class="formWrapper">
        <p>Please enter your details to create an account</p>
        <form action="../includes/signup.inc.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <button type="submit">Register</button>
        </form>
    </div>
    <?php
        // Check for any signup errors, display them in the html if there is 
        check_signup_errors();
    ?>
</body>
</html>