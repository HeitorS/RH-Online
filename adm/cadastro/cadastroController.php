<?php
session_start();

if (isset($_POST['salvar'])) {
    $empresa = $_POST["empresa"];
    $coordenador = $_POST["coordenador"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    
    if (!$empresa) {
        $_SESSION['msg'] = "Nome da empresa é obrigatório";
    } else if (!$coordenador) {
        $_SESSION['msg'] = "O Coordenador é obrigatório";
    } else if (!$email) {
        $_SESSION['msg'] = "O E-mail é obrigatório";
    } else if (!$telefone && !$celular) {
        $_SESSION['msg'] = "Informe um Telefone ou Celular";
    } else if (!$cep) {
        $_SESSION['msg'] = "CEP da empresa é obrigatório";
    } else if (!$endereco) {
        $_SESSION['msg'] = "Endereço da empresa é obrigatório";
    } else if (!$numero) {
        $_SESSION['msg'] = "Número da empresa é obrigatório";
    }
    
    $_SESSION['empresa'] = $empresa;
    $_SESSION['coordenador'] = $coordenador;
    $_SESSION['email'] = $email;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['celular'] = $celular;
    $_SESSION['cep'] = $cep;
    $_SESSION['endereco'] = $endereco;
    $_SESSION['numero'] = $numero;
} else {
    $_SESSION['empresa'] = $_REQUEST['salvar'];
    $_SESSION['coordenador'] = "";
    $_SESSION['email'] = "";
    $_SESSION['telefone'] = "";
    $_SESSION['celular'] = "";
    $_SESSION['cep'] = "";
    $_SESSION['endereco'] = "";
    $_SESSION['numero'] = "";
}



header('Location: cliente.php');
exit;
?>