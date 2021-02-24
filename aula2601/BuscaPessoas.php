<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();

	include '../aula1512/conexao.php';
	
	$rs = mysqli_query($link, "select count(*) from pessoas");
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];

    $rs = mysqli_query($link, "select * from pessoas limit $offset,$rows" );

	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>