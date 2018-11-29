<!DOCTYPE html>
<html lang="pt">
<head>
   <?php
   include("./tema/tema.php");
   include('./handler.php');
   cabecalho("Clientes");
   ?>
</head>
<body class="bg-muted">
    <?php navbar(); ?>
    <div class="container my-5">
        <div class="row">

            <div class="card mr-5" style="width:16rem;">
                <p class="display-4 ml-4" style="font-size:1.5rem">
                    Cadastrar Clientes
                </p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCadastro">
                    &nbsp;
                </button>
            </div>
            <div class="card" style="width:16rem;">
                <p class="display-4 ml-4" style="font-size:1.5rem">
                    Listar Clientes
                </p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLista">
                    &nbsp;
                </button>
            </div>
        </div>
    </div>


    <!-- ModalCadastro -->
    <div class="modal fade" id="ModalCadastro" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cadastro Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card">
                        <form action="clientes.php" method="POST">
                            <div class="form-group">
                                <label>Código:</label>
                                <input class="form-control w-25" type="text" disabled name="cod_cli">
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
                        <div class="modal-footer">
                            <button class="btn btn-primary" id="btn-cad-prod">Cadastrar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php


    $stmt = $dbh->prepare("INSERT INTO clientes(nome,CPF,email,telefone) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $_POST['nome_cli'],PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['cpf_cli'],PDO::PARAM_STR);
    $stmt->bindParam(3, $_POST['email_cli'],PDO::PARAM_STR);
    $stmt->bindParam(4, $_POST['tel_cli'],PDO::PARAM_STR);
    $stmt->execute();
    $stmt = NULL;

    ?>
    <!-- ModalLista -->
    <div class="modal fade" id="ModalLista" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Lista de Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <?php


                        $data = $dbh->prepare("SELECT * FROM clientes");
                        $data->execute();

                        $colunas = $dbh->prepare("select count(*) from information_schema.columns Where Table_Name='clientes'");
                        $colunas->execute();

                        $num = $colunas->fetch(PDO::FETCH_NUM);
                        echo "<table class=\"table table-striped\">";
                        while($row = $data->fetch(PDO::FETCH_NUM)){

                            echo"<tr>";
                            for ($i=0; $i <$num[0] ; $i++) {

                                echo(utf8_encode( "<td>".$row[$i]."</td>"));
                            }
                            echo"</tr>";
                        }
                        echo "</table>";


                        $data = NULL;
                        $colunas = NULL;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
rodape();
?>
</html>