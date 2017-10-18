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
<h1>Algumas funções javascript úteis para lidar com strings</h1>
		Texto:<input type="text" id="texto" name="texto"><br>
		Comprimento do texto:<input type="text" id="comprimento"><br>
		Comprimento do texto sem espaços nas extremidades:<input type="text" id="comprimento2"><hr>
		
		<input type="button" id="btn1" value="testar">
	
<script>
$(function(){

	//click do botao
	$("#btn1").click(function(){

		//pega o valor da caixa
		var texto = $("#texto").val();
		//converte o objeto texto em um string
		texto = texto.toString();

		//guarda em comprimento o tamanho da string
		var comprimento = texto.length;

		//coloca o valor na caixa
		$("#comprimento").val(comprimento);

		//retira espacos em branco do string
		texto = texto.trim();

		//guarda em comprimento o tamanho da string
		comprimento = texto.length;

		//coloca o valor na caixa
		$("#comprimento2").val(comprimento);

  	}); //fim click

});//fim $(function)

</script>
<hr><a href="exemplo002.php">Exemplo 2</a>-<a href="exemplo004.php">Exemplo 4</a>
</body>
</html>