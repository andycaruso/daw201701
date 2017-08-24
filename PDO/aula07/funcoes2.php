<?php
function conectaPDO(){
  try{
    $aux = 'mysql:host=localhost;dbname=pw1;charset=utf8mb4';
    //$link será a conexao para o BD
                   //$aux = string de conexão
               //user do BD
                      //senha do user do BD
    $link = new PDO($aux,'root','',
                array(
                    PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => false
                )
            );
    //echo("Conexão realizada com sucesso!<br>");
    }
catch(PDOException $ex){
    echo("Deu erro! <br>". $ex->getMessage());

}

  return($link);
}

//////////////////////////////
//E1: Query SQL
//E2: vetor com os campos para o bindParam
//E3: vetor com o(s) campos para o where
//E4: vetor com os campo(s) para o order by
//S: objeto de erro do pdo
function retornaVetorConsulta($sql,$vCampos,$vWhere,$vOrder){
  $link = conectaPDO();
  try {
    echo "<pre>$sql";
    print_r($vCampos);
    $declaracao = $link->prepare($sql);
    if(is_array($vCampos)){
        foreach ($vCampos as $k => $v) {
          $declaracao->bindParam($k,$v);
        }
    }
     $declaracao->execute();
    return($declaracao);
  }
  catch (PDOException $e) {
    return($e);
  }

}
?>
