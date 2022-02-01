<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php

        require './inc/incluir.php';

            $aluno1 = new Aluno('joseph','3003');
            echo $aluno1->listarAluno();

            $aluno2 = new Pagamento('jhow','3003','$ 20000','Pago');
            echo $aluno2->status();

    ?>    
</body>
</html>