<?php

// Retrieve the text from the POST request
$text = $_POST['text'];

// Database configuration
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'speech_to_text_db';

// Create a new PDO instance
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Prepare the SQL statement
$stmt = $pdo->prepare("INSERT INTO texts (text) VALUES (:text)");

// Bind the parameters
$stmt->bindParam(':text', $text);

// Execute the statement
if ($stmt->execute()) {
    echo 'Text saved to the database successfully!';
} else {
    echo 'Failed to save text to the database.';
}

