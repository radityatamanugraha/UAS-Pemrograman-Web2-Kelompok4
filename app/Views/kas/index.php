<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Konten HTML -->
<div class="mb-3">
    <div class="bg-secondary text-white rounded text-center fw-bold py-2 px-4 mb-3 fs-3" style="width: 100%;">
        Dashboard Kas RT
    </div>

    <a href="/kas/tambah" class="btn btn-success fw-bold">+ Tambah iuran</a>
</div>


<table class="table table-bordered">
    <tr>
        <th>Tanggal</th>
        <th>Jenis</th>
        <th>Nama Warga dan Keterangan iuran</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($kas as $row): ?>
        <tr>
            <td><?= $row['tanggal'] ?></td>
            <td><?= ucfirst($row['jenis']) ?></td>
            <td><?= $row['keterangan'] ?></td>
            <td>Rp <?= number_format($row['jumlah']) ?></td>
            <td>
                <a href="/kas/edit/<?= $row['id'] ?>" class="btn btn-warning btn-sm fw-bold">Edit</a>
                <a href="/kas/hapus/<?= $row['id'] ?>" onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm fw-bold">Hapus</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
</div>

<?= $this->endSection() ?>