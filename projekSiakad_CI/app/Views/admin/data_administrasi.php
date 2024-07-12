<?= $this->extend('layout/Template'); ?>


<?= $this->section('content'); ?>
<div class="mx-5">
    <div class="col">
        <div class="row">

            <head>

                <title>Table Example</title>
            </head>

            <?php
            function formatRupiah($number)
            {
                return 'Rp ' . number_format($number, 0, ',', '.');
            }

            // Inisialisasi total bulanan
            $total = [
                'juli' => 0,
                'agustus' => 0,
                'september' => 0,
                'oktober' => 0,
                'november' => 0,
                'desember' => 0,
                'januari' => 0,
                'februari' => 0,
                'maret' => 0,
                'april' => 0,
                'mei' => 0,
                'juni' => 0
            ];

            // Hitung total bulanan
            foreach ($administrasi as $ad) {
                $total['juli'] += $ad['juli'];
                $total['agustus'] += $ad['agustus'];
                $total['september'] += $ad['september'];
                $total['oktober'] += $ad['oktober'];
                $total['november'] += $ad['november'];
                $total['desember'] += $ad['desember'];
                $total['januari'] += $ad['januari'];
                $total['februari'] += $ad['februari'];
                $total['maret'] += $ad['maret'];
                $total['april'] += $ad['april'];
                $total['mei'] += $ad['mei'];
                $total['juni'] += $ad['juni'];
            }
            ?>

            <body>
                <div>
                    <h1 class="MT-2">Administrasi Siswa 2024/2025</h1>
                    <a href="/admin/create_administrasi" class="btn btn-primary" style="margin-top: 10px;">Tambah Data Administrasi</a>
                </div>
                <table class="table table-bordered" style="margin-top: 20px;">
                    <thead>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert" style="width: 100%; margin-top: 20px; margin-bottom: 0%;">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Juli</th>
                            <th scope="col">Agustus</th>
                            <th scope="col">September</th>
                            <th scope="col">Oktober</th>
                            <th scope="col">November</th>
                            <th scope="col">Desember</th>
                            <th scope="col">Januari</th>
                            <th scope="col">Februari</th>
                            <th scope="col">Maret</th>
                            <th scope="col">April</th>
                            <th scope="col">Mei</th>
                            <th scope="col">Juni</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($administrasi as $ad) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $ad['nama_siswa']; ?></td>
                                <td><?= formatRupiah($ad['juli']); ?></td>
                                <td><?= formatRupiah($ad['agustus']); ?></td>
                                <td><?= formatRupiah($ad['september']); ?></td>
                                <td><?= formatRupiah($ad['oktober']); ?></td>
                                <td><?= formatRupiah($ad['november']); ?></td>
                                <td><?= formatRupiah($ad['desember']); ?></td>
                                <td><?= formatRupiah($ad['januari']); ?></td>
                                <td><?= formatRupiah($ad['februari']); ?></td>
                                <td><?= formatRupiah($ad['maret']); ?></td>
                                <td><?= formatRupiah($ad['april']); ?></td>
                                <td><?= formatRupiah($ad['mei']); ?></td>
                                <td><?= formatRupiah($ad['juni']); ?></td>
                                <td style="text-align: center;">
                                    <a href="/admin/administrasi/edit/<?= $ad['id_administrasi']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="/admin/administrasi/delete/<?= $ad['id_administrasi']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


                <h4 class="pt-5">Total Administrasi per Bulan</h4>
                <!-- Tabel total per bulan -->
                <table class="table table-bordered" style="margin-top: 20px;">
                    <thead>
                        <tr>
                            <th scope="col"> Juli</th>
                            <th scope="col"> Agustus</th>
                            <th scope="col"> September</th>
                            <th scope="col"> Oktober</th>
                            <th scope="col"> November</th>
                            <th scope="col"> Desember</th>
                            <th scope="col"> Januari</th>
                            <th scope="col"> Februari</th>
                            <th scope="col"> Maret</th>
                            <th scope="col"> April</th>
                            <th scope="col"> Mei</th>
                            <th scope="col"> Juni</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= formatRupiah($total['juli']); ?></td>
                            <td><?= formatRupiah($total['agustus']); ?></td>
                            <td><?= formatRupiah($total['september']); ?></td>
                            <td><?= formatRupiah($total['oktober']); ?></td>
                            <td><?= formatRupiah($total['november']); ?></td>
                            <td><?= formatRupiah($total['desember']); ?></td>
                            <td><?= formatRupiah($total['januari']); ?></td>
                            <td><?= formatRupiah($total['februari']); ?></td>
                            <td><?= formatRupiah($total['maret']); ?></td>
                            <td><?= formatRupiah($total['april']); ?></td>
                            <td><?= formatRupiah($total['mei']); ?></td>
                            <td><?= formatRupiah($total['juni']); ?></td>
                        </tr>
                    </tbody>
                </table>
            </body>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>