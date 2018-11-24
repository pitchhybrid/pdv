<!DOCTYPE html>
<html lang="pt">
<head>
<?php
include('./tema/tema.php');
cabecalho("Carrinho");
?>
</head>

<body class="bg-info">

    <div class="container my-5">
        <div class="row text-white">
            <div class="col-sm-2">
                <p class="display-4" style="font-size:2rem;">PDV Lista</p>
            </div>
            <div class="col-3">
                <input class="form-control" type="date" name="data">
            </div>

        </div>
        <hr class="my-5">

        <div class="row">
            <div class="col-sm-1">
                <label for="entradaProduto" class="display-4 text-white" style="font-size: 1.5rem;">Produto:</label>
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

        <div class="row carrinho my-2">
            <div class="col-sm-10 carrinho-tabela">
                <table style="border-radius:10px;" class="table bg-light table-striped">
                    <thead>
                        <tr>
                            <th width="60%">Produto</th>
                            <th width="10%">Quantidade</th>
                            <th width="20%">Preço (R$)</th>
                            <th width="10%">Ação</th>
                        </tr>
                    </thead>
                    <tbody id="sacola">

                    </tbody>
                </table>
            </div>
            <div class="col-sm-2">
                <input class="btn btn-danger" type="submit" value="Finalizar"><br>
                <span style="font-size: 2rem;" class="text-white display-4" id="total">R$ 0,00</span>
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