<!DOCTYPE html>
<html>
<head>
	<title>Introdução ao jQuery</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<style type="text/css">
		html,body {
			margin:0;
			padding:0;
			overflow:hidden;
		}
		div {
			font-family:sans-serif;	
			display:inline-block;
			box-sizing:border-box;
		}
		.painel {
			border:1px solid gray;
			width:20vw;
			height:100vh;
			background-color:white;
			float:left;
			
		
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
			height:950px;
			padding:2px;
			overflow:auto;
		}

		.painel_principal {
			width:40vw;
			height:85vh;
			padding:2px;
			overflow:auto;
			float:left;
			border:1px solid gray;
		}
		.painel_form {
			width:40vw;
			height:85vh;
			padding:2px;
			overflow:auto;
			float:left;
			border:1px solid gray;
		}
		.painel_mensagem {
			width:80vw;
			height:15vh;
			padding:2px;
			overflow:auto;
			float:left;
			border:1px solid gray;
			background-color:gray;
			color:white;
		}
		
		.minhaLista {
			list-style-type: none;
			margin:0;
			padding:0;
		}
	</style>
</head>
<body>
<div class="painel" id="pn1">
	<div class="painel_cabeca">
		<h2>Pessoas</h2>
	</div>
	<div class="painel_corpo">
		<ul class="minhaLista">
			<li><button id="btpessoa">Listar pessoas</button></li>
			<li><button id="btIncPessoa">Incluir pessoas</button></li>
		</ul>
		<h2>Matrículas</h2>
		<ul>
			<li><a href="matricula/inclui.php">Incluir</a></li>
			<li><a href="matricula/consulta.php">Consultar</a></li>
		</ul>
		<h2>Cidades</h2>
		<ul>
			<li><a href="cidade/inclui.php">Incluir</a></li>
			<li><a href="cidade/consulta.php">Consultar</a></li>
		</ul>
	</div>
</div>
	<div class="painel_mensagem">mensagem
	</div>
	<div class="painel_principal">
	</div>
	<div class="painel_form">
	</div>
<script>


//jquery chamado quando a página termina de carregar
$(function(){
	
	//lista pessoas
	$("#btpessoa").click(function() {
		$(".painel_principal").load("pessoa/consulta.php");
	});
	
	//inclui pessoas
	$("#btIncPessoa").click(function() {
		$(".painel_principal").load("pessoa/frm_inclui.php");
	});

	
	
});//fim $(function)
</script>

</body>
</html>