<?php
include("classeEmpresa.php");
$empresa = new classeEmpresa();
$empresa->setCnpj("");
$empresa->setRazaoSocial("");
$empresa->setNomeDeContato("");
$empresa->setEmail("");
$empresa->setEmail("");
$empresa->setSenha("");
$empresa->setFone("");
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

<html>

    <head>
        <meta charset="UTF-8">
        <title>SH - CADASTRO</title>
        <link rel="shortcut icon" href="logomarca_branco.png">
        <link rel="stylesheet" href="stylecadastro.css" />  

    </head>

    <body>

        <div class="divprincipal">
            <div class="anexo"><br>
                <br><img src="Imagem/logW.png" width="500" height="300"><br>
            </div>

            <div class="form">

                <?php
                if (isset($_POST['CNPJ'])) {
                    if (empty($_POST['cnpj']) || empty($_POST['razaosocial']) || empty($_POST['phone']) || empty($_POST['nomecontato']) || empty($_POST['email']) || empty($_POST['password'])) {
                        echo "<script>alert('Todos os campos devem ser preenchidos!');</script>";
                        header("Location: cadastro.php");
                    } else {
                        $query = "SELECT * FROM empresa "
                                . "WHERE CNPJ = :cnpj, "
                                . "RAZAOSOCIAL = :razaosocial, "
                                . "AND EMAIL = :email";
                        $sql = $pdo->prepare($query);
                        $sql->execute(
                                array(
                                    'cnpj' => $_POST['cnpj'],
                                    'razaosocial' => $_POST['razaosocial'],
                                    'email' => $_POST['email']
                                )
                        );
                            
                        }
                    }
                
                ?>
                <form name="add_msg" method="POST" action="salvarempresa.php" class="forms" >
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastre-se</h1>
                        </div>


                    </div>

                    <div class="input-group">

                        <div class="input-box">

                            <input type="text" 
                                   name="cnpj" \
                                   title="CNPJ: XX.XXX.XXX/0001-XX" 
                                   pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}/[0-9]{4}-[0-9]{2}"
                                   class="inputs"
                                   placeholder="CNPJ"
                                   autofocus required >
                        </div>

                        <div class="input-box">

                            <input type="text" 
                                   name="razaosocial" 
                                   placeholder="Digite a razão social" 
                                   class="inputs"

                                   required>
                        </div>

                        <div class="input-box">

                            <input type="tel" 
                                   id="phone"
                                   title="fone:(00)1 2345-6789" 
                                   placeholder="(XX)X XXXX-XXXX" 
                                   name="phone" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}"
                                   class="inputs"
                                   required>
                        </div>
                        <div class="input-box">

                            <input type="text" 
                                   name="nomecontato" 
                                   placeholder="Digite o nome de contato" 
                                   class="inputs"
                                   required>
                        </div>


                        <div class="input-box">

                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   placeholder="email@comercial.com.br" 
                                   class="inputs"
                                   required>
                        </div>

                        <div class="input-box">

                            <input type="password" 
                                   placeholder="Senha" 
                                   id="password" 
                                   name="password"
                                   class="inputs"
                                   required><br>

                            <input type="password" 
                                   placeholder="Confirme Senha" 
                                   id="confirm_password" 
                                   class="inputs"
                                   required>
                        </div>

                        <div><input type="hidden" name="form" value="f_form"></div>

                        <div class="input-box">
                            <!--<button><a href="cadastro.php">Entrar</a></button>-->
                            <input type="submit" value="cadastrar" name="cadastrar" class='btnCadastro'><br><br>
                              <a class="realizarLog" href="login.php">Já possui conta? Realize o login!</a>
                        </div> 
                        
                    </div>
              
            

                </form>
                <div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </body>

</html