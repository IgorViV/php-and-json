<?php
include 'partials/header.php';
require_once __DIR__ . '/users/users.php';

if (!isset($_POST['id'])) {
    echo 'Not found id';
    exit();
}
$userId = $_POST['id'];
deleteUser($userId);

header("Location: index.php");