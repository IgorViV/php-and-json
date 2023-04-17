<?php
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    User update: <b><?= $user['name'] ?></b>
                <?php else: ?>
                    Create new user
                <?php endif; ?>
            </h3>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3 form-group">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" id="name" type="text" name="name" value="<?= $user['name'] ?? '' ?>">
                </div>
                <div class="mb-3 form-group">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" id="username" type="text" name="username" value="<?= $user['username'] ?? '' ?>">
                </div>
                <div class="mb-3 form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" id="email" type="email" name="email" value="<?= $user['email'] ?? '' ?>">
                </div>
                <div class="mb-3 form-group">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control" id="phone" type="text" name="phone" value="<?= $user['phone'] ?? '' ?>">
                </div>
                <div class="mb-3 form-group">
                    <label class="form-label" for="website">Website</label>
                    <input class="form-control" id="website" type="text" name="website" value="<?= $user['website'] ?? '' ?>">
                </div>
                <div class="mb-3 form-group">
                    <label class="form-label" for="picture">Image</label>
                    <input class="form-control form-control-file" id="picture" type="file" name="picture">
                </div>

                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

