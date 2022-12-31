<?php

// Capturar os valores enviados pelo método GET
$idempresa=     $_POST['idempresa'];
$cnpj =         $_POST['cnpj'];
$razaosocial =  $_POST['razaosocial'];
$fone =         $_POST['phone'];
$email =        $_POST['email'];
$nomecontato =  $_POST['nomecontato'];
$password =     $_POST['password'];
$token =        uniqid();
// Incluir o arquivo classeCidade.php
include("classeEmpresa.php");
// Instanciar o objeto $contato
$empresa = new classeEmpresa();
// Definir os atributos do objeto $contato
$empresa->setIdEmpresa($idempresa);
$empresa->setCnpj($cnpj);
$empresa->setRazaoSocial($razaosocial);
$empresa->setFone($fone);
$empresa->setEmail($email);
$empresa->setNomeDeContato($nomecontato);
$empresa->setSenha($password);
$empresa->setToken($token);
// Verificar se deve ser executado inserirContato() ou alterarContato()
if ($empresa->getIdEmpresa() == 0) {
    // Executar o método inserirCidade()
    $empresa->inserirEmpresa();
    // Mensagem
    // Redirecionamento, via JavaScript, para login.php
    echo "<script>window.location.assign('login.php');</script>";
} else {
    // Executar o método alterarEmpresa()
    $empresa->alterarEmpresa();
    // Mensagem 
    // Redirecionamento, via JavaScript, para areadocliente.php
    echo "<script>window.location.assign('areadocliente.php');</script>";
}
    
    
            
            