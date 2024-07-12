<?php
require_once 'config.php';
//COLOCANDO HORÁRIO DA SUA LOCALIZAÇÃO
date_default_timezone_set('America/Sao_Paulo');

//PEGANDO OS DADOS VINDOS SO FORMULARIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');

//PREPARAR COMANDA PARA TABELA
$smtp = $conn->prepare("INSERT INTO dados (nome, email, mensagem, data, hora) VALUES (?,?,?,?,?)");
$smtp->bind_param("sssss",$nome, $email, $mensagem, $data_atual, $hora_atual);

//SE EXECUTAR CORRETAMENTE
if($smtp->execute()){
    echo "Mensagem enviada com sucesso!";
}else{
    echo "Erro no envio da mensagem: ".$smtp->error;
}

$smtp->close();
$conn->close();

?>