<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>

<head>
    <!-- Tautkan ke Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
</head>


<div class="container">
    <div class="row">
        <div class="col">


            <h2 class="my-3">Form Pengumuman</h2>
            <form action="/admin/save_artikel" method="post">

                <!-- mulai dari sini untuk tambah atau kurang form -->

                <div class="mb-3">
                    <label for="id" class="form-label"></label>
                    <input type="hidden" class="form-control" id="id" name="id" autofocus>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label"></label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" autofocus>
                </div>

                <div class="mb-3">
                    <label for="judul" class="form-label">judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>

                <!-- <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" >
                </div>
                <div class="mb-3">
                    <label for="tanggal_berakhir" class="form-label">Tanggal akhir</label>
                    <input type="date" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" >
                </div> -->

                <div class="mb-3">
                    <label for="isi" class="form-label">Content</label>
                    <input type="text" class="form-control" id="isi" name="isi">
                </div>



                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>