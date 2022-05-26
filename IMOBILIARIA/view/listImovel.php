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
</head>
<body>
    <h1>Imóveis</h1>
    <hr>
    <div>
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
                                    <a href="">Editar</a>
                                    <a href="">Excluir</a>
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