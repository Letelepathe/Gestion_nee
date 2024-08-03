<?php
$host = "localhost"; // Replace with your database hostname
$dbname = "gestion_nais"; // Replace with your database name
$username = "root"; // Replace with your database username
$password = ""; 
    // Connect to the database using PDO with prepared statements
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

