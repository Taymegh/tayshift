<?php
    include("../Data/connectDataBase.php");

    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_SESSION['username'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    
        $result = $stmt->execute();
        $row = $result->fetchArray(SQLITE3_ASSOC);
    
        if ($row) {
            echo "Email déjà utilisée";
        }
        else {
            $stmt = $conn->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        
            $result = $stmt->execute();
            $row = $result->fetchArray(SQLITE3_ASSOC);
        
            if($row){
                echo "Nom d'utilisateur déjà utilisé, veuillez en choisir un autre";
            }

            else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
                $stmt = $conn->prepare('INSERT INTO registrationsRequests (username, email, passwd, status) VALUES (:username, :email, :passwd, :status)');
                $stmt->bindValue(':username', $username, SQLITE3_TEXT);
                $stmt->bindValue(':email', $email, SQLITE3_TEXT);
                $stmt->bindValue(':passwd', $hashedPassword, SQLITE3_TEXT);
                $stmt->bindValue(':status', 'en attente', SQLITE3_TEXT);
            
                if ($stmt->execute()) {
                    echo "Demande d'inscription soumise avec succès. En attente de validation.";
                } else {
                    echo "Erreur lors de l'insertion de la demande d'inscription.";
                }
            }
            
        }

    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tayshift</title>

    <link href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Style/register.css">

</head>
<body>
  <div class="container">
      <div class="login-form text-center">
          <img src="../Assets/Img/logo.ico" alt="TAYSHIFT Logo">
          
          <div class="card-body">
              <p class="card-text HappySelfieFont">Transferez vos fichiers, ou que vous soyez.</p>

              <form method="post" action="">
                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label visually-hidden">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur" name="username">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label visually-hidden">Adresse mail</label>
                        <input type="text" class="form-control" id="email" placeholder="Adresse mail" name="email">
                    </div>
                </div>


                  <div class="mb-3">
                      <label for="password" class="form-label visually-hidden">Mot de passe</label>
                      <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
                  </div>

                  <button type="submit" class="btn btn-primary w-100">Créer compte</button>
              </form>

              <div class="mt-3">
                  <a href="../../Home/index.php">Accueil</a>
              </div>
          </div>
      </div>
  </div>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
