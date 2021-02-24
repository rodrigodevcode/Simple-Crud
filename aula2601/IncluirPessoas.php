<?php

$nome = htmlspecialchars($_REQUEST['nome']);
$email = htmlspecialchars($_REQUEST['email']);
$nascimento = htmlspecialchars($_REQUEST['nascimento']);
$sexo = htmlspecialchars($_REQUEST['sexo']);
$fone = htmlspecialchars($_REQUEST['fone']);

include '../aula1512/conexao.php';


	$sql = "insert into pessoas(nome,email,nascimento,sexo,fone) values('$nome','$email','$nascimento','$sexo','$fone')";
	if ( mysqli_query($link, $sql) ) {

		echo json_encode(array(
			'codigo' => $codigo,
			'nome' => $nome,
			'email' => $email,
			'nascimento' => $nascimento,
			'sexo' => $sexo,
          	'fone' => $fone
		));
	} else {
		echo json_encode(array('errorMsg'=>'Erro no Processamento.'));
	}

?>