<?php
    class Estudante {

        private $conn;
        private $table = "estudantes"; 

        public function __construct($db){
            $this->conn = $db; //conn = instância o banco de dados
        }

        //listar todos os estudantes (READ)
        public function buscarTodos(){
            $query = "SELECT * FROM" . $this->table . "ORDER BY nome ASC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //salvar novo estudante (CREATE)

        public function salvar($dados){
            $query = "INSERT INTO" . $this->table . "(nome, email, matricula) VALUES (:nome, :email, :matricula)";
            //: serve para segurança do banco de dados
            $stmt = $this->conn->prepare($query);

            //Blindar SQL
            $stmt->bindParam(':nome' , $dados['nome']);
            $stmt->bindParam(':email' , $dados['email']);
            $stmt->bindParam(':matricula' , $dados['matricula']);
            
            return $stmt->execute();
        }
    }
?>