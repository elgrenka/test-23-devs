<?php

require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author      = $_POST['author'];
    $title       = $_POST['title'];
    $fullContent = $_POST['full_content'];

    $sql = $conn->prepare(
        "INSERT INTO `messages` (`author`, `title`, `body`) VALUES (?, ?, ?)"
    );
    $sql->bind_param("sss", $author, $title, $fullContent);
    $sql->execute();
}

header("Location: index.php");
?>


