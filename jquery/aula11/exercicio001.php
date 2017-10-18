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
	width:150px;
	height:100px;
	background-color:white;
	display:inline-block;
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

#painel2 {
	display:none;
}

</style>
</head>
<body>

<input type="button" id="botao1" value="Esconde #painel1">
<input type="button" id="botao2" value="Mostra #painel1">
<input type="button" id="botao3" value="Mostra #painel2">
<input type="button" id="botao4" value="Esconde #painel2"><hr>

<div class="painel" id="painel1">
	<div class="painel_cabeca">
		Painel 1
	</div>
	<div class="painel_corpo">
		Texto
	</div>
</div>
<div class="painel" id="painel2">
	<div class="painel_cabeca">
		Painel 2
	</div>
	<div class="painel_corpo">
		Texto
	</div>
</div>



<script>

$(function(){

	

});
</script>
</body>
</html>