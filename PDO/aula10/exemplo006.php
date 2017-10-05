<!DOCTYPE html>
<html>
<head>
<title>Introdução ao jQuery</title>
<meta charset="utf-8">
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<style type="text/css">
div {
	font-family:sans-serif;	
	display:block;
	box-sizing:border-box;
}
.painel {
	border:1px solid gray;
	width:100px;
	height:100px;
	background-color:white;
	display:none;
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

#original {
	border:1px dotted red;
	min-width:300px;
	min-height:300px;

}
</style>
</head>
<body>

<input type="button" id="btn1" value="botão 1"><br>

<div class="painel">
	<div class="painel_cabeca">
		Painel 1
	</div>
	<div class="painel_corpo">
		Texto
	</div>
</div>
<div id="original">
	
</div>



<script>

$(function(){
//associando um evento
$("#btn1").click(function(){
	//copia lo primeiro objeto com classe
	//painel e guarda em variavel p
	var p = $(".painel").first().clone();
	//insere no objeto de id = original
	//o conteudo da variavel p
	$("#original").append(p);
	//mostra o objeto que foi inserido
	$("#original .painel").show();
});


});
</script>
</body>
</html>