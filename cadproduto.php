<!DOCTYPE html>
<html lang="pt">
<head>
<?php
include('./tema/tema.php');
cabecalho("Cadastro Produto");
?>
</head>
<?php navbar(); ?>
<body class="bg-muted">

    <div class="container tela-cadastro-produto">
        <div class="row">
            <div class="col-md">
                <div class="container">
                    <div class="card conteiner-card">
                        <div class="card-header text-center">
                            <h3>Cadastrar Produto</h3>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label>Nome de Produto:</label>
                                    <input class="form-control" type="text" id="nome_prod">
                                    <br>
                                    <label>Quantidade:</label>
                                    <input class="form-control" type="number" id="qnt_prod">
                                    <br>
                                    <label>Código:</label>
                                    <input class="form-control" type="text" id="cod_prod">
                                    <br>
                                    <input type="file" class="form-control-file border" id="arq">
                                </div>
                            </form>
                            <br>
                            <button class="btn btn-primary" id="btn-cad-prod">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card conteiner-card">
                    <div class="card-header text-center">
                        <h3>Produto Cadastrado</h3>
                    </div>
                    <div class="card-body">
                        <h5 id="recebe_nome_prod"><strong>Produto: </strong></h5>
                        <h5 id="recebe_qnt_prod"><strong>Quantidade: </strong></h5>
                        <h5 id="recebe_cod_prod"><strong>Código: </strong></h5>
                        <img src="" alt="">
                    </div>
                </div>


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