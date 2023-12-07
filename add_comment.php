<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить комментарий</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="ms-4 mt-3"><a href="index.php">На главную</a></div>
<h2 class="fw-bold m-4">Добавить комментарий</h2>

<form class="m-4 w-50" action="add_comment_process.php" method="POST">
    <label class="form-label" for="username">Ваше имя:</label>
    <input class="form-control" type="text" id="username" name="username"
           required><br>

    <label class="form-label" for="comment">Комментарий:</label>
    <textarea class="form-control" name="comment" id="comment" rows="4"
              required></textarea><br>

    <input type="hidden" name="message_id" value="<?= $_GET['id']; ?>">

    <button class="btn btn-lg btn-primary" type="submit">Добавить комментарий
    </button>
</form>

</body>
</html>


