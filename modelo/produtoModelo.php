<?php
   
function adicionarProduto($nome,$descricao,$preco){
    $comando = "INSERT INTO produto (nome, preco, descricao, imagem, estoque_minimo, estoque_maximo)"
            . "VALUES ('$nome', '$preco', '$descricao', '1', '1', '1')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
    
}

function pegarTodosProdutos(){
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(),$sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $produtos[] = $linha;
    }
   return $produtos; 
}

function pegarProdutoPorId($cod_produto){
    $sql = "SELECT * FROM produto WHERE cod_produto = $cod_produto";
    $resultado = mysqli_query(conn(), $sql);
    $cadastro_produto = mysqli_fetch_assoc($resultado);
    return $cadastro_produto;
}

function deletarProduto($cod_produto){
    $sql = "DELETE FROM produto WHERE cod_produto = $cod_produto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){
        die('Erro ao deletar produto' . mysqli_error($cnx));
    }
      return 'Produto deletado com sucesso!';
}


function editarProduto($cod_produto, $nome,$descricao,$preco){
    $sql = "UPDATE produto SET nome = '$nome', descricao = '$descricao', preco = '$preco'  WHERE cod_produto = $cod_produto";
    echo "$sql";
    $resultado = mysqli_query($conexao = conn(), $sql);
     if(!$resultado){ die('Erro ao editar produto!' . mysqli_error($conexao)); }
    return 'Produto alterado com sucesso!';
}
?>
