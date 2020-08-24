<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>RH Online</title>
        <link href="/CSS/bootstrap.css" rel="stylesheet"/>
        <script type="text/javascript" src="/JS/bootstrap.js"></script>
    </head>
    <body class="container">
        <header>
            <?php
                $menu = ["Home","Produtos","Galeria","Empresa","Contatos"];
                $link = ["home.php","produtos.php","galeria.php","empresa.php","contato.php"];

                for($i = 0; $i < 5; $i++ ){
                    echo "<a href='$link[$i]'><li>$menu[$i]</li></a>";
                }
            ?>
        </header>
