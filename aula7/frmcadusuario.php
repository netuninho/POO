<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
</head>
<body>
    <?php
        require ('./inc/Config.inc.php');

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($dados['SendCadUsuario'])):
        unset($dados['SendCadUsuario']);

        $cadUsuario = new Usuario();
        $cadUsuario -> exeCreate($dados);

            if(!$cadUsuario -> getResultado()):
                echo $cadUsuario -> getMsg();
            else:
                echo $cadUsuario->getMsg();
            endif;

        endif;
    ?>
    <h1>Cadastro Usuário</h1>
    <br>

    <form name="Cadusuario" action="" method="post" enctype="multipart/form-data">

        <label>Nome</label>
        <input type="text" name="nome" placeholder="Digite um nome" required>
        <br>
        <label>Email</label>
        <input type="email" name="email" placeholder="Email Válido" required>
        <br>
        <label>Senha</label>
        <input type="password" name="senha" placeholder="Senha" required>
        <br>
        <input type="submit" value="Cadastrar" name="SendCadUsuario">
        <br>

    </form>

</body>
</html>