
<?php
    include("../Data/connectDataBase.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $stmt = $conn->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    
        $result = $stmt->execute();
        $row = $result->fetchArray(SQLITE3_ASSOC);
    
        if ($row) {
            if (password_verify($password, $row['passwd'])) {
                $_SESSION['username'] = $row['username'];
                echo "trouvé!";
            } else {
                echo "Utilisateur ou mot de passe incorrect.";
            }
        } else {
            echo "Utilisateur ou mot de passe incorrect.";
        }
    
        $conn->close();
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tayshift</title>

    <link href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Style/index.css">

</head>
<body>
  <div class="container">
      <div class="login-form text-center">
          <img src="../Assets/Img/logo.ico" alt="TAYSHIFT Logo">
          
          <div class="card-body">
              <p class="card-text HappySelfieFont">Transferez vos fichiers, ou que vous soyez.</p>

              <form method="post" action=""> 
                  <div class="mb-3">
                      <label for="username" class="form-label visually-hidden">Nom d'utilisateur</label>
                      <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
                  </div>
                  <div class="mb-3">
                      <label for="password" class="form-label visually-hidden">Mot de passe</label>
                      <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Se connecter</button>
              </form>

              <div class="mt-3">
                  <a href="../Register/register.php">Créer un compte</a> / <a href="../Reset/reset.php">Mot de passe oublié</a>
              </div>
          </div>
      </div>
  </div>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
