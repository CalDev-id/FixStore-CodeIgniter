<!-- app/Views/orders/create.php -->

<h1>Tambah Pesanan</h1>

<form action="/orders/store" method="POST">
    <label for="customer_name">Nama Pelanggan</label>
    <input type="text" name="customer_name" id="customer_name">

    <label for="product_name">Nama Produk</label>
    <input type="text" name="product_name" id="product_name">

    <label for="quantity">Jumlah</label>
    <input type="number" name="quantity" id="quantity">

    <input type="submit" value="Simpan">
</form>