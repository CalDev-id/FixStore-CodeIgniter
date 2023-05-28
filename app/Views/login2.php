<!DOCTYPE html>
<html>
<head>
    <title>Login Pengguna</title>
</head>
<body>
    <h2>Login Pengguna</h2>

    <?php if (isset($error)): ?>
        <div class="error">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <form action="/login" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Login</button>
    </form>
</body>
</html>