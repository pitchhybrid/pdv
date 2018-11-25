<!DOCTYPE html>
<html lang="pt">
<head>
   <?php
   include("./tema/tema.php");
   cabecalho("Produtos");
   ?>
</head>
<body class="bg-muted">
    <?php navbar(); ?>
    <div class="container my-5">
        <div class="row">

            <div class="card mr-5" style="width:16rem;">
               <p class="display-4 ml-4" style="font-size:1.5rem">Cadastrar <br>
                Produtos<br></p> 
                <a class ="btn btn-primary" href="./cadproduto.php">&nbsp</a>
            </div>
            <div class="card" style="width:16rem;">
               <p class="display-4 ml-4" style="font-size:1.5rem">Listar <br>
                Produtos<br></p> 
                <a class ="btn btn-primary" href="./mock.php">&nbsp</a>
            </div>
        </div>
    </div>
        
</body>
<?php
rodape();
?>
</html>