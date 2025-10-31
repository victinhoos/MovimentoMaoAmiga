<?php

session_start();

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/1afc72397c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="perfil.css">
</head>

<body>
    <header>
        <img class="brand" src="img/Apenas logo branca-Photoroom 1.svg"></img>
        <form action="" class="search-bar">
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
                <a class="" href="index.php">HOME</a>
                <a href="sobre.php">Sobre Nós</a>
                <a href="perfil.php">ONGs</a>
                <a href="login.php" id="lg">Login</a>
                <a class="abtn" href="cadastro.php"><button onclick=cadastrar()> Cadastrar
                        ONG</button></a>
            </div>
        </div>


    </header>
    <section>
        <div class=" banner">
            <div class="tit">
                <img class="bg" src="img/image2.svg" alt="">
                <img class="logo" src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                <h3>ONG Saúde em Ação</h3>
                <span>#saudeemacao</span>
                <p>Somos uma organização dedicada a promover impacto positivo na sociedade por meio de ações sociais,
                    voluntariado e iniciativas de transformação. Trabalhamos para conectar pessoas, recursos e
                    oportunidades, contribuindo para um mundo mais justo e solidário. Seja parte dessa mudança!</p>
                <div class="btns">
                    <a href=""><button class="btn-apoiar">Apoiar Causa</button></a>
                    <a href=""><button class="btn-vol">Voluntariar-se</button></a>
                </div>

                <span class="ing">ingressou em Março de 2025</span>
            </div>
        </div>
        <div class="container">
            <div class="desc">
                <div class="sobre">
                    <h3>Sobre a ONG:</h3>
                    <p>Iniciou as suas atividades no ano de 2016, quando um aluno da área de saúde resolve chamar alguns
                        amigos
                        para fazer uma espécie de mutirão para verificar a pressão e glicose em uma comunidade carente,
                        foi
                        só
                        uma ação isolada, mas que serviu para o mesmo se identificar e criar um grupo de voluntários
                        específicos
                        da área de saúde, na intenção de levar para comunidades carentes e pouco ou não assistidas pelo
                        poder
                        público, seja por má gestão ou por falta de recurso, invés de simplesmente criticar. Resolve
                        fazer a
                        diferença, assim surgi-o SAÚDE EM AÇÃO.</p>
                </div>
                <div class="loc">
                    <h3>Localização</h3>
                    <span><i class="fa-solid fa-location-dot"></i>Rua Diadema, 355-C Vasco da Gama</span>
                    <span>Recife, Pernambuco</span>
                </div>
                <div class="links">
                    <h3>Links</h3>
                    <span><img src="img/Attachment.svg" alt=""> www.instagram.com/ongsaudeemacao/</span>
                </div>
                <div class="cont">
                    <h3>Contatos</h3>
                    <span><img src="img/Message 353.svg" alt="">saudeemacaobr@gmail.com</span>
                    <span class="num"><img src="img/Call.svg" alt="">(81) 98106-9801</span>
                </div>

            </div>
            <div class="fotos">
                <div class="foto">
                    <div class="tit">
                        <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                        <h3>ONG Saúde em ação</h3>
                        <span>1h</span>
                    </div>
                    <span class="tag">#saudeemacao</span>
                    <p>Ação feita no Vasco da gama em conjunto com comunidade.</p>
                    <img src="img/image.svg" alt="">
                </div>

                <div class="foto">
                    <div class="tit">
                        <img src="img/Logo Saúde em Ação - Pedro Santana 3.svg" alt="">
                        <h3>ONG Saúde em ação</h3>
                        <span>30 de março</span>
                    </div>
                    <span class="tag">#saudeemacao</span>
                    <p>Participa +, O aprendizado é constante!!!</p>
                    <img src="img/image2.svg" alt="">
                </div>


            </div>
        </div>

    </section>
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
<script src="perfil.js"></script>

</html>