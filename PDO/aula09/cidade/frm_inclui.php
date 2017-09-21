<style type="text/css">
	.erro { 
		background-color:red;
		color:white;
		 }
</style>
<form method="get">
<?php
	geraInput('Nome','nmcidade',$nmcidade,$erros);
	geraSelect("ufcidade","estado","cdestado","nmestado",$ufcidade,"Estado");
	?>
	<br>
	<input type="submit" name="acao" value="enviar">
</form>