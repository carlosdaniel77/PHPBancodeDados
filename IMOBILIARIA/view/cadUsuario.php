<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form name="cadUsuario" id="cadUsuario" action="" method="post">
        <label>Login:</label> 
        <input type="text" name="login" id="login"><br>
        <label>Senha:</label>  
        <input type="password" name="senha1" id="senha1"><br>
        <label>Confirmação da Senha:</label>  
        <input type="password" name="senha2" id="senha2"><br>
        <label>Permissão:</label>
        <select name="permissao" id="permissao">
            <option value="0">**SELECIONE**</option>
            <option value="A">Administrador</option>
            <option value="C">Comum</option>
        </select><br><br>
        <input type="submit" name="btnSalvar" id="btnSalvar">    
    </form>
</body>

<?php

//Verifica se o botão submit foi acionado
if(isset($_POST['btnSalvar'])){

    //importa o UsuarioController.php
    require_once '../controller/UsuarioController.php';
    //Chama uma função PHP que permite informar a classe e o Método que será acionado
    call_user_func(array('UsuarioController','salvar'));
}

?>

</html>