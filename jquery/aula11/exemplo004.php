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
		
		.atencao {
			color:red;
			font-weight:bold;
		}

	</style>
</head>
<body>
<h1>Adicionando e removendo classes dinamicamente</h1>
	<input type="button" id="btn1" value="adicionar"><br>
	<input type="button" id="btn2" value="remover"><br>
	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			Pedidos
		</div>
		<div class="painel_corpo">
			Texto 
		</div>
	</div>
<script>
$(function(){
	$('#btn1').click(function() {
		//adiciona a classe .atencao
		//a todo objeto que for da classe
		//.painel_corpo
		$('.painel_corpo').addClass('atencao');
	});

$('#btn2').click(function() {
		//remove a classe .atencao
		//a todo objeto que for da classe
		//.painel_corpo
		$('.painel_corpo').removeClass('atencao');
});

});//fim $(function)

</script>
<hr><a href="exemplo003.php">Exemplo 3</a>-<a href="exemplo005.php">Exemplo 5</a>
</body>
</html>