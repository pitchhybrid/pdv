<!DOCTYPE html>
<html lang="pt">
<head>
<?php
include('./tema/tema.php');
cabecalho("Cadastro Cliente");
?>
</head>

<body class="bg-muted">
    <div class="container login">
        <div class="card">
            <form action="# " method="post">
                <div class="form-group display-4" style="font-size:1.3rem">
                    <label>nome de usuario:</label>
                    <input class="form-control my-2" type="text" id="user">
                   
                    <label>senha:</label>
                    <input class="form-control my-2" type="password" id="senha">
                   
                    <label>confirmar senha:</label>
                    <input class="form-control my-2" type="password" id="senha">
                    
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