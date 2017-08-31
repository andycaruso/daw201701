<?php
////////////////////////////
//função para upload de fotografia
//E1: diretório destino
//E2: nome destino
//S: nada
function enviaFoto($diretorioDestino,$nome){
    //basename retira o caminho e retorna somente a parte do nome do arquivo
    $arquivo_fonte = basename($_FILES["fileToUpload"]["tmp_name"]);
    //----------------pega a extensão do arquivo
        //pathinfo retorna um vetor com:
        //dirname => diretório
        //extension => extensão do arquivo
        //filename => nome do arquivo
    $vetorCaminho = pathinfo(basename($_FILES["fileToUpload"]["name"]));
    $tipoArquivoImagem = $vetorCaminho['extension'];
    //-------------------------------------------
    $arquivo_destino = $diretorioDestino . $nome . "." . $tipoArquivoImagem;
    $uploadOk = 1;
    

    // testa se é uma imagem
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Arquivo é uma imagem - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "Arquivo não é uma imagem.<br>";
        $uploadOk = 0;
    }
    
    // testa se arquivo existe
   /* if (file_exists($arquivo_destino)) {
        echo "Arquivo já existe.<br>";
        $uploadOk = 0;
    }*/

    // /testa se o tamanho do arquivo não excede o máximo
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Tamanho do arquivo excede tamanho máximo permitido<br>"; 
        $uploadOk = 0;
    }
    // permite somente as extensoes jpg,png e gif
    if($tipoArquivoImagem != "jpg" && $tipoArquivoImagem != "png" && $tipoArquivoImagem != "jpeg"
    && $tipoArquivoImagem != "gif" ) {
        echo "Somente JPG, JPEG, PNG & GIF são permitidos. ($tipoArquivoImagem)<br>";
        $uploadOk = 0;
    }
    // testa se houve algum erro
    if ($uploadOk == 0) {
        echo "Erro enviando arquivo.<br>";
    // caso contrário tenta o upload
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $arquivo_destino)) {
            echo "Arquivo $arquivo_destino foi enviado.<br>";
        } else {
            echo "Houve um erro enviando o arquivo.<br>";
        }
    }
}

?>