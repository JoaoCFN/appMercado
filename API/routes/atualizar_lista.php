<?php 

require_once "scripts/config.php";

if (isset($_POST['atualizar_lista'])){
    $update = "UPDATE lista_compra SET id_produto='$_POST[id_produto]', id_compra='$_POST[id_compra]', quantidade='$_POST[quantidade]' where id_lista_compra = '$_POST[id_lista_compra]')";
    $query = $con ->query($update);
    if ($query){
        echo ('sucesso!');
    }else{
        echo ('Erro!');
    }
}