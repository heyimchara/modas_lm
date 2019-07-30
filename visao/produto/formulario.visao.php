<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Cadastrar Produto</h2>
        <form action="" method="POST">
            Nome: <input type="text" name="nome" value="<?=@$produto['nome']?>"><br><br>
            Descricao: <input type="text" name="descricao" value="<?=@$produto['descricao']?>"><br><br>
            Preço: <input type="text" name="preco" value="<?=@$produto['preco']?>"><br><br>
            
            <?php
            if(ehPost()){
                foreach($erros as $erro){
                    echo "$erro<br>";
                }
            }
        ?>
            
            <br>
            
            <button>Enviar</button>
            
        </form>
    </body>
</html>
