<?php
include('./tema/tema.php');
include_once('./handler.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<?php
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
                <form action="cadclientes.php" method="POST">
                    <div class="form-group">
                        <label>Código:</label>
                        <button class="btn btn-primary float-right">Cadastrar</button>
                        <input class="form-control w-25" type="text" name="cod_cli">
                        <br>
                        <label>Nome do Cliente:</label>
                        <input required class="form-control" type="text" name="nome_cli">
                        <br>
                        <label>CPF:</label>
                        <input requiried class="form-control" type="text" name="cpf_cli">
                        <br>
                        <label>E-mail:</label>
                        <input class="form-control" type="text" name="email_cli">
                        <br>
                        <label>Telefone:</label>
                        <input class="form-control" type="text" name="tel_cli">
                    </div>
                </form>

                <?php


                $stmt = $dbh->prepare("INSERT INTO clientes(nome,matricula,email,telefone) VALUES (?, ?, ?, ?)");
                $stmt->bindParam(1, $_POST['nome_cli'],PDO::PARAM_STR);
                $stmt->bindParam(2, $_POST['cpf_cli'],PDO::PARAM_STR);
                $stmt->bindParam(3, $_POST['email_cli'],PDO::PARAM_STR);
                $stmt->bindParam(4, $_POST['tel_cli'],PDO::PARAM_STR);
                $stmt->execute();
                $stmt = NULL;

                ?>
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