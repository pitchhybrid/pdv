<?php

function cabecalho($titulo){
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="./tema/css/bootstrap.css">
    <link rel="stylesheet" href="./tema/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<?php
}


function rodape(){
    ?>
    <script src="./tema/js/bootstrap.js"></script>
    <script src="./tema/jquery-3.3.1.js"></script>
    <script src="./tema/popper.js"></script>
    <script src="./tema/index.js"></script>
    <?php
}
?>

<?php
function navbar(){
    ?>
    <!--Nav-Bar-->
        <header class="navbar navbar-expand-lg navbar-dark bg-primary">

            <a class="navbar-brand h1 mb-0" href="#">PDV </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsite">
              <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse " id="navbarsite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./carrinho.php">Carrinho</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./produto.php">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./clientes.php">Clientes</a>
                    </li>
                </ul>
        </header>
<?php
}
?>