<?php
require_once('Database.php');

$error = '';
$success = '';

$db = new Database();
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $senha_conf = $_POST['senha_conf'] ?? '';
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = ?"); 
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        $error = "E-mail não encontrado.";
    } elseif ($senha !== $senha_conf) {
        $error = "As senhas não correspondem.";
    } else {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE usuario SET senha = ? WHERE email = ?");
        $stmt->execute([$senha_hash, $email]);
        $success = "Senha alterada com sucesso! <a href='login.php'>Clique aqui para fazer login</a>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="esqueci-a-senha.css">
</head>
<body>
    <section class="esqueci-a-senha">
        <div class="tit">
            <a href="login.php"><button class="btn-voltar"><img src="img/Left 2.svg" alt=""></button></a>
            <h2>Redefinir Senha</h2>
            <span>Informe seu e-mail e nova senha</span>
        </div>

        <?php if ($error): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php elseif ($success): ?>
            <p style="color:green;"><?= $success ?></p>
        <?php endif; ?>

        <form action="" method="post">
            <div class="i">
                <img src="img/Message 35.svg" alt="">
                <input type="email" placeholder="Seu e-mail" name="email" required>
            </div>
            <div class="i">
                <img src="img/Password 1.svg" alt="">
                <input type="password" placeholder="Nova senha" name="senha" required>
            </div>
            <div class="i">
                <img src="img/Password 1.svg" alt="">
                <input type="password" placeholder="Confirme a senha" name="senha_conf" required>
            </div>
            <button class="btn-alterar">Alterar Senha</button>
        </form>
    </section>
</body>
</html>
