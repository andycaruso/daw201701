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
geraAnoSemetre("anosemestre",2017,2017,"Ano/Semestre:",$anosemestre); 
	?>

	<br>
	<input type="submit" name="acao" value="enviar">
</form>