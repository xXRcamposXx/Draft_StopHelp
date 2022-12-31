<?php
include("config.php");

session_start();

if (isset($_POST['Login'])) {
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        echo "<script>alert('Todos os campos devem ser preenchidos!');</script>";
        header("Location: login.php");
    } else {
        $query = "SELECT * FROM empresa "
                . "WHERE EMAIL = :email "
                . "AND SENHA = :senha";
        $sql = $pdo->prepare($query);
        $sql->execute(
                array(
                    'email' => $_POST['email'],
                    'senha' => $_POST['senha']
                )
        );
        
        $select = "SELECT empresa.NOMEDECONTATO as nomedecontato, IDEMPRESA as idempresa FROM empresa "
                . "WHERE EMAIL = :email "
                . "ORDER BY TOKEN;";
        $consulta = $pdo->prepare($select);
        $consulta->execute(
                array(
                    'email' => $_POST['email']
                )
        );
        foreach ($consulta as $registro) {


            $nomedecontato = utf8_encode($registro["nomedecontato"]);
            $idempresa = utf8_encode($registro["idempresa"]);
        }

        $contar = $sql->rowCount();
        if ($contar != 0) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['nomecontato'] = $nomedecontato;
            $_SESSION['idempresa'] = $idempresa;
            header("Location: areadocliente.php");
        } else {
            
        }
    }
}
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="shortcut icon" href="logomarca_branco.png">
        <link rel="stylesheet" href="stylelogin.css" />  
    </head>
    <body>
        <div class="divprincipal">
        <div class="anexo">
            <img src="Imagem/logB.png" width="400" height="220">
        </div>
        <div class="form">
            <form action="login.php" method="POST">

                <p class="atributo">
                    
                    <input type="text" name="email" class="login" id="lbEmail" placeholder="E-Mail">
                </p>
                <p class="atributo">
                    
                    <input type="password" name="senha" class="login" id="lbSenha" placeholder="Senha">
                </p>
                <p id="btAtr">
                    <button type="submit" class="btLogin" name="Login"">Log In</button>
                </p>

            </form>
            <p class="BtEsqueceuSenha">
                <a href="esqueceuasenha.php"><button class="ResetPass" ">Esqueceu a senha?</button></a>
            </p>
            <p class="BtLogin">
                <a href="cadastro.php"><button class="ResetPass" ">Não possui conta? Cadastre-se!</button></a>
            </p>
        </div>
    </div>
</body>
</html>
