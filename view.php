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
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View user: <b><?= $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?= $userId ?>">Update user</a>
            <form style="display: inline-block" action="delete.php" method="post">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <button class="btn btn-danger">Delete user</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Name:</th>
                <td><?= $user['name'] ?></td>
            </tr>
            <tr>
                <th>Username:</th>
                <td><?= $user['username'] ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?= $user['email'] ?></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><?= $user['phone'] ?></td>
            </tr>
            <tr>
                <th>Website:</th>
                <td>
                    <a href="http://<?= $user['website'] ?>" target="_blank"><?= $user['website'] ?></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'partials/header.php'; ?>
