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
                    <input class="form-control <?= $errors['name'] ? 'is-invalid' : ''; ?>" id="name" type="text" name="name" value="<?= $user['name'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $errors['name'] ?>
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control <?= $errors['username'] ? 'is-invalid' : ''; ?>" id="username" type="text" name="username" value="<?= $user['username'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $errors['username'] ?>
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control <?= $errors['email'] ? 'is-invalid' : ''; ?>" id="email" type="email" name="email" value="<?= $user['email'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?>
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control <?= $errors['phone'] ? 'is-invalid' : ''; ?>" id="phone" type="text" name="phone" value="<?= $user['phone'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $errors['phone'] ?>
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label class="form-label" for="website">Website</label>
                    <input class="form-control <?= $errors['website'] ? 'is-invalid' : ''; ?>" id="website" type="text" name="website" value="<?= $user['website'] ?? '' ?>">
                    <div class="invalid-feedback">
                        <?= $errors['website'] ?>
                    </div>
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

