<?php
// Setting up the database connection variables
$host = 'localhost';
$user = 'root';
$dbpassword = '';
$db = 'pizzaWebsiteDB';

// Attempting to connect to the database
try {
    // Creating a new PDO instance, connecting to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $dbpassword);

    // Setting the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}

?>