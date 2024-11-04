<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



$dbPath = 'dataBase.db';
$conn = new SQLite3($dbPath);

if (!$conn) {
    die("La connexion à la base de données a échoué : " . $conn->lastErrorMsg());
}
$conn->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    isAdmin INTEGER DEFAULT 0
)");

$conn->close();

?>
