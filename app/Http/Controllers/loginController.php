<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Verbinding maken
require_once '../../../config/conn.php';

//2. Query
$query = "SELECT * FROM user WHERE username = :username";

//3. Van query naar statement
$statement = $conn->prepare($query);

//4. Voer de query uit, voeg hier nog de placeholder toe
$statement->execute([
    ":username" => $username,
]);

$user = $statement->fetch(PDO::FETCH_ASSOC);
print_r($user);