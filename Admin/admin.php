<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tayshift</title>
    <link href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="Style/admin.css">
</head>
<body>
    
<nav class="navbar navbar-light bg-light position-absolute top-0 start-0">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="1" id="offcanvasNavbar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav d-flex flex-column" style="height: 100%;">

            <li class="nav-item h3">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher">
            </li>



            <li class="nav-item">
                <a class="nav-link h3" href="#">
                    <i class="bi bi-command"></i> Tableau de bord
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link h3" href="#">
                    <i class="bi bi-people-fill"></i> Gestion des comptes
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link h3" href="#">
                    <i class="bi bi-person-fill"></i> Profil
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link h3" href="#">
                    <i class="bi bi-gear-fill"></i> Paramètres
                </a>
            </li>


            <li class="nav-item mt-auto">
                <a class="nav-link h3" href="../Home/index.php">
                    <i class="bi bi-box-arrow-in-right"></i> Deconnexion
                </a>
            </li>
        </ul>
    </div>
    </div>
</nav>

<div class="container actifs">
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <i class="bi bi-person-vcard-fill h2"></i> <h2>Compte actifs</h2>
        </div>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nom d'utilisateur</th>
      <th scope="col">Adresse email</th>
      <th scope="col">Statut</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>

  </tbody>
</table>
<?php 
            include("../Data/connectDataBase.php");

?>
</div>


<script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>