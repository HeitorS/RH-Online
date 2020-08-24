<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>RH Online - Contato</title>
    </head>
    <body>
        <form method="POST" action="/PHP/contato/controller.php">
            <label>Nome: </label>
            <input id="nome" name="nome" type="text" />
            <br/>
            <br/>
            <label>E-mail: </label>
            <input id="email" name="email" type="text"/>
            <br/>
            <br/>
            <label>Título: </label>
            <input id="titulo" name="titulo" type="text"/>
            <br/>
            <br/>
            <label>Mensagem: </label>
            <textarea id="mensagem" name="mensagem">

            </textarea>
            <br/>
            <br/>
            <input id="Teste" type="submit" value="Enviar Email"/>
        </form>
    </body>
</html>