<?php 
#require_once "API/scripts/config.php";
$con = new PDO('sqlite:../../dbapp.db');
$select = ("SELECT * from compra");
$query = $con ->query($select);
if ($query){
    echo ('gg');
}else{
    echo ('wp');
}


?>