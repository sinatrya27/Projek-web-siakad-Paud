<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form Tambah Data Pencapaian</h2>
            <form action="/admin/save_pencapaian" method="post">
                <!-- <div class="mb-3">
                    <label for="id_administrasi" class="form-label">Nomor administrasi</label>
                    <input type="text" class="form-control" id="id_administrasi" name="id_administrasi" autofocus required>
                    
                </div> -->
                <div class="form-group">
                    <label for="id"></label>
                    <input type="hidden" class="form-control" name="id">
                </div>

                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <div>
                        <select id="nama_siswa" name="nama_siswa" required autofocus>
                            <?php foreach ($siswa as $s) : ?>
                                <option value="<?= $s['nama'] ?>"><?= $s['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="id_indikator" class="form-label">Id Indikator</label>
                    <div>
                        <select id="id_indikator" name="id_indikator" required>
                            <?php foreach ($indikator as $ind) : ?>
                                <option value="<?= $ind['id_indikator'] ?>"><?= $ind['id_indikator'] ?> : <?= $ind['indikator'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="level_pencapaian" class="form-label">Level Pencapaian</label>
                    <select class="form-control" id="level_pencapaian" name="level_pencapaian">
                        <option value="BSB">BSB</option>
                        <option value="MB">MB</option>
                        <option value="BSH">BSH</option>
                        <option value="SH">SH</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>