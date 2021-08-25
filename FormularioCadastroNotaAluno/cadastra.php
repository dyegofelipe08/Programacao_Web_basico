<?php


$link = mysqli_connect("localhost", "root", "", "nota");


//checando a conexão com o banco de dados

	if (!$link){
	printf("Erro ao conectar banco de dados: ", mysqli_connect_errno());
	}

//definindo as variaveis para receber os dados do formulario

$nome = $_POST['nome']; 
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$av1 = $_POST ['av1'];
$av2 = $_POST['av2'];
$media = $_POST['media'];

  
 //criando a query em SQL para inserir os dados
 $query = "INSERT INTO aluno (nome, cpf, email, av1, av2, media) VALUES ('$nome','$cpf','$email','$av1', '$av2', '$media')";
 
 //executando o comando SQL
 mysqli_query($link, $query);
 
 //exibe mensagem de confirmação
 
 echo ("Os dados do aluno $nome foram inseridos com sucesso!");
 
?>