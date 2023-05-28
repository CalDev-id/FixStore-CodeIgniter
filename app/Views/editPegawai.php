<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
</head>
<body>
    <h1>Edit Pegawai</h1>
    <form method="post" action="/Pegawai/update">
    <input type="hidden" name="id" value="<?= $order['id']; ?>">

        <label for="name">Name:</label>
        <input value="<?= $order['name']; ?>" type="text" name="name" id="name" required><br>

        <label for="name">Address:</label>
        <input value="<?= $order['address']; ?>" type="text" name="address" id="name" required><br>

        <label for="price">Age:</label>
        <input value="<?= $order['age']; ?>" type="number" name="age" id="price" required><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>