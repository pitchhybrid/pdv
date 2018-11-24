<!DOCTYPE html>
<html lang="pt">
<head>
<?php
include('./tema/tema.php');
cabecalho("Cadastro Cliente");
?>
</head>
<body class="bg-info">
    <div class="container login">
        <div class="card">
            <form action="# " method="post">
                <div class="form-group">
                    <label>nome de usuario:</label>
                    <input class="form-control" type="text" id="user">
                    <small id="emailHelp" class="form-text text-muted">nome de usuario</small>
                    <label>senha:</label>
                    <input class="form-control" type="password" id="senha">
                    <small id="emailHelp" class="form-text text-muted">senha de 8 digitos</small>
                    <label>confirmar senha:</label>
                    <input class="form-control" type="password" id="senha">
                    <small id="emailHelp" class="form-text text-muted">senha de 8 digitos</small>
                </div>
                <button class="btn btn-primary">Cadastrar</button>
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