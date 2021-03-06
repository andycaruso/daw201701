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
			height:950px;
			padding:2px;
			overflow:auto;
		}
		
	</style>
</head>
<body>
<h1>Adicionando linhas de texto à uma DIV dinamicamente e <br>
recuperando e gravando pedidos no BD</h1>
	<form id="form1" method="post">
		Criar pedido<br>
		<input type="text" id="cliente" name="cliente">
		<input type="text" id="prato" name="prato">
		<input type="button" id="btn1" value="enviar">
	</form>
	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			Pedidos
		</div>
		<div class="painel_corpo">
		
		</div>
	</div>
<script>
$(function(){
//carrega todos os pedidos na primeira vez que a página
//é mostrada
$(".painel_corpo").load("lista_pedidos.php");

//click do botao
$("#btn1").click(function(){
//grava no banco de dados
//serialize pega todos os campos do form e transforma
//em um vetor para ser feito o post
$.post("inclui_pedido.php", $("#form1").serialize())
  .done(function(data) { //tudo certo com a requiscao 	
  	//monta o texto de cada pedido diretamente na tela
  	var texto = "" + "Cliente: " 
  	+ $("#cliente").val() 
  	+ " - Pedido: " 
  	+ $("#prato").val() 
  	+ "<br>";  	
  	//adiciona o pedido ao painel
	$(".painel_corpo").append(texto);

	//limpa as caixas de texto
	$("#cliente").val("");
	$("#prato").val("");
  })
  .fail(function(data) { //erro na requisicao
   	 $(".painel_corpo").html("erro requisicao");
 }); //fim post
}); //fim click

});//fim $(function)

</script>
<hr><a href="exemplo007.php">Exemplo 7</a>
</body>
</html>