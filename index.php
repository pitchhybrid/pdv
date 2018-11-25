<!DOCTYPE html>
<html lang="pt">
<head>
<?php
//carregar tema
include('./tema/tema.php');
cabecalho("Login");
?>
</head>

<body class="bg-muted">
    <div class="container login">
        <div class="card">
            <form action="./callback.php" method="post">
                <div class="form-group display-4" style="font-size:1.5rem;">
                    <label class="my-4">Login:</label>
                    <input required class="form-control" type="text" id="user" name="user">
            
                    <label class="my-4">Senha:</label>
                    <input required class="form-control" type="password" id="senha" name="pass">
                    
                    <div class="my-3">
                    <a class="btn btn-warning mr-4" href="./cadastroCliente.php">cadastro</a>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-sign-in-alt"></i></button>
                    </div>
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