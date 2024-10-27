<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$dbconn = pg_connect("host=localhost dbname=postgres user=postgres password=root");
$val = "Bonjour";

if ($dbconn){
    echo "Connecté a la DB";
}


$result= pg_query($dbconn, "select * from tayshift");
while ($row = pg_fetch_object($result)){
    echo $row->login;
}
    



?>


