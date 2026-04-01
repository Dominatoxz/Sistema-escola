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

    /*Ação*/
    //listar todos os alunos na tela inicial
    public function index() {
        //pede lista de dados ao Model
        $alunos = $this->estudante->buscarTodos();

        require_once 'index.php';
    } 

    public function salvar() {
        //verifica se o fomulário foi enviado via POST
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dados = [
                'nome' => htmlspecialchars(trim($_POST['nome']), ENT_QUOTES, 'UTF-8'),
                'email' => htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8'),
                'matricula' => htmlspecialchars(trim($_POST['matricula']), ENT_QUOTES, 'UTF-8')
            ];
        }
    }
  
}


?>