<?php
    //importa o UsuarioController.php
    require_once '../controller/UsuarioController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Usuários</h1>
    <hr>
    <div>
        <table style="top:40px;">
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Permissão</th>
                    <th><a href="cadUsuario"></a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $usuarios = call_user_func(array('UsuarioController', 'listar'));
                    //Verifica se houve algum retorno
                    if(isset($usuarios)){
                        foreach($usuarios as $usuario){
                            ?> 
                            <tr>
                                <!-- Como o retorno é um objeto, devemos chamar os gets para mostrar o resultado -->
                                <td><?php echo $usuario->getLogin();?></td>
                                <td><?php echo $usuario->getPermissao();?></td>
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