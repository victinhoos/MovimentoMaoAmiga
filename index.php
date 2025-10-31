<?php


session_start();

include_once('DataBase.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mão Amiga</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/1afc72397c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>

        <img class="brand" src="img/Apenas logo branca-Photoroom 1.svg"></img>
        <form action="" id="sc" class="search-bar">
            <input type="text" placeholder="Busque por ONGs e Campanhas..." name="q">
            <button type="submit"><img src="img/Search 2.svg"></button>
        </form>
        <button onclick="showOrHide()" class="menu" id="btn-menu"><i class="fa-solid fa-bars"></i></button>
        <button onclick="showOrHide2()" class="tg-search" id="btn-search"><i
                class="fa-solid fa-magnifying-glass"></i></button>
        <div class="navigation">

            <div class="nav-icons">
                <img class="img-slide active" src="img/Sun 1.svg" alt="">
                <img class="img-slide " src="img/Ellipse 12.svg" alt="" id="dark-mode">
                <img class="img-slide" src="img/Vector.svg" alt="">
            </div>
            <div id="navitem" class="navigation-items">
                <a class="act" href="index.php">HOME</a>
                <a href="sobre.php">Sobre Nós</a>
                <a href="perfil.php">ONGs</a>
                <a href="login.php" id="lg">Login</a>
                <a class="abtn" href="cadastro.php"><button> Cadastrar
                        ONG</button></a>
            </div>
        </div>


    </header>
    <div class="banner">
        <div class="txt">
            <h1>MOVIMENTO <br> MÃO AMIGA </h1>
            <p>"Acreditamos que pequenas ações criam <br>grandes mudanças. Conectamos pessoas e <br>ONGs para
                transformar
                realidades."</p>
        </div>
        <div class="wrapper">
            <i class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                <li class="card">
                    <div class="card-item"><img src="img/educação1.jpg" alt=""></div>
                </li>
                <li class="card">
                    <div class="card-item"><img src="img/AdobeStock_124563900.jpeg" alt="">
                    </div>
                </li>
                <li class="card">
                    <div class="card-item"><img src="img/246918246-881629552722979-1045159170288946500-n-1.jpg" alt="">
                    </div>
                </li>
                <li class="card">
                    <div class="card-item"><img src="img/hannah-busing-Zyx1bK9mqmA-unsplash-scaled.jpg.webp" alt="">
                    </div>
                </li>
                <li class="card">
                    <div class="card-item"><img src="img/gettyimages-1171168038.webp" alt=""></div>
                </li>
                <li class="card">
                    <div class="card-item"><img src="img/20180921_00_organizacao_trabalho_voluntario.jpg" alt=""></div>
                </li>
            </ul>
            <i class="fa-solid fa-angle-right"></i>


        </div>
    </div>

    <div class="destaque">
        <h3>Transformando Vidas com Solidariedade</h3>

        <div class="content">
            <p>O Saúde em Ação nasceu de um gesto simples, mas poderoso: um estudante da área da saúde reuniu amigos
                para
                levar atendimento a quem mais precisa. O que começou como uma ação isolada se tornou um movimento de
                compromisso com o bem-estar de comunidades pouco assistidas.
                Levamos atendimento médico, aferição de pressão e glicose, orientações de saúde e muito mais para quem
                não
                tem acesso fácil a esses serviços. Não esperamos mudanças, nós as criamos!

                Junte-se a nós e faça a diferença! ✨</p>
            <a href="perfil.php"><button onclick=abrirPerfil()>Acessar Perfil da ONG <i
                        class="fa-solid fa-arrow-right"></i></button></a>

            <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">

        </div>

    </div>
    <div class="ongs">
        <h2>Descubra, apoie, transforme.</h2>
        <div class="wrapper">
            <i class="fa-solid fa-angle-left"></i>

            <div class="cards">
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
                <div class="card">
                    <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                    <p>Saude em Ação</p>
                    <button onclick=abrirPerfil()>Conhecer ONG</button>
                </div>
            </div>


            <i class="fa-solid fa-angle-right"></i>
        </div>
    </div>
    <footer class="footer">
        <div class="fale-conosco">
            <p>Experiência avançada em design e desenvolvimento web, produzindo trabalho de qualidade.</p>
            <br>
            <h3>Fale Conosco</h3>
            <span>
                <address>Rua 01, 001 Recife, Pernambuco</address>
            </span>
            <br>
            <h3>E-mail</h3>
            <span>noreplay.movimentomaoamiga@gmail.com</span>
        </div>

        <div class="abas">
            <a href="#">
                <h4><span>Home</span></h4>
            </a>
            <br>
            <a href="#">
                <h4><span>Sobre Nós</span></h4>
            </a>
            <br>
            <a href="#">
                <h4><span>ONGs</span></h4>
            </a>
        </div>

        <div class="socials">
            <h3>Siga-nos</h3>
            <br>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <br>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <br>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <br>
        </div>
        <br>
        <div class="direitos">
            <br>
            <span>Termos e Condições de Serviço</span><br>
            <span>© 2025 Todos os Direitos Reservados</span>
        </div>
    </footer>

</body>
<script src="script.js"></script>

</html>