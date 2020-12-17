<?php
$con = new PDO('sqlite:../dbapp.db');


if (isset($_GET['resultado'])) {
    $query = $con->query("SELECT * FROM compra");
    if ($query){
        echo ("deu bom");
    }else{
        echo ("deu ruim");
    }
}
