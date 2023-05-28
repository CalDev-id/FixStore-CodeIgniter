
<h1>Daftar Pesanan</h1>

<a href="/pesan">Tambah Pesanan Baru</a>

<table>
    <thead>
        <tr>
            <th>Pelanggan</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order) : ?>
            <tr>
                <td><?= $order['customer_name']; ?></td>
                <td><?= $order['car_name']; ?></td>
                <td><?= $order['address']; ?></td>
                <td>
                    <a href="/orders/edit/<?= $order['id']; ?>">Edit</a>
                    <a href="/orders/delete/<?= $order['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>