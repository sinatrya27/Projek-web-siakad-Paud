<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Form Tambah Jadwal</h2>
            <form action="<?= base_url('admin/save_jadwal'); ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="id_jadwal">ID Jadwal</label>
                    <input type="text" class="form-control" name="id_jadwal" required>
                </div>

                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <select class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                        <option value="">Pilih Kegiatan</option>
                        <?php foreach ($kegiatan as $kg) : ?>
                            <option value="<?= $kg['nama_kegiatan'] ?>" data-id="<?= $kg['id_kegiatan'] ?>"><?= $kg['nama_kegiatan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <input type="hidden" name="id_kegiatan" id="id_kegiatan">

                <script>
                    document.getElementById('nama_kegiatan').addEventListener('change', function() {
                        var selectedOption = this.options[this.selectedIndex];
                        document.getElementById('id_kegiatan').value = selectedOption.getAttribute('data-id');
                    });
                </script>

                <!-- akhir dari foreign key -->

                <div class="form-group">
                    <label for="hari">Hari</label>
                    <select class="form-control" name="hari" required>
                        <option value="">Pilih Hari</option>
                        <option value="Minggu">Minggu</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jam_mulai">Jam Mulai</label>
                    <input type="time" class="form-control" name="jam_mulai" required>
                </div>
                <div class="form-group">
                    <label for="jam_selesai">Jam Selesai</label>
                    <input type="time" class="form-control" name="jam_selesai" required>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>