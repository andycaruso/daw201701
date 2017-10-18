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
	<form id="form1" method="post">
	Cadastrar novo Estado:<input type="text" name="nmestado" size="2" maxlength="2"> <br>
	<input type="button" id="btn1" value="enviar">
	</form>
	<div class="painel" id="pn1">
		<div class="painel_cabeca">
			Estados:
		</div>
		<div class="painel_corpo">
		
		</div>
	</div>
<script>
$(function(){
	
	$("#btn1").click(function(){
		//serialize pega todos os campos do form e transforma
		//em um vetor para ser feito o post
		$.post( "inclui_estado.php", $("#form1").serialize())
		  .done(function(data) { //tudo certo com a requiscao 
	   		 $(".painel_corpo").html(data);
		  })
		  .fail(function(data) { //erro na requisicao
		   	 $(".painel_corpo").html("erro requisicao");
		  }); //fim post
  	}); //fim click

});//fim $(function)

</script>

</body>
</html>