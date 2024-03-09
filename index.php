<?php 

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.ethereal.email';
$mail->SMTPAuth = true;
$mail->Username = 'darien.rodriguez93@ethereal.email';
$mail->Password = 'BzAcvA9uaysFhxBE7u';
$mail->SMTPSecure = false;
$mail->setFrom("teste@ethereal.com", "teste PHP Mailer");
$mail->Port = 587;
$mail->isHTML(true);
$mail->CharSet = "UTF-8";

$mail->addAddress('1203fc2501@emailabox.pro');
$mail->Subject = "Email de teste";
$mail->Body = "<h1>Email enviado com sucesso!</h1><p>Parabens deu tudo certo.</p>";

if($mail->send()){
    echo "email enviado com sucesso";
} else {
    echo "falha ao enviar email";
}

?>
