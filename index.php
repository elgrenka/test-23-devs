<?php
// Код для подключения к базе данных

// Определение количества сообщений на одной странице
$messagesPerPage = 10;

// Получение номера текущей страницы
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Расчет смещения для запроса к базе данных
$offset = ($current_page - 1) * $messagesPerPage;

// SQL-запрос для получения сообщений с учетом постраничного вывода
$query = "SELECT * FROM messages LIMIT $offset, $messagesPerPage";
$result = mysqli_query($connection, $query);

// Отображение сообщений
while ($row = mysqli_fetch_assoc($result)) {
    // Вывод информации о сообщении
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p>' . $row['short_content'] . '</p>';
}

// Код для создания ссылок на следующие и предыдущие страницы
// ...

// Закрытие соединения с базой данных
mysqli_close($connection);
?>

