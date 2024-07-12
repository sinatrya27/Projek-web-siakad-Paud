<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>


<div class="container">
    <div class="row">
        <div class="col">


            <h2 class="my-3">Form Tambah Data Kalender Akademik</h2>
            <form action="/admin/save_kalender" method="post">

                <!-- mulai dari sini untuk tambah atau kurang form -->

                <div class="mb-3">
                    <label for="id" class="form-label"></label>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $kalender['id']; ?>">
                </div>

                <!-- <div class="mb-3">
                    <label for="bulan" class="form-label">bulan</label>
                    <input type="text" class="form-control" id="bulan" name="bulan" value="<?= $kalender['bulan']; ?>" required autofocus>
                </div> -->
                <div class="mb-3">
                    <label for="bulan" class="form-label">Bulan</label>
                    <select class="form-control" id="bulan" name="bulan" required autofocus>
                        <option value="">Pilih Bulan</option>
                        <option value="Januari" <?= ($kalender['bulan'] == 'Januari') ? 'selected' : ''; ?>>Januari</option>
                        <option value="Februari" <?= ($kalender['bulan'] == 'Februari') ? 'selected' : ''; ?>>Februari</option>
                        <option value="Maret" <?= ($kalender['bulan'] == 'Maret') ? 'selected' : ''; ?>>Maret</option>
                        <option value="April" <?= ($kalender['bulan'] == 'April') ? 'selected' : ''; ?>>April</option>
                        <option value="Mei" <?= ($kalender['bulan'] == 'Mei') ? 'selected' : ''; ?>>Mei</option>
                        <option value="Juni" <?= ($kalender['bulan'] == 'Juni') ? 'selected' : ''; ?>>Juni</option>
                        <option value="Juli" <?= ($kalender['bulan'] == 'Juli') ? 'selected' : ''; ?>>Juli</option>
                        <option value="Agustus" <?= ($kalender['bulan'] == 'Agustus') ? 'selected' : ''; ?>>Agustus</option>
                        <option value="September" <?= ($kalender['bulan'] == 'September') ? 'selected' : ''; ?>>September</option>
                        <option value="Oktober" <?= ($kalender['bulan'] == 'Oktober') ? 'selected' : ''; ?>>Oktober</option>
                        <option value="November" <?= ($kalender['bulan'] == 'November') ? 'selected' : ''; ?>>November</option>
                        <option value="Desember" <?= ($kalender['bulan'] == 'Desember') ? 'selected' : ''; ?>>Desember</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?= $kalender['tanggal_mulai']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_berakhir" class="form-label">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" value="<?= $kalender['tanggal_berakhir']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="uraian_kegiatan" class="form-label">Uraian Kegiatan</label>
                    <input type="text" class="form-control" id="uraian_kegiatan" name="uraian_kegiatan" value="<?= $kalender['uraian_kegiatan']; ?>" required>
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/data_siswa" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>