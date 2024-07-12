<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        .mx-5 {
            margin-left: 3rem !important;
            margin-right: 3rem !important;
        }
    </style>
</head>

<body>
    <div class="mx-5">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Pencapaian Siswa</h1>
                <a href="/admin/create_pencapaian" class="btn btn-primary mt-2 mb-2">Tambah Data Pencapaian</a>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>

                <!-- Search bar -->
                <input type="text" id="searchBar" class="form-control mb-3" placeholder="Cari nama siswa...">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">ID Indikator</th>
                            <th scope="col">Level Pencapaian</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <?php $i = 1;
                        foreach ($pencapaian as $pc) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $pc['nama_siswa']; ?></td>
                                <td><?= $pc['id_indikator']; ?></td>
                                <td><?= $pc['level_pencapaian']; ?></td>
                                <td class="text-center">
                                    <a href="/admin/pencapaian/edit/<?= $pc['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/admin/pencapaian/delete/<?= $pc['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('searchBar').addEventListener('keyup', function() {
            var searchValue = this.value.toLowerCase();
            var tableRows = document.querySelectorAll('#tableBody tr');

            tableRows.forEach(function(row) {
                var namaSiswa = row.cells[1].textContent.toLowerCase();
                if (namaSiswa.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
<?= $this->endSection(); ?>