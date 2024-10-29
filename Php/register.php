<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <a href="index.html"><h1>Home</h1></a>

    <img src="Tayshift.png">
    <h2>Transferez vos fichiers, ou que vous soyez.</h2>


    <form method="post" action="success.php">
        <div class="container">
            <label for="login">Pseudo:</label> 
            <input type="text" placeholder="Choisissez un pseudo" class="login" name="user" required> 
    
            <label for="email">Email:</label>
            <input type="text" placeholder="Entrez votre email" class="email" name="mail" required>
    
            <div class="ligne">
                <label for="pass">Choisissez un mot de passe:</label>
                <input type="password" placeholder="Entrez votre mot de passe" class="pass" name="passwd" required> 
                
                <button class="button">Envoyer</button>
            </div>
        </div>
        
    </form>

</body>
</html>