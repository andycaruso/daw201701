<style type="text/css">
	.erro { 
		background-color:red;
		color:white;
		 }
</style>
<form method="get">
<?php
	geraInput('Nome','nome',$nome,$erros);
	geraInput('Nascimento','nascimento',$nascimento,$erros);
	       //name tabela campo1  campo2   valor
	geraSelect("sexo","sexo","cdsexo","nmsexo",$sexo,"Sexo");        
	       //name    tabela   campo1     campo2    valor
	geraSelect("cidade","cidade","cdcidade","nmcidade",$cdcidadepessoa,"Cidade");
	?>
	<br>
	<input type="submit" name="acao" value="enviar">
</form>