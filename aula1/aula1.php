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
    /* include = faz a inclusão do arquivo toda vez q a pag é carregada quando da erro ele gera um WARNING
    requiere = faz a inclusão apenas uma vez (ecnomiza tempo) ai da erro o sistema para fatal_error */
    include "./class/Usuario.class.php";
    //declarando um novo objeto 
    $usuario1 = new Usuario();
    $usuario2 = new Usuario();

    echo $usuario1 -> getUsuario("Manuela","manuelass.dev@gmail.com","21981985790");

    ?>

</body>
</html>