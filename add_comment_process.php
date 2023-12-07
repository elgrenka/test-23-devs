<?php

require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username    = $_POST['username'];
    $commentText = $_POST['comment'];
    $messageId   = $_POST['message_id'];

    $sql = $conn->prepare(
        "INSERT INTO `comments` (`messageId`, `name`, `body`) VALUES (?, ?, ?)"
    );
    $sql->bind_param("iss", $messageId, $username, $commentText);
    $sql->execute();

    // Проверяем, добавился ли комментарий
    if ($sql->affected_rows > 0) {
        header('Location: view_message.php?id=' . $messageId);
    } else {
        echo "Не удалось добавить комментарий" . $conn->error;
    }
}
?>


