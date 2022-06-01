<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, Navy, Black); 
        }
        .cadastro{
            background-color:rgba(0, 0, 0, 0.8);
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 60px;
            border-radius: 25px;
            color: #836FFF;
        }
        input{
            padding:12px;
            border-radius:5px;
            outline:none;
            font-size:20px;
        }

        button{
            background-color: dodgerblue;
            border: none;
            padding: 20px;
            width:49%;
            border-radius: 20px;
            color: white;
            font-size:20px;
        }

    </style>
</head>
<body>
    <div class="cadastro">
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
            <button name="btnReset" id="btnReset" value="Reset">Reset</button>  
            <button name="btnSalvar" id="btnSalvar" value="Enviar">Enviar</button>    
        </form>
    </div>
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