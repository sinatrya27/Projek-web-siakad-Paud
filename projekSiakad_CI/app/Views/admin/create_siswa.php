<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>


<div class="container">
    <div class="row">
        <div class="col">


            <h2 class="my-3">Form Tambah Data Siswa</h2>
            <form action="/admin/save_siswa" method="post">

                <!-- mulai dari sini untuk tambah atau kurang form -->
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>

                    <select class="form-control" id="username" name="username" required>
                        <?php foreach ($users as $us) : ?>
                            <option value="<?= $us['username'] ?>"><?= $us['username'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- </div> -->
                </div>
                <div class="mb-3">
                    <label for="id_siswa" class="form-label">No Induk</label>
                    <input type="text" class="form-control" id="id_siswa" name="id_siswa" autofocus required>

                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="datetime-local" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>

                <div class="form-group">
                    <label for="id_kelas" class="form-label">Id Kelas</label>
                    <div style="width: 100%;"><!-- <input type="text" class="form-control" id="id_kelas" name="id_kelas"> -->
                        <select class="form-control" id="id_kelas" name="id_kelas" required>
                            <?php foreach ($kelas as $k) : ?>
                                <option value="<?= $k['id_kelas'] ?>"><?= $k['id_kelas'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>