<?php
#$con = new PDO('sqlite: ../../dbapp.db'); 
#$insert = ("SELECT * from compra");
#$query = $con->query($insert);
// Cria uma conexão com o banco de dados indicado no caminho
$myPDO = new PDO('sqlite:../dbapp.db');

$result = $myPDO->query("SELECT * FROM compra");
if ($result) {
    echo ('gg');
} else {
    echo ('wp');
}

#echo ($local_db);
