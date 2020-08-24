<?php 
    session_start();
    define('_DIR','C:/Users/User/Documents/Trabalho/RH-Online/',true);
    require(_DIR.'header.php');

    if($_SESSION['msg']){

        $msg = $_SESSION['msg'];
        
        echo '<div class="alert alert-success" role="alert">';
        echo $msg;
        echo '</div>';
    }
    unset($_SESSION['msg']);
?>
    
    <form method="POST" action="./cadastroController.php">
        
        <label id="lblEmpresa" for="empresa">Empresa: </label>
        <input type="text" id="empresa" name="empresa" class="form-control" value="<?php echo $_SESSION['empresa']; ?>"/>
        <br/>
        <label id="lblCoordenador" for="coordenador">Coordenador: </label>
        <input type="text" id="coordenador" name="coordenador" class="form-control"  value="<?php echo $_SESSION['coordenador']; ?>"/>
        <br/>
        <label id="lblEmail" for="email">E-mail: </label>
        <input type="text" id="email" name="email" class="form-control"  value="<?php echo $_SESSION['email']; ?>"/>
        <br/>
        <label id="lblTelefone" for="telefone">Telefone: </label>
        <input type="text" id="telefone" name="telefone" class="form-control"  value="<?php echo $_SESSION['telefone']; ?>"/>
        <br/>
        <label id="lblCelular" for="celular">Celular: </label>
        <input type="text" id="celular" name="celular" class="form-control"  value="<?php echo $_SESSION['celular']; ?>"/>
        <br/>
        <label id="lblCep" for="cep">CEP: </label>
        <input type="text" id="cep" name="cep" class="form-control"  value="<?php echo $_SESSION['cep']; ?>"/>
        <br/>
        <label id="lblEndereco" for="endereco">Endereço: </label>
        <input type="text" id="endereco" name="endereco" class="form-control"  value="<?php echo $_SESSION['endereco']; ?>"/>
        <br/>
        <label id="lblNumero" for="numero" >Nº: </label>
        <input type="text" id="numero" name="numero" class="form-control"  value="<?php echo $_SESSION['numero']; ?>"/>
        <br/>

        <button class="btn btn-success" type="submit" name="salvar">Salvar</button>
        <button class="btn btn-primary" type="submit" name="limpar">Limpar</button>
    </form>
<?php 
    require(_DIR.'footer.php');
    unset($_SESSION['empresa']);
    unset($_SESSION['coordenador']);
    unset($_SESSION['email']);
    unset($_SESSION['telefone']);
    unset($_SESSION['celular']);
    unset($_SESSION['cep']);
    unset($_SESSION['endereco']);
    unset($_SESSION['numero']);
?>