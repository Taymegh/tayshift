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

              <form>
                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label visually-hidden">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label visually-hidden">Adresse mail</label>
                        <input type="text" class="form-control" id="email" placeholder="Adresse mail">
                    </div>
                </div>


                  <div class="mb-3">
                      <label for="password" class="form-label visually-hidden">Mot de passe</label>
                      <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                  </div>

                  <button type="submit" class="btn btn-primary w-100">Créer compte</button>
              </form>

              <div class="mt-3">
                  <a href="#">Accueil</a>
              </div>
          </div>
      </div>
  </div>
<script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
