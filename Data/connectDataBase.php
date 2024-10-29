<?php

$dbPath = 'dataBase.db';
$conn = new SQLite3($dbPath);

if (!$conn) {
    die("La connexion à la base de données a échoué : " . $conn->lastErrorMsg());
} else {
    echo "Connexion réussie à la base de données SQLite<br>";
}

$conn->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE
)");
$conn->close();

?>
