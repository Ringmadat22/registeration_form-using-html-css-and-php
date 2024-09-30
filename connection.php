<?php 
$host = 'localhost';
$dbname = 'registeration';
$username = 'root';
$password = '';

try {
    $conn = new PDO(dsn: "mysql:host=$host;dbname=$dbname",username: $username, password: $password);
    $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>