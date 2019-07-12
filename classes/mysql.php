<?php

public class DB{


    var $user = 'root';
    var $pass ='';
    var $dbh = null;

    function __construct(){
        try {
            $this->$dbh = new PDO('mysql:host=localhost;dbname=pdv', $user, $pass, array( PDO::ATTR_PERSISTENT => true ));
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function getConnection(){
        return $dbh;
    }
    
    function insert($table,$fields,$values){
        $stmt = $dbh->prepare("INSERT INTO ". $table ."(".each($fields).") VALUES (".each($values).")" );
        $stmt->execute(); 
    }
    
    function select($columns,$table){
        $sql = "";
        if(is_array($columns)){
            $sql = "SELECT ". each($columns) . " FROM ". $table;
        }else{
            $sql = "SELECT ". $columns ." FROM ". $table;
        }
        $stmt = $dbh->prepare($sql);
        return $stmt;
    }

    function each($fields){
        $f = "";
        $i = 0;
        foreach($fields as $field){
        $i++;
        if( !($i == count($fields)) ){
            $f .= $field .",";
        }else{
            $f .= $field ." ";
        }
        return $f;
      }
    }
}           

