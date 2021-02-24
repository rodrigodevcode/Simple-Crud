<?php
	include "menu.php";
?>
		
		<h2>Cadastro de Pessoas</h2>
		
<form action="pcad.php" method="post">
	<p> <label for="fnome">Nome: </label> <input type="text" id="fnome" name="fnome"></p>
	<p> <label for="femail">E-mail: </label> <input type="email" id="femail" name="femail"></p>
	<p> <label for="fnascimento">Nascimento: </label> <input type="date" id="fnascimento" name="fnascimento"></p>
	<p> <label for="ffone">Fone: </label> <input type="text" id="ffone" name="ffone"></p>
	<p>
		<label for="fsexo">Sexo:</label>
		<select id="fsexo" name="fsexo">
			<option value="f">Feminino</option>
			<option value="m">Masculino</option>
		</select>
	</p>	
	<input type="submit" value="Cadastrar">
		</form>
		</body>
		</html>


