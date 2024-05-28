<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-aula';

$conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

if($conexao->conecte_errno)
{
    echo "Erro";
}
else 
 {
    echo 'conexão Efetuada com Sucesso';
}
?>