<!--/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 05/01/17
 * Time: 23:15
 */-->

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>:::Add Cliente:::</title>
</head>
<body>
<blockquote>
    <h3>+ Adicionar Cliente +</h3> <br>
    <p>
    <div id="area">
        <form id="formulario" action="DAO/insert_cliente.php" method="post">
            <fieldset>
                <legend>Cadastro de Cliente</legend>
                <label>Nome:</label> <br><input type="text" name="nome" class="campo_nome"><br>
                <label>Sobrenome:</label><br> <input type="text" name="sobrenome" class="campo_sobrenome"><br>
                <label>Endereço:</label><br> <input type="text" name="endereco" class="campo_endereco"><br>
                <label>Email:</label><br> <input type="text" name="email" class="campo_email"><br>

                <input type="submit" name="Enviar" value="enviar" class="campo_enviar">
                <input type="reset" name="Limpar" value="limpar" class="campo_limpar">
                <input type="button" name="Cancelar" value="cancelar" class="campo_cancelar"
                       onclick="location.href='../index.php' ">
            </fieldset>
        </form>
    </div>
    </p>
</blockquote>

</body>
</html>