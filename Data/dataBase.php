<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tayshiftdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
 die("La connexion à la base de données a échoué : " . $conn->connect_error);
} 
else {
    echo("Connexion réussie");
}
?>
