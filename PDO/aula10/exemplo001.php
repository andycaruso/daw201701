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

	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			Painel fofinho
		</div>
		<div class="painel_corpo">
			O fim de semana se aproxima!
		</div>
	</div>
	

	<script>
		//esta funçao padrão do jQuery
		//será executada automaticamente
		//quando toda a página terminar
		//de ser carregada
		$(function(){

			alert('oi');
			//$('#pn1').hide(500);
			//$('#pn1').show(500);
			//EFEITOS DE CORTINA
			$('#pn1').slideUp(1000);
			$('#pn1').slideDown(1000);

			//Efeitos de fade
			$('#pn1').fadeOut(1000);
			$('#pn1').fadeIn(1000);
		});


	</script>



</body>
</html>