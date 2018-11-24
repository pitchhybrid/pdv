<?php
require('mock.php');
$login = $_POST['user'];
$pass = $_POST['pass'];

if($login == $loginMock && $pass == $passMock){
header('location: ./Carrinho.php');
}else{
    echo"nao logado";
}

echo "<pre>";
var_dump($_POST);
echo "</pre>";


