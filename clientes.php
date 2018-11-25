<!DOCTYPE html>
<html lang="pt">
<head>
   <?php
   include("./tema/tema.php");
   cabecalho("Clientes");
   ?>
</head>
<body class="bg-muted">
    <?php navbar(); ?>
    <div class="container my-5">
        <div class="row">

            <div class="card mr-5" style="width:16rem;">
               <p class="display-4 ml-4" style="font-size:1.5rem">Cadastrar <br>
                Cliente<br></p> 
                <a class ="btn btn-primary" href="./cadclientes.php">&nbsp &nbsp</a>
            </div>
            <div class="card" style="width:16rem;">
               <p class="display-4 ml-4" style="font-size:1.5rem">Listar <br>
                Clientes<br></p> 
                <a class ="btn btn-primary" href="./mock-clientes.php">&nbsp</a>
            </div>
        </div>
    </div>
        
</body>
<?php
rodape();
?>
</html>