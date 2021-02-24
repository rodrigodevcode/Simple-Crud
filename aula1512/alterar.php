<?php
			include "menu.php";
			include "conexao.php";
			if ( isset($_REQUEST['fcodigo']) ) {
              	$sql = ' update pessoas 
                		 set nome = "'.$_REQUEST['fnome'].'" , email = "'.$_REQUEST['femail'].'" , nascimento = "'.$_REQUEST['fnascimento'].'" , sexo = "'.$_REQUEST['fsexo'].'" , fone = "'.$_REQUEST['ffone'].'"
                		 where codigo = '.$_REQUEST['fcodigo'];
			mysqli_query($link, $sql );
    		die("Alteração processada com sucesso.");
            
            } else {

			if ( ! isset($_REQUEST['codigo']) ) {
              die("Pessoa não identicada.");
            }
	
        }

?>

	<h2>Alterar Cadastro de Pessoas</h2>
		
<form action="alterar.php" method="post">
    <p> <label for="fcodigo">Codigo: </label> <input type="number" id="fcodigo" name="fcodigo" value="<?php echo $_REQUEST['codigo']; ?>" readonly></p>
	<p> <label for="fnome">Nome: </label> <input type="text" id="fnome" name="fnome" value="<?php echo $_REQUEST['nome']; ?>"></p>
	<p> <label for="femail">E-mail: </label> <input type="email" id="femail" name="femail" value="<?php echo $_REQUEST['email']; ?>"></p>
	<p> <label for="fnascimento">Nascimento: </label> <input type="date" id="fnascimento" name="fnascimento" value="<?php echo $_REQUEST['nascimento']; ?>"></p>
	<p> <label for="ffone">Fone: </label> <input type="text" id="ffone" name="ffone" value="<?php echo $_REQUEST['fone']; ?>"></p>
	<p>
      <?php
      $sexoM ='';
      $sexoF = '';
      if ( $_REQUEST['sexo'] == 'm') {
       $sexoM = ' selected ';
      }
         if ( $_REQUEST['sexo'] == 'f') {
       $sexoF = ' selected ';
         }
      ?>
      
		<label for="fsexo">Sexo:</label>
		<select id="fsexo" name="fsexo">
			<option value="f" <?php echo $sexoF;?>>Feminino</option>
			<option value="m" <?php echo $sexoM;?>>Masculino</option>
		</select>
	</p>	
	<input type="submit" value="Alterar">
</form>
</body>
</html>