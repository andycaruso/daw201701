<form method="get">
	<label for="idNome">Nome:</label>
	<input type="text" name="nome" id="idNome" value="<?=$nome?>">
	<?php
		if(in_array('Nome', $erros)){
			echo ("!");
		}
	?>
	<br>
	<label for="idNascimento">Nascimento:</label>
	<input type="text" name="nascimento" id="idNascimento" value="<?=$nascimento?>">
	<?php
		if(in_array('Nascimento', $erros)){
			echo ("!");
		}
	?><br>
	<label for="idSexo">Sexo:</label>
	<?php       //name tabela campo1  campo2   valor
	geraSelect("sexo","sexo","cdsexo","nmsexo",$sexo);
	?>
	<?php
		if(in_array('Sexo', $erros)){
			echo ("!");
		}
	?><br>
	<label for="idcidade">Cidade:</label>
	<?php          //name    tabela   campo1     campo2    valor
	geraSelect("cidade","cidade","cdcidade","nmcidade",$cdcidadepessoa);
	?>
	<?php
		if(in_array('Cidade', $erros)){
			echo ("!");
		}
	?>
	<br>
	<input type="submit" name="acao" value="enviar">
</form>