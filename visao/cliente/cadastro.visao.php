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
        
        <h2>Cadastro</h2>
        
        <form action="" method="POST">
            
            Nome: <input type="text" name="nome" value="<?=@$cliente["nome"]?>"><br><br>
            Email: <input type="text" name="email" value="<?=@$cliente["email"]?>"><br><br>
            CPF: <input type="text" name="cpf" value="<?=@$cliente["cpf"]?>"><br><br>
            Data de Nascimento: <input type="date" name="dataNasc" value="<?=@$cliente["dataNasc"]?>"><br><br>
            
  Sexo:   <select name="sexo" value="<?=@$cliente["sexo"]?>">
  <option value=""></option>
  <option value="F">Feminino</option>
  <option value="M">Masculino</option>
  <option value="Outros">Outros</option>
</select>
<br><br>


            Senha: <input type="password" name="senha" value="<?=@$cliente["senha"]?>"><br><br>
            Tipo de usuario: <input type ="text" name="tipousuario" value="<?=@$cliente["tipousuario"]?>"><br><br>
           
            
            <button>Enviar</button>
            <br><br>            
            <?php
            if(ehPost()){
                foreach($erros as $erro){
                    echo "$erro<br>";
                }
            }
        ?>
            
        </form>
    </body>
</html>
