<?php

$id = intval($_REQUEST['codigo']);

include '../aula1512/conexao.php';

$sql = "delete from pessoas where codigo=$id";
$result = mysqli_query($link, $sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Falhou excluir pessoa.'));
}
?>