<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Pengguna</title>
</head>
<body>
    <h2>Registrasi Pengguna</h2>

    <?php if (isset($validation)): ?>
        <div class="validation_errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/register" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>

        <button type="submit">Register</button>
    </form>
</body>
</html>