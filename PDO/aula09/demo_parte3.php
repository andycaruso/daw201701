<?php
session_start();
//mexer nos dados da sessao
$_SESSION['cor'] = "azul";
$_SESSION['fruta'] = "Banana";
//mostrar dados da sessao para debug:
echo ("<pre>");
print_r($_SESSION);

?>
<a href="demo_destroi.php">Destruir a sessão !</a><br>