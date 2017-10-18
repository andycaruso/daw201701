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
	
	<input type="button" id="btn1" value="botão 1">
	<input type="button" id="btn2" value="botão 2">
	<input type="button" id="btn3" value="botão 3"><br><br>
	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			Painel 1
		</div>
		<div class="painel_corpo">
			Texto
		</div>
	</div>
	<div class="painel" id="pn2">
		<div class="painel_cabeca">
			Painel 2
		</div>
		<div class="painel_corpo">
			Texto 2
		</div>
	</div>
	<div class="painel" id="pn3">
		<div class="painel_cabeca">
			Painel 3
		</div>
		<div class="painel_corpo">
			Texto 3
		</div>
	</div>

	<script>
		//função padrão do jQuery que será chamada
		//após todo o documento ter sido carregado
		$(function(){
			//modificando CSS via jQuery
			$("#pn1 .painel_cabeca").css({'background-color':'red'});
			$("#pn2").css({'background-color':'blue'});

			//modificando o conteudo entre tag e /tag
			$("#pn3 .painel_corpo").html('novo texto');
		
		});


	</script>



</body>
</html>