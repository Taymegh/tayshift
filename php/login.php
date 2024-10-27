<?php
session_start();

require('connect.php');



$login = $_POST['login'];
$password = $_POST['pass'];


$_SESSION['login']= $login;

$result= pg_query($dbconn, "select * from tayshift");
while ($row = pg_fetch_object($result)){
    if ($row->login == $login){
        header("location: logged.php");
    }
    else{
        echo "Vous n'avez pas de compte";
    }
}
    

// echo($login . ' ' . $password);


?>