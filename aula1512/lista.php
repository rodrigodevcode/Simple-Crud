<?php
			include "menu.php";
			include "conexao.php";


		if ( isset($_REQUEST['apaga']) ) {
		$sql = ' delete from pessoas where codigo = '.$_REQUEST['apaga'];
		mysqli_query($link, $sql );
		}


			$sql =  ' select codigo, nome, email, sexo, nascimento, fone from pessoas ';
			
		if ($result = mysqli_query($link, $sql )) {
			while ($linha = mysqli_fetch_row($result)) {
            echo '<a href="lista.php?apaga='.$linha[0].'"> <img src="sqlnot.jpg" width="18"> </a> - ';
            echo '<a href="alterar.php?codigo='.$linha[0].'&nome='.$linha[1].'&email='.$linha[2].'&sexo='.$linha[3].'&nascimento='.$linha[4].'$fone='.$linha[5].'"> <img src="sqlalter.jpg" width="18"> </a> - ';
			echo 'Codigo: '.$linha[0];
			echo '<br>Nome: '.$linha[1];
			echo '<br>E-mail: '.$linha[2];
			echo '<br>Sexo: '.$linha[3];
			echo '<br>Nascimento: '.$linha[4];
			echo '<br>Fone: '.$linha[5];
			echo '<hr>';
			}
		}
	?>	