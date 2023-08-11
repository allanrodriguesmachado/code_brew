<?php

use App\Database\Connection;

require_once __DIR__ . "/vendor/autoload.php";

$model = new \App\Model\UserModel();
$user = $model->load(1);
//$user = $model->find('');
//$user = $model->all();

var_dump($user, "{$user->id}");
//var_dump($user);

//$conn = Connection::instanceConnect();
//
//$query = $conn->query('SELECT * FROM users LIMIT 3');
//$query->fetch(PDO::FETCH_ASSOC);
//
//    while ($stt = $query->fetchAll()) {
//        var_dump($stt);
//    }
