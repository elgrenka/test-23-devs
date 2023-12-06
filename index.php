<?php

require_once('db.php');

$page    = isset($_GET['page']) ? intval($_GET['page']) : 1;
$perPage = 4;

$totalMessages = getTotalMessages();
$totalPages    = ceil($totalMessages / $perPage);

$messages = getMessages($page, $perPage);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список сообщений</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<table class="table table-bordered caption-top table-hover mx-auto">
    <caption>Список сообщений</caption>
    <thead>
    <tr class="table-primary">
        <th>№</th>
        <th>Заголовок сообщения</th>
        <th>Краткое содержание</th>
        <th>Редактировать</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($messages as $message): ?>
        <tr class="table-secondary">
            <td><?= $message['id']; ?></td>
            <td><?= $message['title']; ?></td>
            <td>
                <a href="view_message.php?id=<?= $message['id']; ?>"
                   target="_blank">
                    <?= substr($message['body'], 0, 100) . ' ...'; ?>
                </a>
            </td>
            <td class="text-primary">
                <a href="edit_message.php?id=<?= $message['id']; ?>">Редактировать</a>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<ul class="pagination justify-content-center">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <li class="page-item"><a class="page-link"
                                 href="?page=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endfor; ?>
</ul>
<br>

<h2 class="fw-bold ms-4">Добавить сообщение</h2>
<form class="m-4 w-50" action="add_message.php" method="POST">
    <label class="form-label" for="title">Заголовок:</label>
    <input class="form-control" type="text" id="title" name="title" required><br>

    <label class="form-label" for="author">Автор:</label>
    <input class="form-control" type="text" id="author" name="author" required><br>

    <label class="form-label" for="full_content">Полное содержание:</label>
    <textarea class="form-control" id="full_content" name="full_content" rows="8" required></textarea><br>

    <label class="form-label" for="short_content">Краткое содержание:</label>
    <textarea class="form-control" id="short_content" name="short_content" rows="4" disabled></textarea><br>

    <button class="btn btn-lg btn-primary" type="submit">Добавить сообщение</button>
</form>

<script src="script.js"></script>
</body>
</html>
