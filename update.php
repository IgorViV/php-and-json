<?php
include 'partials/header.php';
require_once __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    echo 'Not found id';
    exit();
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!isset($user)) {
    include 'partials/not_found.php';
    exit();
}

$errors = [
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'website' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user,$errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        uploadImage($_FILES['picture'], $user);
        header("Location: index.php");
    }
}

?>

<?php include '_form.php'; ?>

<?php include 'partials/header.php'; ?>