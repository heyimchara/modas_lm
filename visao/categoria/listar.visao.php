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
          <h2>Listar Categorias</h2>
        
   <table class="table">
            <thead>
                <tr>
                    <th>COD_CATEGORIA</th>
                    <th>NOME</th>
                    <th>Ver Categoria</th>
                    <th>Deletar</th>
                </tr>
            </thead>
        <?php foreach ($categorias as $categoria): ?> 
            <tr>
                <td><?=$categoria['cod_categoria']?></td>
                <td><?=$categoria['nome']?></td>
                <td><a href="./categoria/ver/<?=$categoria['cod_categoria']?>">Ver</a></td>
                <td><a href="./categoria/deletar/<?=$categoria['cod_categoria']?>">Deletar</a></td>
                <td><a href="./categoria/editar/<?=$categoria['cod_categoria']?>">Editar</a></td>
            </tr>
        <?php endforeach; ?>
   </table> 
        <br>
        <a href="./categoria/adicionarCategoria" class="btn btn-primary">Nova Categoria</a>
    </body>
</html>
