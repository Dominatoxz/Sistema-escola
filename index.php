<?php 

require_once './Controller/EstudanteController.php';

$app = new EstudanteController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $app->salvar(); //salvar dados do banco
} else {
    if ($action === 'novo') {
        require_once './View/cadastro.php'; //mostrar formulário
    } else {
        $app -> index(); //listar dados da model
    }
}

?>