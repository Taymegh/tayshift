<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tayshift</title>
    <link href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="Style/accueil.css">
    <script src="Script/script.js"></script>
</head>
<body>
    <div class="container">
        <div class="card mx-auto border-0" style="width: 8rem;">
            <img src="../Assets/Img/logo.ico" alt="TAYSHIFT Logo" class="card-ig-top">
            <div class="card-body">
                <p class="card-text HappySelfieFont">Transferez vos fichiers, ou que vous soyez.</p>
            </div>
        </div>


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
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Espace Personnel</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Espace Collaboratif</a>
                        </li>

                        <li class="nav-item mt-auto">
                            <a class="nav-link" href="../Home/index.php">Deconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="col-6 text-center mt-3 border border-primary mx-auto" id="filezone">
            <input type="file" name="file" id="file">
            <i class="bi bi-file-earmark-arrow-down fs-1"></i> 
        </div>



    </div>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>