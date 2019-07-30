<?php
require_once 'servico/validacaoServico.php';
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
      
      if(count($erros) > 0 ){
          $dados = array();
          $dados["erros"] = $erros;
          exibir("produto/formulario", $dados);
      }else{
           $mensagem = adicionarProduto($nome, $descricao, $preco);
        redirecionar("produto/listarProdutos");
      }     
   }else{
      exibir("produto/formulario");
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

function deletar($cod){
    $msg = deletarProduto($cod);
    redirecionar("produto/listarProdutos");
}

function editar($cod_produto){
     if (ehPost()){
       $nome = $_POST["nome"];
       $preco = $_POST["preco"];
       $descricao = $_POST["descricao"];
       
       editarProduto($cod_produto, $nome, $descricao, $preco);
       redirecionar("produto/listarProdutos");
} else{
    $dados["produto"] =  pegarProdutoPorId($cod_produto);
    exibir("produto/formulario", $dados);
}
}
?>
