<?= $this->extend('layout/Template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

            <!-- Informasi Siswa -->
            <div class="card mt-2">
                <div class="card-body text-center">
                    <h3>Jadwal Kegiatan TK Yayasan Beribu 2024/2025</h3>
                </div>
            </div>

            <!-- Jadwal Hari Senin -->
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">Senin</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal_senin as $jsn) : ?>
                                    <tr>
                                        <td><?= $jsn->nama_kegiatan ?? ""; ?></td>
                                        <td><?= $jsn->jam_mulai ?? ""; ?></td>
                                        <td><?= $jsn->jam_selesai ?? ""; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Jadwal Hari Selasa -->
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">Selasa</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal_selasa as $jsl) : ?>
                                    <tr>
                                        <td><?= $jsl->nama_kegiatan ?? ""; ?></td>
                                        <td><?= $jsl->jam_mulai ?? ""; ?></td>
                                        <td><?= $jsl->jam_selesai ?? ""; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Jadwal Hari Rabu -->
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">Rabu</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal_rabu as $jrb) : ?>
                                    <tr>
                                        <td><?= $jrb->nama_kegiatan ?? ""; ?></td>
                                        <td><?= $jrb->jam_mulai ?? ""; ?></td>
                                        <td><?= $jrb->jam_selesai ?? ""; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Jadwal Hari Kamis -->
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">Kamis</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal_kamis as $jkm) : ?>
                                    <tr>
                                        <td><?= $jkm->nama_kegiatan ?? ""; ?></td>
                                        <td><?= $jkm->jam_mulai ?? ""; ?></td>
                                        <td><?= $jkm->jam_selesai ?? ""; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Jadwal Hari Jumat -->
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title">Jumat</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal_jumat as $jjm) : ?>
                                    <tr>
                                        <td><?= $jjm->nama_kegiatan ?? ""; ?></td>
                                        <td><?= $jjm->jam_mulai ?? ""; ?></td>
                                        <td><?= $jjm->jam_selesai ?? ""; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    /* Gaya CSS tambahan */
    .card {
        border: 2px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .card-body {
        padding: 20px;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
</style>

<?= $this->endSection(); ?>