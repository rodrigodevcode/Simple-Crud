<?php
include "menu.php";
include "conexao.php";


$sql = ' insert into pessoas ( nome, email, sexo, nascimento, fone )
            values ("'.$_REQUEST['fnome'].'", "'.$_REQUEST['femail'].'", "'.$_REQUEST['fsexo'].'", "'.$_REQUEST['fnascimento'].'", "'.$_REQUEST['ffone'].'" ) ' ;
            
	if ($result = mysqli_query($link, $sql )) {
      
      echo 'Cadastrado com sucesso.';
    } else {
      echo 'ERRO';
            } 

            
            ?>