<!DOCTYPE html>
<html lang="pt">
<head>
   <?php
   include("./tema/tema.php");
   include('./handler.php');
   cabecalho("Produtos");
   ?>
</head>
<body class="bg-muted">
    <?php navbar(); ?>
        <div class="container my-5">
            <div class="row">

                <div class="card mr-5" style="width:16rem;">
                    <p class="display-4 ml-4" style="font-size:1.5rem">
                    Cadastrar Produtos
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCadastro">
                        &nbsp;
                    </button>
                </div>
                <div class="card" style="width:16rem;">
                    <p class="display-4 ml-4" style="font-size:1.5rem">
                    Listar Produtos
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
                        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro Produtos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label>Nome de Produto:</label>
                                    <input required class="form-control" type="text" name="nome_prod">
                                    <br>
                                    <label>Preço:</label>
                                    <input required class="form-control" type="number" name="preco_prod">                            
                                    <br>
                                    <label>Código:</label>
                                    <input class="form-control" disabled type="text" name="cod_prod">
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
        $stmt = $dbh->prepare("INSERT INTO produtos(nome,preco) VALUES (?, ?)");
        $stmt->bindParam(1, $_POST['nome_prod'],PDO::PARAM_STR);
        $stmt->bindParam(2, $_POST['preco_prod'],PDO::PARAM_STR);
        $stmt->execute();
        $stmt = NULL;
?>




         <!-- ModalLista -->
         <div class="modal fade" id="ModalLista" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Lista de Produtos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <?php
                       //     include('./handler.php');

                            $data = $dbh->prepare("SELECT * FROM produtos");
                            $data->execute();

                         //   $colunas = $dbh->prepare("select count(*) from information_schema.columns Where Table_Name='produtos'");
                         //   $colunas->execute();

                          //  $num = $colunas->fetch(PDO::FETCH_NUM);
                            echo "<table class=\"table table-striped\">";
                            while($row = $data->fetch(PDO::FETCH_NUM)){

                                echo"<tr>";
                                for ($i=0; $i < 3 ; $i++) {

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