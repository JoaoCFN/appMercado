<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'db_app';

$con = new mysqli($servidor,$usuario,$senha,$banco);
$conexao = new PDO("mysql:host=$servidor;dbname=$banco","$usuario","$senha");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>