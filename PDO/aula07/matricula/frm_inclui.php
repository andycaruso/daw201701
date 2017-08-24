<style type="text/css">
	.erro { 
		background-color:red;
		color:white;
		 }
</style>
<form method="get">
<?php
	      //name, tabela, campo1,    campo2,    valor,label
geraSelect("cdpessoa","pessoa","cdpessoa","nome",$cdpessoa,"Pessoa:");    

geraSelect("cdcurso","curso","cdcurso","nmcurso",$cdcurso,"Curso:");    
geraAnoSemetre("anosemestre",2017,2017,"Ano/Semestre:"); 
	?>

	<br>
	<input type="submit" name="acao" value="enviar">
</form>