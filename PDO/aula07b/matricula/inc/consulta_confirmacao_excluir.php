<?php
echo ("Tem certeza que deseja excluir a Matrícula de código = $COD \n");
       geraTag("form",0,array("method"=>"GET")); 
       geraTag("input",0,array("name"=>"acao",
                               "type"=>"submit",
                               "value"=>"Sim"));
       geraTag("input",0,array("type"=>"submit",
                               "value"=>"Não"));
       geraTag("input",0,array("name"=>"COD",
                               "type"=>"hidden",
                               "value"=>"$COD"));
        geraTag("form",1);
?>