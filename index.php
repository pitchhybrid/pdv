<!DOCTYPE html>
<html lang="pt">
<head>
<?php
//carregar tema
include('./tema/tema.php');
cabecalho("Login");
?>
</head>

<body class="bg-info">
    <div class="container login">
        <div class="card">
            <form action="./callback.php" method="post">
                <div class="form-group">
                    <label>Login:</label>
                    <input class="form-control" type="text" id="user" name="user">
                    <small id="emailHelp" class="form-text text-muted">nome de usuario.</small>
                    <label>Senha:</label>
                    <input class="form-control" type="password" id="senha" name="pass">
                    <small id="emailHelp" class="form-text text-muted">senha de 8 digitos</small>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-sign-in-alt"></i></button>
                    <a class="btn btn-warning" href="./cadastroCliente.php">cadastro</a>
                </div>
        </div>
        </form>

    </div>
</body>
<footer>
<?php
rodape();
?>
</footer>
</html>