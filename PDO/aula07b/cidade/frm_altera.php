<style type="text/css">
	.erro { 
		background-color:red;
		color:white;
		 }
</style>
<form method="get">
<?php
	//$COD = $_REQUEST['COD'];
	//geraInput('Codigo da cidade','COD',$cdcidade,$erros);
	geraInput('Nome da cidade','nmcidade',$nmcidade,$erros);
	geraSelect("estado","estado","cdestado","nmestado",$ufcidade,"Estado");  

		geraTag("input", 0, array("name" => "COD",
									"type" => "hidden",
									"value" => "$COD"));      

	?>
	<br>
	<input type="submit" name="acao" value="Salvar">
</form>