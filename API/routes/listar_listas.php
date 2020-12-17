<?php
require_once "scripts/config.php";
if (isset($_GET['listar_tudo'])) {
    $select = "SELECT * from compra";
    $query = $con->query($select);
    if ($query) {
        $row = mysqli_fetch_assoc($query);
        echo (json_encode($row));
    } else {
        echo ('Erro ao selecionar lista');
    }
}
