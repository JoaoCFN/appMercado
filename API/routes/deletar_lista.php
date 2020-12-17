<?php 

require_once "scripts/config.php";
if (isset($_GET['id_lista'])){
    $delete = "DELETE FROM `compra` WHERE id = $_GET[id_lista]";
    $query = $con -> query($delete);
    if ($query){
        echo ('Lista Deletada!');
    }else{
        echo ('Deu ruim bro');
    }
}
