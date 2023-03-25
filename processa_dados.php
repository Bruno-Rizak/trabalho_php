<?php 


$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];
$datanascimento = $_POST["datanascimento"];
$curso = $_POST["curso"];
$sexo = $_POST["sexo"];
$idioma = $_POST["idioma"];
$datadeinicio = $_POST["datadeinicio"];
$foto = $_POST["foto"];
$cadastrar = $_POST["cadastrar"];

$texto =$nome .",".$endereco .",".$email .",".$datanascimento .",".$curso .",".$sexo .",".$idioma .",".$datadeinicio .",".$foto .",".$cadastrar ."\n";

$arquivo = fopen("banco.csv","a");
fwrite ($arquivo, $texto);
fclose($arquivo);


$nome_arquivo = $_FILES['foto']['name'];
    $dir_arquivo= "uploads/".$nome_arquivo;
    if(move_uploaded_file($_FILES['uploads']['tmp_name'], $dir_arquivo)){
   	 echo "Arquivo carregado com sucesso";
    }
    else{
   	 echo "Erro ao carregar o arquivo";
    }

echo "Arquivo enviado com sucesso"


?>