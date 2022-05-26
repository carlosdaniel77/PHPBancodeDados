<?php
    //importa o ImovelController.php
    require_once '../controller/ImovelController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro do Imóvel</title>
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
        <form name="cadImovel" id="cadImovel" action="" method="post">
                <label>Descrição:</label> 
                <input type="text" name="descricao" id="descricao"><br>
                <label>Foto:</label>  
                <input type="text" name="foto" id="foto"><br>
                <label>Valor:</label>  
                <input type="text" name="valor" id="valor"><br>
                <label>Tipo:</label>
                <input type="text" name="tipo" id="tipo"><br>

                <button name="btnReset" id="btnReset" value="Reset">Reset</button>  
                <button name="btnSalvar" id="btnSalvar" value="Enviar">Enviar</button>    
            </form>
    </div>
    
</body>

<?php

//Verifica se o botão submit foi acionado
if(isset($_POST['btnSalvar'])){

    //Chama uma função PHP que permite informar a classe e o Método que será acionado
    call_user_func(array('ImovelController','salvar'));
}

?>

</html>