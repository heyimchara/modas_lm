<?php
require_once 'servico/validacaoServico.php';
require_once 'modelo/categoriaModelo.php';
require_once 'modelo/produtoModelo.php';

function index(){
    redirecionar("produto/listarProdutos");
}

function visualizar (){
    $visualizar = array();
    $visualizar["nomeProd"] = "Moletom";
    $visualizar["descricao"] = "O material tem uma modelagem reta e apenas na cor preta";
    $visualizar["preco"] = " 109,99";
    
    exibir("produto/visualizar", $visualizar);
}

function adicionar(){
        
   if (ehPost()){
       $nome = $_POST["nome"];
       $preco = $_POST["preco"];
       $descricao = $_POST["descricao"];
       $cod_categoria = $_POST["cod_categoria"];
       $imagem = $_POST["imagem"];
       $estoque_minimo = $_POST["estoque_minimo"];
       $estoque_maximo = $_POST["estoque_maximo"];
       
       $erros = array();
       
       if (valida_nao_vazio($nome) != NULL){
          $erros[]= "Você deve inserir um valor no campo Nome.";    
      }
       if (valida_nao_vazio($descricao) != NULL){
          $erros[]= "Você deve inserir um valor no campo Descrição.";    
      }
      if (valida_nao_vazio($preco) != NULL){
          $erros[]= "Informe um valor valido.";    
      }
      if (valida_nao_vazio($imagem) != NULL){
          $erros[]= "Você deve inserir um valor válido.";    
      }
      if (valida_nao_vazio($estoque_minimo) != NULL){
          $erros[]= "Você deve inserir um valor válido.";    
      }
      if (valida_nao_vazio($estoque_maximo) != NULL){
          $erros[]= "Você deve inserir um valor válido.";    
      }
      
      if(count($erros) > 0 ){
          $dados = array();
          $dados["erros"] = $erros;
          exibir("produto/formulario", $dados);
      }else{
           $mensagem = adicionarProduto($nome, $descricao, $preco, $cod_categoria, $imagem, $estoque_minimo, $estoque_maximo);
        redirecionar("produto/listarProdutos");
      }     
    }else{
      $dados["categorias"] = pegarTodasCategorias();
      exibir("produto/formulario", $dados);
   } 
  
}

function listarProdutos(){
    $dados = array();
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

function ver($cod_produto){
    $dados["produto"] = pegarProdutoPorId($cod_produto);
    exibir("produto/visualizar", $dados);
}

function deletar($cod_produto){
    $msg = deletarProduto($cod_produto);
    redirecionar("produto/listarProdutos");
}

function editar($cod_produto){
     if (ehPost()){
       $nome = $_POST["nome"];
       $preco = $_POST["preco"];
       $descricao = $_POST["descricao"];
       $cod_categoria = $_POST["cod_categoria"];
       $imagem = $_POST["imagem"];
       $estoque_minimo = $_POST["estoque_minimo"];
       $estoque_maximo = $_POST["estoque_maximo"];
       
       editarProduto($cod_produto, $nome, $descricao, $preco, $cod_categoria, $imagem, $estoque_minimo, $estoque_maximo);
       redirecionar("produto/listarProdutos");
} else{
    $dados["produto"] =  pegarProdutoPorId($cod_produto);
    $dados["categorias"] = pegarTodasCategorias();
    exibir("produto/formulario", $dados);
} 
}
?>