<style type="text/css">
	.erro { 
		background-color:red;
		color:white;
		 }
</style>
<style type="text/css">
	.erro { 
		background-color:red;
		color:white;
		 }
</style>
<form method="get">
<?php
	      //name, tabela, campo1,    campo2,    valor,label
geraSelect("cdsituacao","situacao","cdsituacao","nmsituacao",$cdsituacao,"Situação:");  
	?>

	<br>
	<input type="submit" name="acao" value="enviar">
</form>