<?php

session_start();

$data = ($_SESSION['tasks'][$_GET['key']]);

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

    <div class="details-container">

        <div class="header">
            <h1><?php echo $data['task_name']; ?></h1>
        </div>
        <div class="row">
            <div class="details">
                <dl>
                    <dt>Descrição da tarefa:</dt>
                    <dd><?php echo $data['task_description'] ?></dd>
                    <dt>Data da tarefa:</dt>
                    <dd><?php echo $data['task_date'] ?></dd>
                </dl>
            </div>
            <div class="image">
                <img src="uploads/<?php echo $data['task_image'] ?>" alt="Imagem da tarefa">
            </div>
        </div>
        <div class="footer">

            <p>Desenvolvido por Gustavo Motta/ Com uma ajudinha né kkkk</p>
        </div>

    </div>