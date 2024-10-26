<?php

include('connect.php');

if ($_POST['username']== 'Samuel'):
    header("Location:connect.php");
    exit; //comme on est redirigé vers une autre page, plus rien a executer
    // echo  $_POST['username'], " est connecté!" ."<br>"; 
else:
    echo "Vous n'avez pas de compte" /*ou <?= "texte" ?> // a verifier*/;
endif;
?>