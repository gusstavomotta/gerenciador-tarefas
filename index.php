<?php

session_start();


if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = array();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Gerenciador de Tarefas</h1>
        </div>
        <div class="form">
            <form action="task.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="insert" value="insert">
                <label for="task_name">Tarefa:</label>
                <input type="text" name="task_name" placeholder="Nome da Tarefa">
                <label for="task_description">Descrição da tarefa: </label>
                <input type="text" name="task_description" placeholder="Descrição da tarefa">
                <label for="task_date">Data da tarefa</label>
                <input type="date" name="task_date">
                <label for="task_image">Imagem: </label>
                <input type="file" name="task_image">
                <button type="submit">Cadastrar</button>
            </form>
            <?php
            if (isset($_SESSION['message'])) {
                echo "<p style='color: #e4e006';>" . $_SESSION['message'] . "</p>";
                unset($_SESSION['message']);
            }
            ?>
        </div>
        <div class=" separator">

        </div>
        <div class="list-tasks">
            <?php
            if (isset($_SESSION['tasks'])) {

                echo "<ul>";
                foreach ($_SESSION['tasks'] as $key => $task) {
                    echo "<li>
                            <a href='details.php?key=$key'>" . $task['task_name'] . "</a>
                            <button type='button' class='btn-clear' onclick='deletar$key()'>Remover</button>
                            <script>
                                function deletar$key(){
                                    if ( confirm('Confirmar remoção?') ) {
                                        window.location = 'http://localhost:8000/task.php?key=$key';
                                    }
                                    return false;
                                }
                            </script>
                        </li>";
                }

                echo "<ul>";
            }
            ?>
        </div>
        <div class="footer">
            <p>Desenvolvido por Gustavo Motta/ Com uma ajudinha né kkkk</p>
        </div>
    </div>
</body>

</html>