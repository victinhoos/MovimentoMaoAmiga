<?php
include_once('Database.php');
include_once('Ong.php');
include_once('ValidadorCNPJ.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $identificador = $_POST['identificador'];
    $senha = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    if ($senha !== $senha2) {
        echo "<script>alert('As senhas não coincidem.'); window.history.back();</script>";
        exit;
    }
    $ong = new Ong();
    $resultado = $ong->cadastro($nome, $cnpj, $email, $identificador, $senha, $senha2);
    
    if ($resultado) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
<section class="cadastro">
    <div class="coluna esquerda">
        <img src="img/Apenas logo preta- sem fundo 1.svg" alt="">
        <h2>Bem Vindo <br>de volta!</h2>
        <span>Acesse o Portal da sua ONG <br></span>
        <a href="login.php"><button>Entrar</button></a>
    </div>
    <div class="coluna direita">
        <div class="tit">
            <div class="tit-btn">
                <a href="index.php"><button type="button" class="btn-voltar"><img src="/img/Left 2.svg" alt=""></button></a>
                <h2>Crie sua Conta</h2>
                <span>Preencha seus dados</span>
            </div>
        </div>

        <form id="cadastroForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <!-- Etapa 1 -->
            <div id="step1" class="step active">
                <div class="i">
                    <img src="img/Home 4.svg" alt="">
                    <input type="text" name="nome" placeholder="Nome da ONG" required>
                </div>
                <div class="i">
                    <img src="img/Document Justify Center 1.svg" alt="">
                    <input type="text" name="cnpj" placeholder="CNPJ" required>
                </div>
                <div class="i">
                    <img src="img/Message 35.svg" alt="">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="i">
                    <img src="img/Verified.svg" alt="">
                    <input type="text" name="identificador" placeholder="Identificador" required>
                </div>
                <button type="button" onclick="nextStep()" class="btn-avancar">Avançar</button>
            </div>

            <!-- Etapa 2 -->
            <div id="step2" class="step">
                <div class="i">
                    <img src="img/Password 1.svg" alt="">
                    <input type="password" name="senha1" placeholder="Senha" required>
                </div>
                <div class="i">
                    <img src="img/Password 1.svg" alt="">
                    <input type="password" name="senha2" placeholder="Confirme sua senha" required>
                </div>
                <button type="submit" class="btn-validar">Validar Conta</button>
                <span>Ao clicar neste botão você aceita os <a href="#">Termos e Condições de Serviço</a></span>
            </div>
        </form>
    </div>
</section>

<script>
    function nextStep() {
        document.getElementById("step1").classList.remove("active");
        document.getElementById("step2").classList.add("active");
    }
</script>

<script src="/script.js"></script>
</body>
</html>
