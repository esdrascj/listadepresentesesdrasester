<?php

$hostname = "https://auth-db121.hostinger.com/db_structure.php?server=1&db=u580528134_listapresente";
$user = "u580528134_noivo";
$password = "$hNKN@9d*2Xh";
$database = "u580528134_listapresente";
$conexao = mysqli_connect('https://auth-db121.hostinger.com/db_structure.php?server=1&db=u580528134_listapresente','u580528134_noivo','$hNKN@9d*2Xh','u580528134_listapresente') or die('Erro de conexao ao BD: '.mysqli_error($con));

if(!$conexao)
	print "falha na conexão com o banco de dados";
?>