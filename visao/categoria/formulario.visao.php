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
        <form action="" method="POST">
            <h2>Cadastrar Categoria</h2>
        
        Categoria: <input type="text" name="nome" value="<?=@$categoria['nome']?>"><br><br>
        
        
        
        <?php
            if(ehPost()){
                foreach($erros as $erro){
                    echo "$erro<br>";
                }
            }
        ?>
        
        <br>
        
        <button>Cadastrar</button>
        
        </form>
        
        
        
    </body>
</html>
