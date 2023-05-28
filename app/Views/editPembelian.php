<!DOCTYPE html>
<html>
<head>
    <title>Edit Pembelian</title>
</head>
<body>
    <h1>Edit Pembelian</h1>
    <form method="post" action="/Pembelian/update">
    <input type="hidden" name="id" value="<?= $order['id']; ?>">

        <label for="name">Name:</label>
        <input value="<?= $order['item_name']; ?>" type="text" name="item_name" id="name" required><br>

        <label for="name">Address:</label>
        <input value="<?= $order['address']; ?>" type="text" name="address" id="name" required><br>

        <label for="price">Price:</label>
        <input value="<?= $order['price']; ?>" type="number" name="price" id="price" required><br>

        <label for="qty">QTY:</label>
        <input value="<?= $order['qty']; ?>" type="number" name="qty" id="qty" required><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>