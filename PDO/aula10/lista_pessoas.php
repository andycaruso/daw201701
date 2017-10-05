<?php
require_once("funcoes.php");

//consulta via PDO
    
    $sql = "SELECT cdpessoa, nome, nascimento FROM pessoa";
    $declaracao = $link->prepare($sql);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn('nascimento', $nascimento);
    $declaracao->bindColumn('cdpessoa', $cdpessoa);
    $declaracao->bindColumn('nome', $nome); 

    //<table border='1'>
    geraTag("table",0,array("border"=>"1"));
    if ($declaracao->rowCount() > 0) {
      while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
       geraTag("form",0,array("method"=>"GET")); 
       geraTag("tr",0);
       geraTag("td",0);
         geraTag("input",0,array("name"=>"COD",
                                 "type"=>"text",
                                 "value"=>"$cdpessoa",
                                 "size"=>"2",
                                 "readonly"=>"readonly"));
       geraTag("td",1);
       geraTag("td",0);
         echo ($nome);
       geraTag("td",1);
       geraTag("td",0);
         echo (converteDataHumano($nascimento));
       geraTag("td",1);
       geraTag("td",1);
       
       geraTag("tr",1);
       geraTag("form",1);
      }
      //</table>
      geraTag("table",1);
     
    }
    else {
      echo("nenhum registro localizado");
    }

?>