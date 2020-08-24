<?php
    define('_DIR','C:/Users/User/Documents/Trabalho/RH-Online/PHP/',true);
    require_once(_DIR.'SendEmail.php');

    use SendEmail\SendEmail\SendEmail;
    
    $nome = $_POST["nome"];
    $titulo = $_POST["titulo"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    try {
        $mail = new SendEmail();
        $mail->send($nome,$titulo,$email,$mensagem);
    } catch (Exception $e) {
        echo 'Erro ao enviar mensagem: '.$e->getMessage();
    }

