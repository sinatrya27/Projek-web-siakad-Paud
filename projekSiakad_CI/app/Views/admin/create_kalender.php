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
                    <input type="hidden" class="form-control" id="id" name="id" autofocus>
                </div>

                <!-- <div class="mb-3">
                    <label for="bulan" class="form-label">bulan</label>
                    <input type="text" class="form-control" id="bulan" name="bulan" required>
                </div> -->
                <div class="mb-3">
                    <label for="bulan" class="form-label">Bulan</label>
                    <select class="form-control" id="bulan" name="bulan" required>
                        <option value="">Pilih Bulan</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_berakhir" class="form-label">Tanggal akhir</label>
                    <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" required>
                </div>

                <div class="mb-3">
                    <label for="uraian_kegiatan" class="form-label">Uraian kegiatan</label>
                    <input type="text" class="form-control" id="uraian_kegiatan" name="uraian_kegiatan" required>
                </div>



                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>