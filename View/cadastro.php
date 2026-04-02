<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Novo Aluno</h1>
    <form method="post" action="index.php">
        <p>
            <label>Nome:</label>
            <input type="text" name="nome" required>
        </p>
        <p>
            <label>E-mail:</label>
            <input type="text" name="email" required>
        </p>
        <p>
            <label>Matrícula:</label>
            <input type="text" name="matriucla" required>
        </p>

        <button type="submit">Salvar Aluno</button>
        <a href="index.php">Voltar para a lista</a>
    </form>
    
</body>
</html>