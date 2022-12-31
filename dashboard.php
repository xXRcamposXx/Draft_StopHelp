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
        <link rel="stylesheet" href="styledashboard.css" />
    </head>


    <body>
        <div class="container">
            <div class="navbar">
                <div class="menu">
                    <h3 class="logo">STOP<span>HELP</span></h3><div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                    
                </div>
            </div>

            
            <div class="main-container">
                <div class="main">
                    <header>
                            <div class="inner">
                                <img class="dash" src="dashboard.jpg" alt="alt" width="900" height="500"/>
                                
                            </div>
                    </header>
                </div>

                
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