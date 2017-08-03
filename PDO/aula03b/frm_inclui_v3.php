<form method="get">
	<label for="idNome">Nome:</label>
	<input type="text" name="nome" id="idNome" value="<?=$nome?>">
	<br>
	<label for="idNascimento">Nascimento:</label>
	<input type="text" name="nascimento" id="idNascimento" value="<?=$nascimento?>"><br>
	<label for="idSexo">Sexo:</label>
	<?php       //name tabela campo1  campo2   valor
	geraSelect("sexo","sexo","cdsexo","nmsexo",$sexo);
	?>
	<br>
	<label for="idcidade">Cidade:</label>
	<?php          //name    tabela   campo1     campo2    valor
	geraSelect("cidade","cidade","cdcidade","nmcidade",$cdcidadepessoa);
	?>
	<br>
	<input type="submit" name="acao" value="enviar">
</form>