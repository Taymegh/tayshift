<?php 

include("../Data/connectDataBase.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['request_id'];
    $status = $_POST['status'];

    if ($status === 'approuvée'){
        $req = $conn->prepare("SELECT * FROM registrationsRequests WHERE id = $id");
        $res = $req->execute();
        while ($row = $res->fetchArray(SQLITE3_ASSOC)){
            // print_r($row);
            $ins= $conn->prepare("INSERT OR IGNORE INTO users (id, username, passwd, email, isAdmin)
                        VALUES (:id, :username, :passwd, :email, :isAdmin)");

            $ins->bindValue(':id', $row['id'], SQLITE3_INTEGER);
            $ins->bindValue(':username', $row['username'], SQLITE3_TEXT);
            $ins->bindValue(':passwd', $row['passwd'], SQLITE3_TEXT);
            $ins->bindValue(':email', $row['email'], SQLITE3_TEXT);
            $ins->bindValue(':isAdmin', 1, SQLITE3_INTEGER);
            $ins->execute();
            echo "Compte créé";
        }
    }






}






?>