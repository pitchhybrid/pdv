<?php

function sel($key)
{
    include('./handler.php');
    
    $data = $dbh->prepare("SELECT * FROM ?");
    $data->bindParam(1,$key);
    $data->execute();
    
    $colunas = $dbh->prepare("select count(*) from information_schema.columns Where Table_Name=?");
    $colunas->bindParam(1,$key);
    $colunas->execute();
    $num = $colunas->fetch(PDO::FETCH_NUM);
    echo "<table class=\"table table-striped\">";
    while($row = $data->fetch(PDO::FETCH_NUM)){
        
        echo"<tr>";
        for ($i=0; $i <$num[0] ; $i++) { 
            
            echo("<td>".$row[$i]."</td>");
        }
       echo"</tr>";
       echo"</table>";
       echo "</div>";
    }
    echo "</table>";
    

    $data = NULL;
    $colunas = NULL;
}