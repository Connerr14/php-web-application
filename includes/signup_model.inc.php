<?php

declare(strict_types=1);
// A function to get usernames from the database
function get_username(object $pdo, string $username) {
    // Creating a prepared statement and executing it
    $query = "SELECT username FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Fetching the first result as an assoicate array
    $results = $stmt->fetch(PDO::FETCH_ASSOC);

    return $results;
}

// A function to get emails from the database
function get_email(object $pdo, string $email) {
    // Creating a prepared statement and executing it
    $query = "SELECT username FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Fetching the first result as an assoicate array
    $results = $stmt->fetch(PDO::FETCH_ASSOC);

    return $results;
}

// A function to set users in the database
function set_user(object $pdo, string $password, string $username, string $email) {
       // Creating a prepared statement and executing it
       $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :password, :email);";
       $stmt = $pdo->prepare($query);

    //    Assigning 12 to our cost
        $options = [
            'cost' => 12
        ];

        // Hashing the password
        $hashedPwd = password_hash($password, PASSWORD_BCRYPT, $options);

       $stmt->bindParam(':email', $email);
       $stmt->bindParam(':username', $username);
       $stmt->bindParam(':password', $hashedPwd);
       $stmt->execute();
}
?>