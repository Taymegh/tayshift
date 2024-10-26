<?php


$dbconn = pg_connect("host=postgres dbname=trayshift user=postgres password=root");

if (!$dbconn):
    echo "Erreur de connexion à la BD";

else:
    echo "Connexion à la BD réussie";

endif;

?>