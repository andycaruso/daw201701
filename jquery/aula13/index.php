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
			height:99vh;
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
			width:80vw;
			height:99vh;
			padding:2px;
			overflow:auto;
			float:left;
			border:1px solid gray;
		}
		
		.minhaLista {
			list-style-type: none;
			margin:0;
			padding:0;
		}
	</style>
</head>
<bodu>
	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			<h2>Pessoas</h2>
		</div>
		<div class="painel_corpo">
			<ul>
				<li><a href="pessoa/inclui.php">Incluir</a></li>
				<li><a href="pessoa/consulta.php">Consultar</a></li>
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
	<div class="painel_principal">
	</div>
<script>


//////////////////////////////////
//função para carregamento dos dados
function carregaDados(){
	//guarda o valor da caixa cliente na variavel nomeCliente
	var nomeCliente = $("#cliente").val();
	//faz uma requisção GET ao PHP passando a variaverl nomeCliente
	$.get("lista_pedidos_com_filtro.php",{cliente:nomeCliente})
		  .done(function(data) { //tudo certo com a requiscao 
		  	//mostra dos dados retornados pelo PHP 
		  	//no painel
	   		$(".painel_corpo").html(data);
		  })
		  .fail(function(data) { //erro na requisicao
		   	 $(".painel_corpo").html("erro requisicao");
		  }); //fim post
}
//////////////////////////////////


//jquery chamado quando a página termina de carregar
$(function(){
	
	
	
	
});//fim $(function)
</script>

</body>
</html>