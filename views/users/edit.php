<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/admin/users/edit?id=<?= $user->id ?>" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="<?= htmlspecialchars($user->name) ?>" name="name" type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="<?= htmlspecialchars($user->email) ?>" name="email" type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New password (leave empty to keep the old one)</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
