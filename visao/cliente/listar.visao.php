<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Clientes</h2>
        
   <table class="table">
            <thead>
                <tr>
                    <th>COD_CLIENTE</th>
                    <th>NOME</th>
                    <th>Ver Detalhes</th>
                    <th>Deletar</th>
                </tr>
            </thead>
        <?php foreach ($clientes as $cliente): ?> 
            <tr>
                <td><?=$cliente['cod_cliente']?></td>
                <td><?=$cliente['nome']?></td>
                <td><a href="./cliente/ver/<?=$cliente['cod_cliente']?>">Ver</a></td>
                 <td><a href="./cliente/deletar/<?=$cliente['cod_cliente']?>">Deletar</a></td>
                 <td><a href="./cliente/editar/<?=$cliente['cod_cliente']?>">Editar</a></td>
                
            </tr>
        <?php endforeach; ?>
   </table> 
        <br>
        <a href="./cliente/cadastro" class="btn btn-primary">Novo Cliente</a>       
        
    </body>
</html>
