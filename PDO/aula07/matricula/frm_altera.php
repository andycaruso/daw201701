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
geraSelect("situacao","situacao","cdsituacao","nmsituacao",$situacao,"Situação:");  
//campo oculto com o código da matricula
geraTag("input",0,array("name"=>"COD",
                               "type"=>"hidden",
                               "value"=>"$COD"));
	?>

	<br>
	<input type="submit" name="acao" value="Salvar">
</form>