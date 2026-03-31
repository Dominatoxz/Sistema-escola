<?php
require_once './Model/Estudante.php';
class EstudanteController {
    private $db;
    private $estudante;

    public function __construct() {
    //Preparar conexão com o BD
        $database = new Database();
        $this->db = $database->getConnection();

        //instanciar a Model Estudante
        $this->estudante = new Estudante($this->db);
    }
  
}


?>