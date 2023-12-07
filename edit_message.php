<?php
require_once('db.php');

$messageId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author = $_POST['author'];
    $title = $_POST['title'];
    $fullContent = $_POST['full_content'];

    $sql = $conn->prepare("UPDATE `messages` SET `author`=?, `title`=?, `body`=? WHERE id=$messageId");
    $sql->bind_param("sss", $author, $title, $fullContent);
    $sql->execute();

    if ($sql->execute() === TRUE) {
        echo "<div class='ms-4 mt-4'>Сообщение успешно отредактировано.
                  <a class='text-secondary' href='view_message.php?id=$messageId'>
                      <small>Просмотреть</small>
                  </a>
              </div>";
    } else {
        echo "Ошибка при редактировании сообщения: " . $conn->error;
    }
} else {
    // Запрос на получение данных существующего сообщения
    $sql = "SELECT * FROM `messages` WHERE id=$messageId";
    $result = $conn->query($sql);
    $message = $result->fetch_assoc();

    if (!$message) {
        die("Сообщение не найдено");
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать сообщение</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="ms-4 mt-3"><a href="index.php">На главную</a></div>
<h2 class="fw-bold ms-4 mt-3">Редактировать сообщение</h2>
<form class="m-4 w-50" action="edit_message.php?id=<?= $messageId; ?>" method="POST">
    <label class="form-label" for="author">Автор:</label>
    <input class="form-control" type="text" name="author" id="author" value="<?= $message['author']; ?>" required><br>

    <label class="form-label" for="title">Заголовок сообщения:</label>
    <input class="form-control" type="text" name="title" id="title" value="<?= $message['title']; ?>" required><br>

    <label class="form-label" for="full_content">Полное содержание:</label>
    <textarea class="form-control" name="full_content" id="full_content" rows="4" required><?= $message['body']; ?></textarea><br>

    <button class="btn btn-lg btn-primary" type="submit">Сохранить изменения</button>
</form>

</body>
</html>

