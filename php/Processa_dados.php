<?php 
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$datadenascimento = $_POST['datadenascimento'];
$curso = $_POST['curso'];
$sexo = $_POST['sexo'];
$ingles = $_POST['ingles'];
$espanhol = $_POST['espanhol'];
$frances = $_POST['frances'];
$alemao = $_POST['alemao'];
$data_de_inicio = $_POST['data_de_inicio'];
$foto = $_POST['foto'];
$cadastrar = $_POST['cadastrar'];

$texto =$nome .",".$endereco .",".$email .",".$datadenascimento .",".$curso .",".$sexo .",".$ingles .",".$espanhol .",".$frances .",".$alemao .",".$data_de_inicio .",".$foto .",".$cadastrar . "\n";

$arquivo = fopen("banco.csv", "a");
fwrite ($arquivo, $texto);
fclose($arquivo);

echo "Arquivo enviado com sucesso"


?>