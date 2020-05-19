<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$arquive = "
    <style type='text/css'>
        body {
            margin:0px;
            font-family:Verdane;
            font-size:12px;
            color: #666666;
        }
        
        a{
            color: #666666;
            text-decoration: none;
        }

        a:hover {
            color: #FF0000;
            text-decoration: none;
        }
    </style>
    
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
                <td>
                    <tr>
                        <td width='500'>Nome:$name</td>
                    </tr>
                    <tr>
                        <td width='320'>E-mail:<b>$email</b></td>
                    </tr>
                    <tr>
                        <td width='320'>Assunto:<b>$subject</b></td>
                    </tr>
                    <tr>
                        <td width='320'>Mensagem:$message</td>
                    </tr>
                </td>
            </tr>  
            
        </table>
    </html>
";

$emailEnviar = "gabriel.leite4@fatec.sp.gov.br";
$destino = $emailEnviar;
$assunto = "Contato pelo site";

$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $name <$email>';

$enviar = mail($destino, $assunto, $arquive, $headers);

if($enviar){
    $mgm = "E-mail enviado com sucesso!";
} else{
    $mgm = "Erro!";
}

echo $mgm;