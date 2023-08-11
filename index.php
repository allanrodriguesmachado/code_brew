<?php

use App\Database\Connection;

require_once __DIR__ . "/vendor/autoload.php";

$conn = Connection::instanceConnect();
$query = $conn->query('SELECT * FROM users LIMIT 3');
$query->fetch(PDO::FETCH_ASSOC);
    while ($stt = $query->fetchAll()) {
        var_dump($stt);
    }