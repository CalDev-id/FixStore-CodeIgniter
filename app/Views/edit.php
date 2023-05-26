<!-- app/Views/orders/edit.php -->

<h1>Edit Pesanan</h1>

<form action="/orders/update" method="POST">
    <input type="hidden" name="id" value="<?= $order['id']; ?>">

    <label for="customer_name">Nama Pelanggan</label>
    <input type="text" name="customer_name" id="customer_name" value="<?= $order['customer_name']; ?>">

    <label for="product_name">Nama Produk</label>
    <input type="text" name="product_name" id="product_name" value="<?= $order['product_name']; ?>">

    <label for="quantity">Jumlah</label>
    <input type="number" name="quantity" id="quantity" value="<?= $order['quantity']; ?>">

    <input type="submit" value="Simpan">
</form>