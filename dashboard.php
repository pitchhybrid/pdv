<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include('./tema/tema.php');
        include('handler.php');
        cabecalho('Dashboard');
        ?>
    </head>
    <body class="bg-muted">
        <?php
        navbar();
        ?>
        <div class="container my-5">
            <div class="row">

                <div class="card mr-auto" style="width:13rem;">
                Clientes
                </p> <p class="display-4 text-center" style="font-size:1rem;">
                    <hr> <?php
                    $consulta = $dbh->prepare("select count(*) from clientes");
                    $consulta->execute();

                    $num = $consulta->fetch(PDO::FETCH_NUM);
                    print_r($num[0]);
                    ?>
                    </p>

                    <a class="btn btn-success" href="./clientes.php">&nbsp;</a>

                </div>

                <div class="card" style="width:13rem;">
                    Produtos
                    </p> <p class="display-4 text-center" style="font-size:1rem;">
                    <hr> <?php
                    $consulta = $dbh->prepare("select count(*) from produtos");
                    $consulta->execute();

                    $num = $consulta->fetch(PDO::FETCH_NUM);
                    print_r($num[0]);
                    ?>
                    </p>

                    <a class="btn btn-success" href="./produto.php">&nbsp;</a>
                </div>
            </div>
        </div>

        </body>
        
    <footer>
    <?php rodape(); ?>
    </footer>
</html>