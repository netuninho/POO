<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        require('./inc/Config.inc.php');

        $cliente = new Cliente("Rua A","Beija Flor");
        echo $cliente -> verEndereco();
        echo "<hr>";
        
        $clientePF = new ClientePessoaFisica ("Rua Almirante","Bandeirantes","111.222.333.45","Manu");
        echo $clientePF -> verEnderecoPessoaFisica();
        echo "<hr>";

    
    ?>

</body>
</html>