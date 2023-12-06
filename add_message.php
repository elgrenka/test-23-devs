<?php

require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author = $_POST['author'];
    $title = $_POST['title'];
//    $shortContent = $_POST['short_content'];
    $fullContent = $_POST['full_content'];

    $sql = $conn->prepare("INSERT INTO `messages` (`author`, `title`, `body`) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $author, $title, $fullContent);
    $sql->execute();

//    if ($conn->query($sql) === TRUE) {
//        $messageId = $conn->insert_id;
//
//        $commentAuthor = 'Автор';  // Замените на реального автора комментария
//        $commentText = 'Комментарий к добавленному сообщению';  // Замените на реальный текст комментария
//
//        $commentSql = "INSERT INTO comments (message_id, username, comment) VALUES ($messageId, '$commentAuthor', '$commentText')";
//        $conn->query($commentSql);
//
//        echo "Сообщение успешно добавлено. <a href='view_message.php?id=$messageId'>Просмотреть</a>";
//    } else {
//        echo "Ошибка при добавлении сообщения: " . $conn->error;
    }
header("Location: index.php");
?>


