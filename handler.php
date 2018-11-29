<?php
$user = 'root';
$pass ='';

try {
$dbh = new PDO('mysql:host=localhost;dbname=pdv', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}