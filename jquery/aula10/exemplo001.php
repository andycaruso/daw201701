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

	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			Painel 1
		</div>
		<div class="painel_corpo">
			Texto 1
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

	<script>
		//função padrão do jQuery que será chamada
		//após todo o documento ter sido carregado
		$(function(){
			//javascript puro!
			alert("olá");
			//seleciona um elemento da página pelo id (#)
			//chama o método hide() que esconde o elemento
			//passa o parametro 1000 (1000 mili segundos)
			//que fará que a animação de esconder leve 1 segundo
			$('#pn1').hide(1000);
			//chama o método show() que mostra o elemento que foi escondido 
			//$('#pn1').show(1000);	

			//slideDown() mostra o elemento com animação "cortina"
			$('#pn1').slideDown('300');	

			//slideUp() esconde o elemento com animação "cortina"
		//	$('#pn1').slideUp('1300');	

			//fadeOut esconde o elemento com efeito "desaparecer"
			$('#pn1').fadeOut('300');	

			//fadeOut mostra o elemento com efeito "reaparecer"
			$('#pn1').fadeIn('300');


		});


	</script>



</body>
</html>