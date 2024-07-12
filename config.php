<?php

//CONFIGURAÇÕES DE CREDENCIAIS
$sever = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'formulario_bancodedados';

//CONEXÃO COM BANCO DE DADOS
$conn = new mysqli($server, $usuario, $senha, $banco);

//VERIFICAR CONEXÃO
if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados:".$conn->connect_error);
}

?>