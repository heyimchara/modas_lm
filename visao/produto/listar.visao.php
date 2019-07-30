<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Produtos</h2>
       
   <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ver Detalhes</th>
                    <th>Deletar Produto</th>
                </tr>
            </thead>
        <?php foreach ($produtos as $produto): ?> 
            <tr>
               
                <td><?=$produto['nome']?></td>
                <td><a href="./produto/ver/<?=$produto['cod_produto']?>">Ver</a></td>
                <td><a href="./produto/deletar/<?=$produto['cod_produto']?>">Deletar</a></td>
                <td><a href="./produto/editar/<?=$produto['cod_produto']?>">Editar</a></td>
     </tr>
        <?php endforeach; ?>
   </table> 
        <br>
        <a href="./produto/adicionar" class="btn btn-primary">Novo Produto</a>       
        
    </body>
</html>
