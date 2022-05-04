<?php
include 
$servidor="localhost";
$usuario="root";
$senha="";
$dbname="banco_cadeiras_rodas";

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
die("Houve um erro: ".mysqli_connect_error());
}

$id=$_POST['id'];
$nome_usuario=$_POST['nome_usuario'];
$endereco=$_POST['endereco'];
$rg=$_POST['rg'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$situacao=$_POST['situacao'];
<br>


$sql="INSERT INTO cadastro(id, nome_usuario, endereco, rg, cpf, situacao)
 VALUES ($id, '$nome_usuario', '$endereco', $rg, $cpf, $telefone, '$situacao')'";
 
 if(mysqli_query($conexao, $sql)){
    echo"Usuário cadastrado com sucesso";
}
else{
    echo"Erro" .mysqli_connect_error($conexao);
}

mysqli_close($conexao);

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
die("Houve um erro: ".mysqli_connect_error());
}

$id=$_POST['id'];
$nome_responsavel=$_POST['nome_responsavel'];
$endeco=$_POST['endereco'];
$rg=$_POST['rg'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$cadeira_rodas=$_POST['cadeira_rodas'];
$cadeira_banho=$_POST['cadeira_banho'];
$data_recebimento=$_POST['data_recebimento'];
$data_devolucao=$_POST['data_devolucao'];

$sql="INSERT INTO cadastro(id, nome_responsavel, endereco, rg, cpf, telefone, cadeira_rodas, cadeira_banho, data_recebimento, data_devolucao)
     VALUES ($id, '$nome_responsavel', '$endereco', $rg, $cpf, $telefone, '$cadeira_rodas', '$cadeira_banho', $data_recebimento, $data_devolucao )'";
 
 if(mysqli_query($conexao, $sql)){
     echo"Rsponsável cadastrado com sucesso";
 }
 else{
     echo"Erro" .mysqli_connect_error($conexao);
 }

 mysqli_close($conexao);
 ?>