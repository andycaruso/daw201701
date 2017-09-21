<?php
session_start();
$_SESSION['praia'] = "Imbé";
$_SESSION['banda'] = "Iron";

//mostrar dados da sessao para debug:
echo ("<pre>");
print_r($_SESSION);

?>
<a href="demo_parte3.php">Ir para outra página mais nova e diferente e bonita</a><br>