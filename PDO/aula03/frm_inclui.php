<form method="post">
	<label for="idNome">Nome:</label>
	<input type="text" name="nome" id="idNome"><br>
	<label for="idNascimento">Nascimento:</label>
	<input type="text" name="nascimento" id="idNascimento"><br>
	<label for="idSexo">Sexo:</label>
	<select name="sexo" id="idSexo">
		<option value="">--Escolha--</option>
		<option value="M">Masculino</option>
		<option value="F">Feminino</option>
	</select><br>
	<label for="idcidade">Cidade:</label>
	<?php          //name    tabela   campo1     campo2
		geraSelect("cidade","cidade","cdcidade","nmcidade");
	?>
	<br>
	<input type="submit" name="acao" value="enviar">
</form>