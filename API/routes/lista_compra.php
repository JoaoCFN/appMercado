<?php 
$local_db = '../../dbapp.db';
$con = new SQLite3($local_db);
$query = ("SELECT * from lista_compras");
$con ->exec($query);

if ($query){
    echo ('gg');
}else{
    echo ('wp');
}

echo ($local_db);

?>