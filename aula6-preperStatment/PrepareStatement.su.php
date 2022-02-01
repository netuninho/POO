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
        require("./inc/Config.inc.php");

        $conn = new Conn();
        $nomesituacao = "";
        $criadoem = "";
        $modificadoem = "";

        try{
            $cadastro = "INSERT INTO tblsituacao (nomesituacao,criadoem,modificadoem) VALUES (:nomesituacao,:criadoem,modificadoem)";
            $cadastrar = $conn -> getConn() -> prepare($cadastro);
            $cadastrar -> bindParam(':nomesituacao',$nomesituacao, PDO::PARAM_STR);
            $cadastrar -> bindParam(':criadoem',$criadoem, PDO::PARAM_STR);
            $cadastrar -> bindParam(':modificadoem',$modificadoem, PDO::PARAM_STR);

            echo "Cadastrado com Sucesso";

        } catch (Exception $e){
            echo "Mensagem ".$e -> getMessage();
        }
    
    ?>
</body>
</html>