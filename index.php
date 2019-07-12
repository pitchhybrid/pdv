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

                    <div class="my-3 ">
                    <button class="btn btn-primary float-right" type="submit"><i class="fas fa-sign-in-alt"></i></button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#exampleModal">
                      Cadastrar
                    </button>
                    </div>
                </div>
            </form>
            <p class="text-center display-4" style="font-size:1.1rem; color:red;">
              <?php
            if (isset($_GET['erro']))
            {
              if ($_GET['erro'] == 1) {
                echo "<b>Usuario ou Senha incorretos </b>";
              }
              if ($_GET['erro'] == 2) {
                echo "<b>Usuario ja cadastrado </b>";
              }
              if ($_GET['erro'] == 3) {
                echo "<b>senhas não conferem</b>";
              }

            }
             ?>
           </p>
        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body display-4">

          <form action="./callback.php" method="post" style="font-size:1.5rem;">

            <label class="my-4">Login:</label>
            <input required class="form-control" type="text" name="caduser">

            <label class="my-4">Senha:</label>
            <input required class="form-control" type="password" name="cadpass">

            <label class="my-4">Confirmar senha:</label>
            <input required class="form-control" type="password" name="cadpass1">

            <button class="my-4 btn btn-primary float-right" type="submit">Cadastrar</button>
          </form>

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
