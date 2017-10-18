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
	width:250px;
	height:200px;
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

<h1>Quando o botão for clicado, troque o título do painel pelo texto digitado na caixa</h1>
Título do painel:<input type="text" id="titulo">
<input type="button" id="botao1" value="Trocar título painel"><hr>

<div class="painel" id="painel1">
	<div class="painel_cabeca">
		Título do painel 
	</div>
	<div class="painel_corpo">
		carregar aqui
	</div>
</div>

<script>
	//resposta aqui

</script>
</body>
</html>