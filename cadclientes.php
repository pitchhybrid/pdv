<!DOCTYPE html>
<html lang="pt">
<head>
<?php
include('./tema/tema.php');
cabecalho("Cadastro Clientes");
?>
</head>
<?php navbar(); ?>
<body class="bg-muted">

    <div class="w-75 container tela-cadastro-cliente">
        <div class="card w-75">
            <div class="card-header text-center">
                <h3>Cadastrar Cliente</h3>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label>Código:</label>
                        <button class="btn btn-primary float-right">Cadastrar</button>
                        <input class="form-control w-25" type="text" disabled name="cod_prod">
                        <br>
                        <label>Nome do Cliente:</label>
                        <input class="form-control" type="text" name="nome_prod">
                        <br>
                        <label>CPF:</label>
                        <input class="form-control" type="number" name="qnt_prod">
                        <br>
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="qnt_prod">
                        <br>
                        <label>Telefone:</label>
                        <input class="form-control" type="text" name="qnt_prod">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<footer>
<?php
rodape();
?>
</footer>
</html>