<?php
require_once 'ValidadorCNPJ.php';
require_once 'DataBase.php';

class Ong {
    private $nome;
    private $email;
    private $senha;
    private $indentificador;
    private $id;
    private $cnpj;

    private $con;
    public function cadastro($nome, $cnpj, $email, $indentificador, $senha1, $senha2) {
        $this->con = (new Database())->getConnection(); // <- corrigido aqui
    
        try {
            // Verifica se CNPJ já existe
            //faz a consulta e seleciona os parametros que no caso é cnpj e executa a consulta
            $query = "SELECT * FROM usuario WHERE cnpj = :cnpj";
            $stmt = $this->con->prepare($query);
            $stmt->bindParam(':cnpj', $cnpj);
            $stmt->execute();
            // se a buscar for maior q 0 o cnpj ja existe
            if ($stmt->rowCount() > 0) {
                throw new Exception('CNPJ já está cadastrado.');
            }
    
            // Verifica se email já existe
            //mesma coisa do de cima
            $query = "SELECT * FROM usuario WHERE email = :email";
            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                throw new Exception('E-MAIL já está cadastrado.');
            }
    
            // Verifica caracteres especiais no identificador
            if (preg_match('/[^a-zA-Z0-9]/', $indentificador)) {
                throw new Exception('Não pode caracter especial no Identificador.');
            }
    
            // Verifica se identificador já existe
            //mesma coisa do de cima
            $query = "SELECT * FROM usuario WHERE indentificador = :indentificador";
            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":indentificador", $indentificador);
            $stmt->execute();
            //se a busca achar alguma valor a mais q 0 ja existe id cadastrado
            if ($stmt->rowCount() > 0) {
                throw new Exception('Identificador já está cadastrado.');
            }
    
            // Verifica se senhas coincidem
            if ($senha1 !== $senha2) {
                throw new Exception('As senhas não são iguais.');
            }
    
            // Insere novo usuário
            //aqui a consulta pega todos os dados e insere no bd
            $query = "INSERT INTO usuario (nome, cnpj, email, indentificador, senha) VALUES (:nome, :cnpj, :email, :indentificador, :senha)";
            $stmt = $this->con->prepare($query);
            //password_hash é um meio de criptografar a senha
            $senhaHash = password_hash($senha1, PASSWORD_DEFAULT);
    
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":cnpj", $cnpj);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":indentificador", $indentificador);
            $stmt->bindParam(":senha", $senhaHash);
    
            $stmt->execute();
    
            return true;
    
        } catch (Exception $e) {
            echo "<script>alert('" . $e->getMessage() . "');</script>";
            return false;
            //se der caquinha vai aparecer mensagem de erro
        }
    }


    
}
?>