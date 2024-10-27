<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'tayshift25@gmail.com';
$mail->Password = 'gaihrbckdzwwjpsc';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('tayshift25@gmail.com');
$mail->addAddress($_POST['mail']);

$mail->Subject = 'Test';
$mail->Body = 'Tu as recu un mail!';

$mail->send();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Demande de compte envoyée!</h1>
    <h2>Un mail de confirmation vous a été envoyé à: <?php echo $_POST['mail']; ?></h2>
    <h2>Récapitulatif de votre demande:</h2>
    <ul>
        <li>Login:<?php echo $_POST['user']; ?></li>
        <li>Email:<?php echo $_POST['mail']; ?></li>
        <li>Mot de passe:<?php echo $_POST['passwd']; ?></li>
    </ul>
</body>
</html>