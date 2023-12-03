<?php
require_once 'config.php';

$hostname = DB_HOSTNAME;
$username = DB_USERNAME;
$password = DB_PASSWORD;
$dbname   = DB_NAME;

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getMessages($page, $perPage) {
    global $conn;
    $start = ($page - 1) * $perPage;
    $sql = "SELECT * FROM `messages` LIMIT $start, $perPage";
    $result = $conn->query($sql);
    $messages = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $messages[] = $row;
        }
    }

    return $messages;
}

function getTotalMessages() {
    global $conn;
    $sql = "SELECT COUNT(id) as total FROM `messages`";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

//$conn->close();

?>


