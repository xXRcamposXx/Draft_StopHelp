<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of classeEmpresa
 *
 * @author Katiene Silva
 */
class classeEmpresa {

    //Atributos
    private $idEmpresa;
    private $token;
    private $cnpj;
    private $razaoSocial;
    private $nomeDeContato;
    private $email;
    private $senha;
    private $fone;

    //Getters e Setters
    public function getIdEmpresa() {
        return $this->idEmpresa;
    }

    public function getToken() {
        return $this->token;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getNomeDeContato() {
        return $this->nomeDeContato;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getFone() {
        return $this->fone;
    }

    public function setIdEmpresa($idEmpresa): void {
        $this->idEmpresa = $idEmpresa;
    }

    public function setToken($token): void {
        $this->token = $token;
    }

    public function setCnpj($cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function setRazaoSocial($razaoSocial): void {
        $this->razaoSocial = $razaoSocial;
    }

    public function setNomeDeContato($nomeDeContato): void {
        $this->nomeDeContato = $nomeDeContato;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setFone($fone): void {
        $this->fone = $fone;
    }

    //metódos CRUD
    //método inserirContato
    function inserirEmpresa() {
        include("config.php");                                 //conectar com o BD 
        $comando = "INSERT INTO empresa (TOKEN, CNPJ, RAZAOSOCIAL, EMAIL, FONE, NOMEDECONTATO, SENHA) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $resposta = $pdo->prepare($comando);                    //Preparar para a execução do comando
        // Definir os 5 parâmetros utilizando os atributos classe
        $resposta->bindValue(1, $this->token);
        $resposta->bindValue(2, $this->cnpj);
        $resposta->bindValue(3, $this->razaoSocial);
        $resposta->bindValue(4, $this->email);
        $resposta->bindValue(5, $this->fone);
        $resposta->bindValue(6, $this->nomeDeContato);
        $resposta->bindValue(7, $this->senha);
        $resposta->execute();                                   // Executar o comando
    }
    
    // Método consultarContato
    function consultarEmpresa() {
        include("config.php");
        // Montar o comando a ser executado
        $comando = "SELECT * FROM empresa WHERE IDEMPRESA=?;";
        $resposta = $pdo->prepare($comando);                    //preparar para execução do comando
        $resposta->bindValue(1, $this->idEmpresa);              //definir o parâmetro
        $resposta->execute();                                   //executar o comando
        //Atribuir aos  atributos o resultado da consulta
        foreach($resposta as $registro) {
            $this->idEmpresa                = utf8_encode($registro["IDEMPRESA"]);
            $this->token                    = utf8_encode($registro["TOKEN"]);
            $this->cnpj                     = utf8_encode($registro["CNPJ"]);
            $this->razaoSocial              = utf8_encode($registro["RAZAOSOCIAL"]);
            $this->email                    = utf8_encode($registro["EMAIL"]);
            $this->fone                     = utf8_encode($registro["FONE"]);
            $this->nomeDeContato            = utf8_encode($registro["NOMEDECONTATO"]);
            $this->senha                    = utf8_encode($registro["SENHA"]);
        }
    }
    
    //Método alterarContato
    function alterarEmpresa() {
         include("config.php");                           //Conectar com o BD
        $comando = "UPDATE empresa SET "
                .  "TOKEN=?,"
                .  "CNPJ=?,"
                .  "RAZAOSOCIAL=?,"
                .  "EMAIL=?,"
                .  "FONE=?,"
                .  "NOMEDECONTATO=?,"
                .  "SENHA=? "
                .  "WHERE (IDEMPRESA=?);";
        $resposta = $pdo->prepare($comando);                   //Prepara para execução do comando
        //Definir os 6 parâmetros, utilizando os atributos de classe
        $resposta->bindValue(1, $this->token);
        $resposta->bindValue(2, $this->cnpj);
        $resposta->bindValue(3, $this->razaoSocial);
        $resposta->bindValue(4, $this->email);
        $resposta->bindValue(5, $this->fone);
        $resposta->bindValue(6, $this->nomeDeContato);
        $resposta->bindValue(7, $this->senha);
        $resposta->bindValue(8, $this->idEmpresa);
        $resposta->execute();                                   //Executar o comando               
    }
    
    function excluirEmpresa() {
        include("config.php");                                 //Cadastrar com o BD
        //Montar o comando a ser executado com o parâmetro da function excluirContato
        $comando = "DELETE FROM empresa WHERE (IDEMPRESA=?);";
        $resposta = $pdo->prepare($comando);                    //Preparar para executar 
        $resposta->bindValue(1, $this->idEmpresa);              //Definir o parâmetro
        $resposta->execute();                                   //executar o comando         
    }
   
}
