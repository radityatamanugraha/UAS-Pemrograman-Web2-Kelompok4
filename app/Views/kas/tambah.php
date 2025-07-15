<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    input.form-control,
    select.form-select,
    textarea.form-control {
        border: 1px solid #000 !important;
        box-shadow: none !important;
    }
</style>

<div class="container mt-1">
    <div class="bg-secondary text-white rounded py-3 px-4 mb-4 w-100 text-center">
        <h3 class="mb-0"><strong>Tambah iuran Kas</strong></h3>
    </div>
    <form action="/kas/simpan" method="post">
        <div class="mb-3">
            <label for="tanggal" class="form-label fw-bold">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Jenis</label>
            <select name="jenis" class="form-select" required>
                <option value="" disabled selected>Pilih jenis</option>
                <option value="masuk">Masuk</option>
                <option value="keluar">Keluar</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label fw-bold">Nama Warga dan Keterangan iuran</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label fw-bold">Jumlah (Rp)</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary fw-bold">Simpan</button>
        <a href="/kas" class="btn btn-secondary fw-bold">Batal</a>
    </form>
</div>

<?= $this->endSection() ?>