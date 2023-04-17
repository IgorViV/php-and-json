<?php
include 'partials/header.php';
require_once __DIR__ . '/users/users.php';
$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'website' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = createUser($_POST);

    uploadImage($_FILES['picture'], $user);

    header("Location: index.php");
}

?>

<?php include '_form.php'; ?>

<?php include 'partials/footer.php'?>
