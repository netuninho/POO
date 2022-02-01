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
    include "./class/Aluno.class.php";

    $aluno1 = new Aluno("Manuela",10);
    $aluno2 = new Aluno("Gabriel",9.8);

    echo "<pre>";
        $aluno1 -> verAluno();
    echo "</pre>";

    echo "<pre>";
        $aluno2 -> verAluno();
    echo "</pre>";
    
    ?>
</body>
</html>