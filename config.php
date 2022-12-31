<?php
$servidorMySql = "localhost";       // servidor
$usuarioMySql = "root";             // usuario
$senhaMySql = "";                   // senha
$bancoMySql = "stophelpcadastro";   // Nome do banco de dados
  
try {
    
   $pdo = new PDO("mysql:host=$servidorMySql;dbname=$bancoMySql", $usuarioMySql, $senhaMySql);
   
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $erroDeExcessaoPDO) {
    
    // mensagem de erro
    echo "<script>alert('Erro ao conectar com o Banco de dados');</script>";
            
    // Redirecionamento, via Javascript para index.php 
    
    echo "<script>window.location.assign('index.php');</script>";
    
    
}
