<!DOCTYPE html>
<html lang="pt">
<head>

<?php
include('./tema/tema.php');
cabecalho("Carrinho");
?>

</head>
<?php navbar(); ?>

<body class="bg-muted">

    <div class="container my-5">
        <div class="row text-dark">
            <div class="col-5">
                <p class="display-4" style="font-size:2rem;">Ordem de compra</p>
            </div>
            <div class="col-5">
                <label class="display-4" style="font-size:2rem;">codigo:</label>
                <input disabled type="number" class="form-control w-25 float-right" name="codigo">
                <input required class="form-control w-50" type="text" value="<?php echo date('d/m/Y'); ?>" name="data">
            </div>

        </div>
        <hr class="my-5">

        <div class="row mr-4">
            <div class="col-sm-1">
                <label for="entradaProduto" class="display-4 text-dark" style="font-size: 1.5rem;">Produto:</label>
            </div>

            <div class="col-8">
                <input required id="prod" type="text" class="form-control">

            </div>
            <div class="col">
                <input required id="qtd" type="number" min="1" value="1" class="form-control">
            </div>
            <div class="col">
                <button class="btn btn-primary" onclick="insereLista();">Adicionar</button>
            </div>
        </div>

        <div class="row carrinho my-4 ml-5">
            <div class="col-10 carrinho-tabela">
                <table class=" ml-4 table table-dark table-striped">
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
            <div class="col-2">
                <input class="btn btn-danger" type="submit" value="Finalizar"><br>
                <span style="font-size: 2rem;" class="text-dark display-4" id="total">R$ 0,00</span>
            </div>
        </div>

    </div>
</body>
<footer>
<?php rodape(); ?>
</footer>
</html>