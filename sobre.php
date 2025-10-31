<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="sobre.css">
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
                <a href="index.php">HOME</a>
                <a class="act" href="sobre.php">Sobre Nós</a>
                <a href="perfil.php">ONGs</a>
                <a href="login.php" id="lg">Login</a>
                <a class="abtn" href="cadastro.php"><button onclick=cadastrar()> Cadastrar
                        ONG</button></a>
            </div>
        </div>


    </header>
    <div class="sobre">
        <h3>Conectando Tecnologia e Solidariedade</h3>
        <p>Nosso projeto nasceu da iniciativa de 10 alunos do curso de Análise e Desenvolvimento de Sistemas, motivados
            pelo desejo de utilizar a tecnologia para transformar realidades. Acreditamos que a inovação pode ser uma
            poderosa aliada no fortalecimento do impacto social, conectando organizações que fazem a diferença a pessoas
            dispostas a ajudar.
            Com esse propósito, criamos esta plataforma para dar visibilidade a ONGs, facilitando a divulgação de seus
            projetos e a captação de voluntários e doações. Sabemos que muitas instituições realizam trabalhos
            incríveis, mas enfrentam desafios para alcançar mais pessoas e obter o apoio necessário para continuar suas
            ações. Nossa missão é fornecer um espaço acessível, seguro e eficiente para que essas organizações possam
            compartilhar suas causas e encontrar suporte.
            Mais do que um site, queremos construir uma ponte entre aqueles que precisam de ajuda e aqueles que desejam
            contribuir. Seja através do voluntariado, doações ou simplesmente compartilhando iniciativas, cada ação
            conta.
            Se você quer fazer parte dessa transformação,
            junte-se a nós e ajude a fortalecer essa rede de solidariedade!</p>

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
<script src="sobre.js"></script>

</html>