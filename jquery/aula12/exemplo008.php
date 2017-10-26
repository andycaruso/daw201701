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
		
		.minhaLista {
			list-style-type: none;
			margin:0;
			padding:0;
		}
	</style>
</head>
<body>
<h1>Carregando cidades de um estado via AJAX</h1>
	<form id="form1" method="post">
	
	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			Cidades e Estados
		</div>
		<div class="painel_corpo">
			<select id="ufcidade"></select>
			<select id="cidades"></select>
		</div>
	</div>

	</form>
<script>



//jquery chamado quando a página termina de carregar
$(function(){
	
//////////////////////////////////
//função para carregamento dos dados
function carregaCidades(){
	
	var estado = $('#ufcidade').val();
	//faz uma requisção GET ao PHP passando a variaverl nomeCliente
	$.get("lista_cidades_estado.php",{ufcidade:estado})
		  .done(function(data) { //tudo certo com a requiscao 
		  	//mostra dos dados retornados pelo PHP 
		  	//no painel
	   		$("#cidades").html(data);
		  })
		  .fail(function(data) { //erro na requisicao
		   	 $(".painel_corpo").html("erro requisicao");
		  }); //fim post
}
//////////////////////////////////

	//carrega os estados na div
	$("#ufcidade").load("lista_estados.php");		

  	//change do select
	$("#ufcidade").change(function(){
		  //chama a função 
		  carregaCidades();
  	}); //fim click

	
});//fim $(function)

</script>
<hr><a href="exemplo007.php">Exemplo 7</a> -
 <a href="exemplo009.php">Exemplo 9</a>
</body>
</html>