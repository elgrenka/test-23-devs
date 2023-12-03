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

<table class="table table-bordered caption-top">
    <caption>Список сообщений</caption>
    <thead>
    <tr class="table-primary">
        <th>№</th>
        <th>Заголовок сообщения</th>
        <th>Краткое содержание</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($messages as $message): ?>
        <tr class="table-secondary">
            <td><?= $message['id']; ?></td>
            <td><?= $message['title']; ?></td>
            <td><?= substr($message['body'], 0, 100) . ' ...'; ?></td>
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

</body>
</html>
