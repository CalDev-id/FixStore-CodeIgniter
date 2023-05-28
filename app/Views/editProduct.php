<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form method="post" action="/product/update">
    <input type="hidden" name="id" value="<?= $order['id']; ?>">
        <label for="name">Name:</label>
        <input value="<?= $order['item_name']; ?>" type="text" name="item_name" id="name" required><br>

        <label for="description">Description:</label>
        <textarea name="item_image" id="description"> <?= $order['item_image']; ?></textarea><br>

        <label for="price">Price:</label>
        <input value="<?= $order['price']; ?>" type="number" name="price" id="price" required><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>