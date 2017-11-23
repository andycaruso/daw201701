<?php
require_once("../funcoes.php");
require_once("../login.php");

$erros = array();


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
       geraTag("form",0); 
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
       /* $aux = "fotos/" . $cdpessoa . ".jpg";
        geraTag("img",0,array("src"=>$aux,
                              "width"=>"100"));
         */
       geraTag("td",1);
       geraTag("td",0);
         echo (converteDataHumano($nascimento));
       geraTag("td",1);
       geraTag("td",1);
       geraTag("td",0);
         geraTag("input",0,array("type"=>"button",
                                 "value"=>"Alterar",
                                 "title"=>"$cdpessoa",
                                 "class"=>"btAltera"));
         geraTag("input",0,array("type"=>"button",
                                 "value"=>"Excluir",
                                 "title"=>"$cdpessoa",
                                 "class"=>"btExclui"));
        
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
<script type="text/javascript">

//jquery chamado quando a página termina de carregar
$(function(){


  $(".btAltera").click(function() {
     //pega o valor do atributo title de cada botão
     //que contém o código da pessoaa ser alterada/excluída
     var c = $(this).attr("title");
     
      //carrega o formulário na div 

      $(".painel_form").load("pessoa/frm_altera.php",function(){
          //carrega os dados a serem alterados no formulario
          $.getJSON("pessoa/altera_carrega_dados.php",{COD:c},function(data){
            var items = [];
            var linha = "";
            //separa cada elemento em indice e valor
            $.each( data, function( k, v ) {
              
              $(".painel_corpo").append(linha);
            });//fim getjson
     });//fim load   
  }); //fim click

});//fim $(function)
</script>
