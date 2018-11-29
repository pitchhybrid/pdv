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

    <div class="container display-4 my-5" style="font-size:2rem;">
        <div class="row text-dark">
            <div class="col">
                <label for="codigo">Numero da Ordem:</label>
                <input required class="form-control w-50" type="number" name="codigo">
            </div>
            <div class="col">
                <label for="data">Data: </label>
                <input required class="form-control w-50" type="text" value="<?php echo date('d/m/Y'); ?>" name="data">
            </div>
            <div class="col">
                <label for="data">CPF: </label>
                <input required class="form-control w-50" type="text" name="cpf">
            </div>

        </div>
        <hr class="my-5">

        <div class="row display-4" style="font-size: 1.5rem;">

            <div class="col-5" >
                <p class="text-dark">Produto:</p>
                <input required id="prod" type="text" class="form-control">
            </div>
            <div class="col">
                <p class="text-dark">Quantidade:</p>
                <input required id="qtd" type="number" min="1" value="1" class="form-control">
            </div>
            <div class="col">
                <p class="text-dark">Valor:</p>
                <input required id="valor" type="text" min="1" value="1" class="form-control">
            </div>
            <div class="col">
                <button class="btn btn-primary" onclick="insereLista();">Adicionar</button>
                <div class="my-2">
                <input class="btn btn-danger" id="finalizar" type="submit" value="Finalizar">
                <span style="font-size: 2rem;" class="text-dark display-4 float-right" id="total">R$ 0,00</span>
                </div>
            </div>
        </div>

        <div class="row carrinho my-4 display-4" style="font-size: 1.1rem;">
            <div class="col-11 carrinho-tabela">
                <table class="table table-dark table-striped">
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
        </div>

    </div>
</body>
<footer>
<?php rodape(); ?>
</footer>
</html>