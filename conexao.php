<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname="banco_cadeiras_rodas";

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
die("Houve um erro: ".mysqli_connect_error());
}
?>