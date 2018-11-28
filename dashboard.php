<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include('./tema/tema.php');
        cabecalho('Dashboard');
        ?>
    </head>
    <body class="bg-muted">
        <?php
        navbar();
        ?>
        <div class="container my-5">
        <a href="./mock-clientes.php">
            <div class="card" style="width:13rem;">
            <p class="display-4" style="font-size:1rem;">
            Clientes 
            </p>

            </div>
            </a>
        </div>

        </body>
        
    <footer>
    <?php rodape(); ?>
    </footer>
</html>