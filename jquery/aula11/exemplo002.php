<!DOCTYPE html>
<html>
<head>
	<title>Introdução ao jQuery</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<style type="text/css">
		div {
			font-family:sans-serif;	
			display:inline-block;
			box-sizing:border-box;
		}
		.painel {
			border:1px solid gray;
			width:300px;
			height:200px;
			background-color:white;
		
		}
		.painel_cabeca {
			width:100%;
			height:50px;
			background-color:teal;	
			display:inline-block;
			color:white;	
			padding:2px;
		}

		.painel_corpo {
			width:100%;
			height:150px;
			padding:2px;
		}

	</style>
</head>
<body>
<h1>Usando o evento change</h1>
	<input type="text" id="cor1">
	<button id="btn1">Muda a largura da borda do painel 1</button> <br>
	<input type="text" id="cor2">
	<button id="btn2">Muda a cor da borda do painel 1</button> <br>
	Tipo de borda:
	<select id="tipoborda">
		<option value="none">sem borda</option>
		<option value="solid">sólida</option>
		<option value="dotted">pontilhada</option>
		<option value="dashed">tracejada</option>
		<option value="groove">sulcada</option>
	</select>
	<hr>
	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			Painel 1
		</div>
		<div class="painel_corpo">
			Texto 1
		</div>
	</div>
	
<script>
$(function(){
		

});
</script>
<hr><a href="exemplo001.php">Exemplo 1</a>-<a href="exemplo003.php">Exemplo 3</a>
</body>
</html>