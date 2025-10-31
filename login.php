<!-- <?php
session_start();

// Conexão com o banco de dados
$mysqli = new mysqli("localhost", "root", "", "movimentomaoamiga");

// Verifica se houve erro de conexão
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: " . $mysqli->connect_error;
    exit();
}
//verifica se os campos foram preenchidos
if (isset($_POST['email']) && isset($_POST['senha'])) {
//verifica se o email ja existe
    if (strlen($_POST['email']) == 0) {
        echo "<script>alert('Preencha seu e-mail.');</script>";
        //verifica se a senha existe
    } else if (strlen($_POST['senha']) == 0) {
        echo "<script>alert('Preencha sua senha.');</script>";
    } 
    // aqui ele pega os dados colocados como senha e email e faz uma barra de segurança
    else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $result = $mysqli->query($sql) or die("Erro no SQL: " . $mysqli->error);
//aqui ele procura se o valor existe 
        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();
//apos logar o usuario é mandado para a pagina principal
            if (password_verify($senha, $usuario['senha'])) {
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: index.php");
                exit();
            } 
            //se a senha for errada 
            else {
                echo "<script>alert('Senha incorreta.');</script>";
            }
        } 
        //se o email não for achado
        else {
            echo "<script>alert('E-mail não encontrado.');</script>";
        }
    }
}
?>


 -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <section class="login">
        <div class="coluna esquerda">
            <img src="img/Apenas logo preta- sem fundo 1.svg" alt="">
            <h2>Ainda Não <br>possui uma <br> conta? <br></h2>
            <span>Cadastre-se agora! <br></span>
            <a href="cadastro.php"><button>Criar Conta</button></a>
        </div>
        <div class="coluna direita">
            <div class="tit">
                <div class="tit-btn">
                    <a href="index.php"><button class="btn-voltar"><img src="img/Left 2.svg" alt=""></button></a>
                    <h2>Acesse sua Conta</h2>
                    <span>Preencha seus dados</span>
                </div>
            </div>
            <form action="" method="POST">
    <div class="i">
        <img src="img/Message 35.svg" alt="">
        <input type="email" id="email" name="email" placeholder="E-mail" required>
    </div>
    <div class="i">
        <img src="img/Password 1.svg" alt="">
        <input type="password" id="senha" name="senha" placeholder="Senha" required>
    </div>
    <div class="perm-esc">
        <input class="cb" type="checkbox" id="perm-conect">
        <span>permanecer conectado <a href="esqueci-a-senha.php">esqueci minha senha</a></span>
    </div>

    <button type="submit" class="btn-acessar">Acessar Portal</button>
            </form>

        </div>
    </section>
</body>
<script src="/script.js"></script>

</html>