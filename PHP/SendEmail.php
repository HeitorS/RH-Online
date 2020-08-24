<?php

namespace SendEmail\SendEmail;

require_once(_DIR.'src/PHPMailer.php');
require_once(_DIR.'src/SMTP.php');
require_once(_DIR.'src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class SendEmail {

    function send ($name, $mailTitle, $mailTo, $mailBody){
        $mail = new PHPMailer(true);
        try {
            // Configurando servidor de e-mail
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = TRUE;
            $mail->Username = 'heitor.victor1996@gmail.com';
            $mail->Password = 'udlaaaknnbuazocy';
            $mail->Port = 587;
        
            // Configurar e-mail
            $mail->setFrom('heitor.victor1996@gmail.com');
            $mail->addAddress('heitor.victor96@outlook.com.br'); 
            
            // Configurando conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = $mailTitle; //'E-mail enviado pelo servidor';
            $mail->Body = "Prazer, eu sou <strong>$name</strong> <br/> <br/>$mailBody<br/> <br/>$mailTo"; //'<h1> Servidor de E-mail</h1> <br/> <p> Para todos os e-mail enviados no servidor será usada essa API, pois funcionou no teste de implementação. </p> <br/> <br/> <br/> <strong> Grato pela sua atenção! </strong> <br/> Heitor Victor';
            $mail->AltBody = "Prazer, eu sou $name $mailBody $mailTo"; //'Servidor de e-mail. Para todos os serviços de e-mail. Grato peela atenção! Heitor Victor!';
        
            if ($mail->send()) {
                echo 'Email enviado com sucesso!';
            } else {
                echo 'Email não enviado';
            }
        
        
        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }
    }

}

