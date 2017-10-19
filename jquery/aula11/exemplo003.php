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
		Texto:<input type="text" id="texto"><br>
		Comprimento do texto:<input type="text" id="comprimento"><br>
		Comprimento do texto sem espaços nas extremidades:<input type="text" id="comprimento2"><hr>
		
		<input type="button" id="btn1" value="testar">
	
<script>
$(function(){
	$('#btn1').click(function() {
		//guarda na variavel t o valor
		//da caixa com id=texto
		var t = $('#texto').val();
		
		//convert t em string
		t = t.toString();

		//guarda na variavel c o comprimento
		//da string t que é obtido através
		//da propriedade length
		var c = t.length;

		//altera o valor da caixa com
		//id=comprimento através do método
		//val(valor)
		$('#comprimento').val(c);

		//retira espaços do início e fim da string
		//t através do método trim()
		t = t.trim();

		//pega novamente o comprimentp de
		//t (agora sem espaços no inicio e fim)
		//e guarda novamente em c
 		c = t.length;

 		//altera o valor da caixa com
		//id=comprimento através do método
		//val(valor)
 		$('#comprimento2').val(c);

	});
	

});//fim $(function)

</script>
<hr><a href="exemplo002.php">Exemplo 2</a>-<a href="exemplo004.php">Exemplo 4</a>
</body>
</html>