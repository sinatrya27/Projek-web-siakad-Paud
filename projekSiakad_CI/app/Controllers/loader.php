<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;

class loader extends BaseController
{

    public function administrasi()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('siswa');

        // Ambil username pengguna yang sedang login
        $user = user()->username;

        $builder->select('siswa.id_siswa, siswa.username, siswa.nama, administrasi.*');
        $builder->join('administrasi', 'administrasi.nama_siswa = siswa.nama');
        $builder->where('siswa.username', $user);
        $query = $builder->get();

        $data['siswa'] = $query->getRow();

        // Hitung sisa bayar
        $total_biaya = 1800000;
        $total_dibayar = 0;
        $bulan = ['juli', 'agustus', 'september', 'oktober', 'november', 'desember', 'januari', 'februari', 'maret', 'april', 'mei', 'juni'];

        foreach ($bulan as $bln) {
            if (isset($data['siswa']->$bln)) {
                $total_dibayar += $data['siswa']->$bln;
            }
        }

        $data['sisa_bayar'] = $total_biaya - $total_dibayar;


        return view('peta_emas', $data);
    }
    public function pencapaian()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('siswa');

        // Ambil username pengguna yang sedang login
        $user = user()->username;

        $builder->select('siswa.id_siswa, siswa.username, siswa.nama, pencapaian.*,indikator.*');
        $builder->join('pencapaian', 'pencapaian.nama_siswa = siswa.nama');
        $builder->join('indikator', 'indikator.id_indikator = pencapaian.id_indikator');
        $builder->where('siswa.username', $user);
        $query = $builder->get();

        $data['siswa'] = $query->getRow();

        // Ambil semua hasil
        $data['siswa_all'] = $query->getResult();



        return view('jejak_prestasi', $data);
    }
    public function jadwal()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('jadwal');

        $builder->select('jadwal.*, kegiatan.*');
        $builder->join('kegiatan', 'kegiatan.id_kegiatan = jadwal.id_kegiatan');

        // Mengambil jadwal untuk hari Senin
        $builder->where('jadwal.hari', "senin");
        $query = $builder->get();
        $data['jadwal_senin'] = $query->getResult();

        // Mengambil jadwal untuk hari Selasa
        $builder->where('jadwal.hari', "selasa");
        $query = $builder->get();
        $data['jadwal_selasa'] = $query->getResult();

        // Mengambil jadwal untuk hari Rabu
        $builder->where('jadwal.hari', "rabu");
        $query = $builder->get();
        $data['jadwal_rabu'] = $query->getResult();

        // Mengambil jadwal untuk hari Kamis
        $builder->where('jadwal.hari', "kamis");
        $query = $builder->get();
        $data['jadwal_kamis'] = $query->getResult();

        // Kemudian, kembali ambil jadwal untuk hari Selasa (tidak perlu dilakukan dua kali)
        // Anda seharusnya mengambil jadwal untuk hari Rabu di sini
        $builder->where('jadwal.hari', "jumat");
        $query = $builder->get();
        $data['jadwal_jumat'] = $query->getResult();


        return view('petualangan', $data);
    }

    public function beranda()
    {


        // Array nama hari dalam bahasa Indonesia
        $days = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        // Mendapatkan nama hari dalam bahasa Inggris
        $day_in_english = date('l');

        // Mengubah nama hari ke bahasa Indonesia
        $day_in_indonesian = $days[$day_in_english];

        // Koneksi ke database
        $db = \Config\Database::connect();
        $builder = $db->table('jadwal');

        // Memilih jadwal dan kegiatan yang sesuai
        // $builder->select('jadwal.*, kegiatan.*, artikel*');
        // $builder->join('kegiatan', 'kegiatan.id_kegiatan = jadwal.id_kegiatan');
        // $builder->join('atrikel.*')

        // Mengambil jadwal untuk hari ini dalam bahasa Indonesia


        // Query untuk mengambil jadwal hari ini
        $builder = $db->table('jadwal');
        $builder->select('jadwal.*, kegiatan.*');
        $builder->join('kegiatan', 'kegiatan.id_kegiatan = jadwal.id_kegiatan');
        $builder->where('jadwal.hari', $day_in_indonesian);
        $query = $builder->get();
        $data['jadwal_hari_ini'] = $query->getResult();

        // Inisialisasi ulang builder untuk query artikel
        // $builder = $db->table('artikel');
        // $query = $builder->get();
        // $data['artikel'] = $query->getResult();
        $builder = $db->table('artikel');
        $builder->orderBy('tanggal', 'Desc'); // Mengurutkan berdasarkan tanggal_dibuat secara descending (terbaru ke terlama)
        $query = $builder->get();
        $data['artikel'] = $query->getResult();






        // // Load model yang dibutuhkan
        // $artikelModel = new \App\Models\ArtikelModel();
        // // $jadwalModel = new \App\Models\JadwalModel();
        // // $kalenderModel = new \App\Models\KalenderModel();




        // // Ambil data pengumuman
        // $artikel = $artikelModel->orderBy('tanggal', 'DESC')->findAll(3); // Ambil 3 pengumuman terbaru

        // // }
        // // $data['jadwal'] = $this->jadwalModel->where('hari', $hariIni)->findAll();
        // // // dd($jadwal);

        // // // Kirim data ke view
        // $data = [
        //     'artikel' => $artikel,
        // ];

        return view('beranda', $data); // Sesuaikan dengan nama view Anda
    }
}
