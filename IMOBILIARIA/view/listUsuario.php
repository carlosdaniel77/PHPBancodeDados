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
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, Navy, Black); 
        }
        .cadastro{
            background-color:rgba(0, 0, 0, 0.8);
            position:absolute;
            top:60%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 60px;
            border-radius: 25px;
            color: 	#E0FFFF;
        }

        .titulo{
            background-color:rgba(0, 0, 0, 0.8);
            position:absolute;
            top:20%;
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
        <h1>Usuários</h1>
        <hr>
    </div>
    <div class="cadastro">
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