<?php

require_once 'servico/validacaoServico.php';
require_once 'modelo/enderecoModelo.php';

function adicionar(){
    if (ehPost()){
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        
        $erros = array();
        
if (valida_nao_vazio($logradouro) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     if (valida_nao_vazio($numero) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     if (valida_nao_vazio($complemento) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     if (valida_nao_vazio($bairro) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     
     if (valida_nao_vazio($cidade) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     if (valida_nao_vazio($cep) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     
if(count($erros) > 0){
         $dados = array();
         $dados["erros"] = $erros;
         exibir("endereco/formulario", $dados);
     }else{
         $mensagem = adicionarEndereco($logradouro,$numero,$complemento, $bairro,$cidade,$cep);
        redirecionar("endereco/listarEnderecos");
     }
    }else{
   exibir("endereco/formulario");  
     }    
}

function listarEnderecos(){
    $dados = array();
    $dados["enderecos"] = pegarTodosEnderecos();
    exibir("endereco/listar", $dados);
}

function ver($idEndereco){
    $dados["endereco"] = pegarEnderecoPorId($idEndereco);
    exibir("endereco/visualizar", $dados);
}

function deletar($idEndereco){
    $msg = deletarEndereco($idEndereco);
    redirecionar("endereco/listarEnderecos");
}
function editar($idEndereco){
     if (ehPost()){
      $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        
        editarEndereco($logradouro,$numero,$complemento, $bairro,$cidade,$cep);
       redirecionar("endereco/listarEndrecos");
} else{
    $dados["endereco"] = pegarEnderecoPorId($idEndereco);
    exibir("endereco/formulario", $dados);
} 
}
