<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require "./inc/Config.inc.php";

$conn = new Conn();

$idsituacao = "1";

try{
    $cadastro = "DELETE FROM tblsituacao WHERE idsituacao=:idsituacao";
    $cadastrar = $conn->getConn()->prepare($cadastro);
    $cadastrar->bindParam(':idsituacao',$idsituacao, PDO::PARAM_STR);
    $cadastrar->execute();

    if($cadastrar->rowCount()):
        echo "Deletado com sucesso";

    endif;
}

catch(PDOException $e){
    echo "Mensagem: ". $e->getMessage();
}

?>
    
</body>
</html>