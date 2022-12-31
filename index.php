<?php
include ("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="PT-BR">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>STOP HELP</title>
        <link rel="stylesheet" href="./CSS/style.css" />
    </head>


    <body>
        <div class="container">
            <div class="navbar">
                <div class="menu">
                    <h3 class="logo">STOP<span>HELP</span></h3>
                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="main">
                    <header>
                        <div class="overlay">
                            <div class="inner">
                                <h2 class="title">STOP HELP</h2>
                                <?php
                                if (isset($_SESSION['email'])) {

                                    echo "<p>Seja bem vindo ao nosso software de segurança ocupacional.</p>";
                                    echo "<a href='areadocliente.php'><button class='btn' href=''>Acesse o seu perfil</button></a>";
                                } else {

                                    echo "<p>Seja bem vindo ao nosso software de segurança ocupacional.</p>";
                                    echo "<a href='cadastro.php'><button class='btn' href=''>Cadastre-se</button></a>";
                                    echo "<a href='login.php'><button class='btn' href=''>Login</button></a>";
                                }
                                ?>
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
                        <a href="areadocliente.php" style="--i: 0.15s;">AREA DO CLIENTE</a>
                    </li>
                    <li>
                        <a href="Contatos.php" style="--i: 0.2s;">CONTATO</a>
                    </li>

                </ul>

            </div>
        </div>
        <script src="./JS/app.js"></script>
    </body>

</html>