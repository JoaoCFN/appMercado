<?php
require_once "scripts/config.php";
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if (isset($_GET['listar_tudo'])) {
    $select = "SELECT * from compra";
    $query = $con->query($select);
    if ($query) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo (json_encode($row));
        }
    } else {
        echo ('Erro ao selecionar lista');
    }
}
