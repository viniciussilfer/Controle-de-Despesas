<?php

$hostname = "localhost";
$user = "root";
$senha = "";
$database = "cadastro";

$conexao = mysqli_connect( $hostname, $user, $senha, $database);

if(!$conexao){
	print "Falha na conexão com o banco de dados";
}
