<?php
include('./mock.php');

verificar_login($_POST['user'],$_POST['pass']);

function verificar_login($l,$p){
    global $loginMock,$passMock;
    if($l == $loginMock && $p == $passMock){
       return header('location: ./dashboard.php');
        }else{
       return header('location: ./index.php');
            
        }
}
