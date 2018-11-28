<!DOCTYPE html>
<html lang="pt">
<head>
   <?php
   include("./tema/tema.php");
   include('./select.php');
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
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label>Nome de Produto:</label>
                                    <input class="form-control" type="text" id="nome_prod">
                                    <br>
                                    <label>Quantidade:</label>
                                    <input class="form-control" type="number" id="qnt_prod">
                                    <br>
                                    <label>Código:</label>
                                    <input class="form-control" type="text" id="cod_prod">
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

         <!-- ModalLista -->
         <div class="modal fade" id="ModalLista" role="dialog">
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
                            <?php
                            sel('clientes');
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