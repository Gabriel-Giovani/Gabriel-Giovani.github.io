<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
    $assunto = $_POST['assunto'];
}

if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
    $mensagem = $_POST['mensagem'];
}

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'grupomoraessorocaba@gmail.com';
$mail->Password = 'gp@Moraes2019*';
$mail->Port = 587;
$mail->setFrom('gabriel.leite4@fatec.sp.gov.br');
$mail->addReplyTo('gabriel.leite4@fatec.sp.gov.br');
$mail->addAddress('gabriel.leite4@fatec.sp.gov.br');

$mail->isHTML(true);
$mail->Subject = 'Assunto Teste';
$mail->Body = '<p>TESTE TESTE TESTE TESTE<p>';

if(!$mail->send()){
    echo "Não foi possível enviar a mensagem. <br>";
    echo "Erro: " . $mail->ErrorInfo;
} else{
    echo "Mensagem enviada!";
}