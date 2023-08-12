<?php

use App\Model\UserModel;

require_once __DIR__ . "/vendor/autoload.php";

$model = new UserModel();
$user = $model->load(4);



//if ($user != $model->load(4)) {
//    $user->first_name = "Allan";
//    $user->last_name = "Rodrigues";
//    $user->email = "allan@php.com.br";
//    $user->save();
//    echo "<p class='trigger warning'>Atualizado!</p>";
//} else {
//    echo "<p class='trigger accept'>Já atualizado!</p>";
//}