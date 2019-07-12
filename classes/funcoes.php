<?php
include ("./mysql.php");

public class functions{

    var $dbh = null; 
    function __construct(){
        $db = new DB();
        $this->$dbh = $db->getConnection();
    }

}
