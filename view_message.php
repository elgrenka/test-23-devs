<?php

require_once('db.php');

$messageId = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql     = "SELECT * FROM messages WHERE `id` = $messageId";
$result  = $conn->query($sql);
$message = $result->fetch_assoc();

if ( ! $message) {
    die("Сообщение не найдено");
}

$comments = getComments($messageId);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $message['title']; ?></title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<table class="table table-bordered caption-top table-hover mx-auto">
    <caption>Сообщение</caption>
    <thead>
    <tr class="table-primary">
        <th>Заголовок сообщения</th>
        <th>Полное содержание</th>
        <th>Комментарии</th>
    </tr>
    </thead>
    <tbody>
    <tr class="table-secondary">
        <td><?= $message['title']; ?></td>
        <td><?= $message['body']; ?></td>
        <td>
            <?php foreach ($comments as $comment): ?>
                <b><?= $comment['name']; ?></b>: <?= $comment['body']; ?>
                <br><br>
            <?php endforeach; ?>
        </td>
    </tr>
    </tbody>
</table>

</body>
</html>


