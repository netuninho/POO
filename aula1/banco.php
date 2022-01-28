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

    include "./class/Cliente.class.php";

    //criar novo cliente - criar objeto
    $c1 = new Cliente();
    $c2 = new Cliente();

    $c1 -> setCliente("0001","PF","999.999.999-99",2000);
    $c2 -> setCliente("0002","PJ","888.888.888-88",12000);

    $c1 -> exibirDadosClientes();
    $c2 -> exibirDadosClientes();

    $c1 -> depositar(5000);
    $c1 -> exibirDadosClientes();

    $c2 -> sacar(20000);
    $c2 -> exibirDadosClientes();

    ?>  
</body>
</html>