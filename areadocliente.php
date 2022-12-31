<?php
session_start();

include ("config.php");
include ("classeEmpresa.php");
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="styleareadocliente.css" />  
    </head>
    <body>
        <div class="container">
            
            <div class="navbar">
                <div class="menu">
                    <a href= "index.php"><button class="stopBt"><h3 class="logo" >STOP<span>HELP</span></h3></button></a>
                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
            <div class="main-container">
                <div class="main">
                    <a href="areadocliente.php"></a>
                    <header>
                        <div class="overlay">
                            <div class="infPerfil">

                                <?php
                                if ($_SESSION['email']) {

                                    echo '<h3>Login bem sucedido, seja bem-vindo à área de cliente, ' . $_SESSION['nomecontato'] . '</h3><br>';
                                } else {
                                    header('Location: login.php?erro=true');
                                    echo "<script>alert('Realize o login antes de acessar a área do cliente!);</script>";
                                }
                                ?>

                                <a href="logout.php"><button class="btCliente">Informações da empresa</button><br>
                                    <a href="dashboard.php"><button class="btCliente">Dashboards</button>
                                        <a href="downloadapps.php"><button class="btCliente">Download</button>
                                            <a href="logout.php"><button class="btCliente">Sair</button></a>

                                            </div>
                                            <div class="inner">
                                                <?php
                                                $select = "SELECT IDEMPRESA  as idEmpresa,"
                                                        . "TOKEN as token,"
                                                        . "CNPJ as cnpj,"
                                                        . "RAZAOSOCIAL as razaoSocial,"
                                                        . "EMAIL as email,"
                                                        . "FONE as fone,"
                                                        . "NOMEDECONTATO as nomeDeContato,"
                                                        . "SENHA as senha "
                                                        . "FROM empresa "
                                                        . "WHERE IDEMPRESA = :idempresa "
                                                        . "ORDER BY IDEMPRESA;";

                                                $retornoDaConsulta = $pdo->prepare($select);
                                                $retornoDaConsulta->execute(
                                                        array(
                                                            'idempresa' => $_SESSION['idempresa']
                                                        )
                                                );
                                                foreach ($retornoDaConsulta as $registro) {

                                                    $idempresa = utf8_encode($registro["idEmpresa"]);
                                                    $token = utf8_encode($registro["token"]);
                                                    $cnpj = utf8_encode($registro["cnpj"]);
                                                    $razaosocial = utf8_encode($registro["razaoSocial"]);
                                                    $token = utf8_encode($registro["token"]);
                                                    $email = utf8_encode($registro["email"]);
                                                    $senha = utf8_encode($registro["senha"]);
                                                    $nomedecontato = utf8_encode($registro["nomeDeContato"]);
                                                    $fone = utf8_encode($registro["fone"]);
                                                }
                                                ?>  
                                                <h1>Informações da empresa</h1>
                                                <form action="salvarempresa.php" method="POST">
                                                    <div class="forms">
                                                        <br>
                                                        <label>CNPJ</label><br>
                                                        <p class="prgf"><?php echo $cnpj; ?></p><br>

                                                        <label>EMAIL</label><br>
                                                        <input type="email" name="email" class="inputs" value="<?php echo $email; ?>" required><br>
                                                        <label>SENHA</label><br>
                                                        <input type="password" name="password" class="inputs" value="<?php echo $senha; ?>" required><br>

                                                        <br><label>RAZÃO SOCIAL</label><br>
                                                        <p class="prgf"><?php echo $razaosocial; ?></p><br>

                                                        <label>NOME DE CONTATO</label><br>
                                                        <input type="text" name="nomecontato" class="inputs" value="<?php echo $nomedecontato; ?>" required><br>
                                                        <label>TELEFONE</label><br>
                                                        <input type="tel" name="phone" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" class="inputs" value="<?php echo $fone; ?>" required><br><br>

                                                    </div>
                                                    <input type="hidden" name="idempresa" value="<?php echo $idempresa; ?>"><br>
                                                    <label>Código de acesso</label><br>
                                                    <p class="token"><?php echo $token; ?> </p>
                                                    <input type="submit" class="btAlterCont" value="Salvar">
                                                </form>


                                            </div>
                                            </div>
                                            </header>
                                            </div>

                                            <div class="shadow one"></div>  
                                            <div class="shadow two"></div>
                                            </div>



                                            <div class="links">
                                                <ul>
                                                    <li>
                                                        <a href="downloadapps.php" style="--i: 0.2s;">DOWNLOAD</a>
                                                    </li>
                                                    <li>
                                                        <a href="./SobreNos/index.php" style="--i: 0.05s;">SOBRE NÓS</a>
                                                    </li>
                                                    <li>
                                                        <a href="./seguranca/seguranca.php" style="--i: 0.1s;">SEGURANÇA DO TRABALHO</a>
                                                    </li>
                                                    <li>
                                                        <a href="./treinamento/treino.php" style="--i: 0.15s;">TREINAMENTO</a>
                                                    </li>
                                                    <li>
                                                        <a href="./treinamento/treino.php" style="--i: 0.15s;">AREA DO CLIENTE</a>
                                                    </li>
                                                    <li>
                                                        <a href="Contatos.php" style="--i: 0.2s;">CONTATO</a>
                                                    </li>

                                                </ul>

                                            </div>



                                            <div>


                                            </div>
                                            </div>
                                            <script src="./JS/app.js"></script>
                                            </body>
                                            </html>
