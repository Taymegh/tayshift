<?php 

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$user = htmlspecialchars($_POST['user']);
$usermail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
$pass= password_hash($_POST['passwd'], PASSWORD_DEFAULT);

if (!$usermail) {
    die("Adresse email invalide.");
}

$file = 'data.json';
$newData = array(
    'login' => $user,
    'email' => $usermail,
    'password' => $pass
);

$currentData = file_exists($file) ? json_decode(file_get_contents($file), true) ?? [] : [];
$currentData[] = $newData;
file_put_contents($file, json_encode($currentData, JSON_PRETTY_PRINT));

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
$mail->isHTML(true);

$mail->Subject = 'Demande de creation de compte';

$mail->Body = "
<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Nous avons bien reçu votre demande de compte.</h1>
        <h2>Récapitulatif de votre demande:</h2>
    <ul>
        <li>Login: $user</li>
        <li>Email: $usermail</li>
    </ul>
</body>
</html> 
";

$mail->send();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de compte envoyée</title>
</head>
<body>
    <h1>Demande de compte envoyée !</h1>
    <h2>Un mail de confirmation vous a été envoyé à : <?php echo htmlspecialchars($_POST['mail']); ?></h2>
</body>
</html>