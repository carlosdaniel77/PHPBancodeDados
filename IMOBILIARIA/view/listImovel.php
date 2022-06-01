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
    <title>Lista de Imóveis</title>
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
            color: 	#E0FFFF;
        }

        .titulo{
            background-color:rgba(0, 0, 0, 0.8);
            position:absolute;
            top:28%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 30px;
            color: 	#F0FFFF;
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
            padding: 15px;
            left:50%;
            width:45%;
            border-radius: 20px;
            color: white;
            font-size:18px;
        }

        a:link {
            color: #00F;
            background-color: dodgerblue;
        }

        a:hover {
            color: 	#48D1CC;
            background-color: #E0FFFF;
        }   

    </style>
</head>
<body>
    <div class="titulo">
        <h1>Imóveis</h1>
        <hr>
    </div>
    <div class="cadastro">
        <table style="top:40px;">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Tipo</th>
                    <th><a href="cadImovel"></a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $imoveis = call_user_func(array('ImovelController', 'listar'));
                    //Verifica se houve algum retorno
                    if(isset($imoveis)){
                        foreach($imoveis as $imovel){
                            ?> 
                            <tr>
                                <!-- Como o retorno é um objeto, devemos chamar os gets para mostrar o resultado -->
                                <td><?php echo $imovel->getDescricao();?></td>
                                <td><?php echo $imovel->getFoto();?></td>
                                <td><?php echo $imovel->getValor();?></td>
                                <td><?php echo $imovel->getTipo();?></td>
                                <td>
                                    <button><a href="">Editar</a></button>
                                    <button><a href="">Excluir</a></button>
                                </td>
                            </tr>
                            <?php                
                        }
                    }else{
                        ?>
                        <tr>
                            <td colspan="3">Nenhum registro cadastrado</td>
                        </tr>
                        <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>