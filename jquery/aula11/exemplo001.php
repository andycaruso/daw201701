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
	<input type="text" id="cor1">
	<button id="btn1">Muda a cor barra do painel 1</button> <br>
	<input type="text" id="cor2">
	<button id="btn2">Muda a cor do título do painel 1</button> <br>
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
		
	$("#btn1").click(function(){
		//pega o valor da caixa #cor1 e guarda em c
		var c = $('#cor1').val();
		//atribui à propriedade background-color
		$("#pn1 .painel_cabeca").css({'background-color':c});	
	});

	$("#btn2").click(function(){
		//pega o valor da caixa #cor1 e guarda em c
		var c = $('#cor2').val();
		//atribui à propriedade background-color
		$("#pn1 .painel_cabeca").css({'color':c});	
	});


});
</script>

</body>
</html>