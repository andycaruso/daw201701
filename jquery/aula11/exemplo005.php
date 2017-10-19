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
			height:500px;
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
			overflow:auto;
		}
		
	</style>
</head>
<body>
<h1>Adicionando linhas de texto à uma DIV dinamicamente</h1>
	<form id="form1" method="post">
		Criar pedido<br>
		<input type="text" id="cliente" name="cliente">
		<input type="text" id="prato" name="prato">
		<input type="button" id="btn1" value="enviar">
		</form>
	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			Pedidos
		</div>
		<div class="painel_corpo">
		
		</div>
	</div>
<script>
$(function(){
	$('#btn1').click(function() {
		//pega os valores das caixas 
		//cliente e prato e guarda nas variaveis
		//respectivas
		var cliente = $('#cliente').val();
		var prato = $('#prato').val();

		//append() adiciona um novo elemento HTML
		// ao(s) objeto(s) de classe .painel_corpo
		$('.painel_corpo').append(cliente + ' : ' + prato + '<br>');

		 //esvazia as caixas de input 
		 $('#cliente').val('');
		 $('#prato').val('');

	});
	

});//fim $(function)

</script>
<hr><a href="exemplo004.php">Exemplo 4</a>-<a href="exemplo006.php">Exemplo 6</a>
</body>
</html>