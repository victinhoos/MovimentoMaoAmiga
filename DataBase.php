<?php
class Database {
    private $host = ''; 
    private $db_name = ''; 
    private $username = ''; 
    private $password = ''; 
    private $port = '';

    public $conn;

    public function getConnection() {
        try {
            $conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->db_name;charset=utf8", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}
?>
