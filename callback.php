<?php
include('./handler.php');
if( isset($_POST['user']) && isset($_POST['pass']) ){
  $login = $_POST['user'];
  $pass =  $_POST['pass'];

  $data = $dbh->prepare("SELECT * FROM usuarios WHERE nome='$login' AND senha='$pass'");
  $data->execute();
  $row = $data->fetch();

  if ($row) {
    return header('location: ./dashboard.php');
  }else {
    return header('location: ./index.php?erro=1');
  }

}

if( isset($_POST['caduser']) && isset($_POST['cadpass']) && isset($_POST['cadpass'])){
$cadlogin = $_POST['caduser'];
$cadpass =  $_POST['cadpass'];
$cadpass1 =  $_POST['cadpass1'];

$data = $dbh->prepare("SELECT * FROM usuarios WHERE nome='$cadlogin'");
$data->execute();
$row = $data->fetch();

if ($row) {
  return header('location: ./index.php?erro=2');
}else {

    if($cadpass == $cadpass1){

      $data = $dbh->prepare("INSERT INTO usuarios(nome,senha) VALUES (?,?)");
      $data->bindParam(1,$cadlogin,PDO::PARAM_STR);
      $data->bindParam(2,$cadpass,PDO::PARAM_STR);
      $data->execute();
      $data = NULL;
      return header('location: ./dashboard.php');
    }else {
      return header('location: ./index.php?erro=3');
    }

}




 }
