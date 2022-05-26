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
</head>
<body>
    <form name="cadImovel" id="cadImovel" action="" method="post">
        <label>Descrição:</label> 
        <input type="text" name="descricao" id="descricao"><br>
        <label>Foto:</label>  
        <input type="text" name="foto" id="foto"><br>
        <label>Valor:</label>  
        <input type="text" name="valor" id="valor"><br>
        <label>Tipo:</label>
        <input type="text" name="tipo" id="tipo"><br>
        <input type="submit" name="btnSalvar" id="btnSalvar">    
    </form>
</body>

<?php

//Verifica se o botão submit foi acionado
if(isset($_POST['btnSalvar'])){

    //Chama uma função PHP que permite informar a classe e o Método que será acionado
    call_user_func(array('ImovelController','salvar'));
}

?>

</html>