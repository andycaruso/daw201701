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
	 
	?>
	<label for="idanosemstre"></label>
	<select name="anosemestre" id="idanosemstre">
		<option value="20171">2017/01</option>
		<option value="20172">2017/02</option>
	</select>
	<br>
	<input type="submit" name="acao" value="enviar">
</form>