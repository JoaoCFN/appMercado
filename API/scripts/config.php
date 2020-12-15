<?php 
$local_db = '../../dbapp.db';
$con = new SQLite3($local_db);
$query = ("INSERT into compra (nome_lista,valor_total,status) values ('Lista de Testes','450','Pendente')");
$con ->exec($query);

if ($query){
    echo ('gg');
}else{
    echo ('wp');
}

echo ($local_db);

?>