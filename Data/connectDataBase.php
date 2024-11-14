<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



$dbPath = __DIR__ . DIRECTORY_SEPARATOR . 'dataBase.db';
$conn = new SQLite3($dbPath);

if (!$conn) {
    die("La connexion à la base de données a échoué : " . $conn->lastErrorMsg());
}

$conn->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL,
    passwd TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    isAdmin INTEGER DEFAULT 1
)");

$conn->exec("CREATE TABLE IF NOT EXISTS registrationsRequests (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    passwd TEXT NOT NULL,
    request_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status TEXT DEFAULT 'en attente' -- Statut de la demande ('en attente', 'approuvée', 'rejetée')
)");



$devPassword = password_hash("User1234", PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT OR IGNORE INTO users (id, username, passwd, email, isAdmin)
                        VALUES (:id, :username, :passwd, :email, :isAdmin)");

$stmt->bindValue(':id', 1, SQLITE3_INTEGER);
$stmt->bindValue(':username', 'admin', SQLITE3_TEXT);
$stmt->bindValue(':passwd', $devPassword, SQLITE3_TEXT);
$stmt->bindValue(':email', 'admin@gmail.com', SQLITE3_TEXT);
$stmt->bindValue(':isAdmin', 0, SQLITE3_INTEGER);

$stmt->execute();


?>
