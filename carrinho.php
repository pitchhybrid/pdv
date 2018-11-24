<!DOCTYPE html>
<html lang="pt">
<head>
<?php
include('./tema/tema.php');
cabecalho("Carrinho");
?>
</head>

<body class="bg-info">

    <div class="container">
        <hr class="my-5">
        <hr class="my-3">
        <div class="row">
            <div class="col-sm-2">
                <p class="display-4" style="font-size:2rem;">PDV Lista</p>
            </div>
            <div class="col-sm">
                <input class="form-control" type="date" name="data">
            </div>

        </div>
        <hr class="my-2">

        <div class="row">
            <div class="col-sm-1">
                <label for="entradaProduto" class="display-4" style="font-size: 1.5rem;">Produto:</label>
            </div>

            <div class="col-8">
                <input id="prod" type="text" class="form-control">

            </div>
            <div class="col">
                <input id="qtd" type="number" min="1" value="1" class="form-control">
            </div>
            <div class="col">
                <button class="btn btn-primary" onclick="insereLista();">Adicionar</button>
            </div>
        </div>

        <div class="row carrinho my-1 bg-light">
            <div class="col-sm-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="60%">Produto</th>
                            <th width="10%">Quantidade</th>
                            <th width="20%">Preço (R$)</th>
                            <th width="10%">ação</th>
                        </tr>
                    </thead>
                    <tbody id="sacola">

                    </tbody>
                </table>
            </div>
            <div class="col-sm-2">
                <button id="finalizar" class="btn btn-danger"> Finalizar</button>
                <span style="font-size: 2rem;" class="display-4" id="total"></span>
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