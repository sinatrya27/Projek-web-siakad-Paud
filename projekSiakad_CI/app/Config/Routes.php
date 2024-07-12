<?php

use CodeIgniter\Router\RouteCollection;
use Myth\Auth\Config\Auth as AuthConfig;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'loader::beranda');
$routes->get('/petualangan', 'loader::jadwal');
$routes->get('/jejak_prestasi', 'loader::pencapaian');
$routes->get('/peta_emas', 'loader::administrasi');
$routes->get('/admin', 'admin::index');
// $routes->get('/admin/data_kegiatan', 'admin::kegiatan');
// $routes->get('/admin/data_jadwal', 'admin::jadwal');
// $routes->get('/admin/data_nilai', 'admin::nilai');

// routes for data kelas
$routes->get('/admin/data_kelas', 'kelas::index', ['filter' => 'role:Admin']);
$routes->get('/admin/create_kelas', 'kelas::create', ['filter' => 'role:Admin']);
$routes->post('/admin/save_kelas', 'kelas::save', ['filter' => 'role:Admin']);
$routes->get('/admin/kelas/delete/(:any)', 'kelas::delete/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/kelas/edit/(:any)', 'Kelas::edit/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/kelas/update', 'Kelas::update', ['filter' => 'role:Admin']);

// routes for data guru
$routes->get('/admin/data_guru', 'guru::index', ['filter' => 'role:Admin']);
$routes->get('/admin/create_guru', 'guru::create', ['filter' => 'role:Admin']);
$routes->post('/admin/save_guru', 'guru::save', ['filter' => 'role:Admin']);
$routes->get('/admin/guru/delete/(:any)', 'guru::delete/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/guru/edit/(:any)', 'guru::edit/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/guru/update', 'guru::update', ['filter' => 'role:Admin']);

// routes for data siswa
$routes->get('/admin/data_siswa', 'siswa::index', ['filter' => 'role:Admin']);
$routes->get('/admin/create_siswa', 'siswa::create', ['filter' => 'role:Admin']);
$routes->post('/admin/save_siswa', 'siswa::save', ['filter' => 'role:Admin']);
$routes->get('/admin/siswa/delete/(:any)', 'siswa::delete/$1', ['filter' => 'role:Admin']);
$routes->get('/admin/siswa/edit/(:any)', 'siswa::edit/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/siswa/update', 'siswa::update', ['filter' => 'role:Admin']);

// routes for kegiatan
$routes->get('/admin/data_kegiatan', 'kegiatan::index', ['filter' => 'role:Admin']);
$routes->get('/admin/create_kegiatan', 'kegiatan::create', ['filter' => 'role:Admin']);
$routes->post('/admin/save_kegiatan', 'kegiatan::save');
$routes->get('/admin/kegiatan/delete/(:any)', 'kegiatan::delete/$1');
$routes->get('/admin/kegiatan/edit/(:any)', 'kegiatan::edit/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/kegiatan/update', 'kegiatan::update');

// routes for jadwal
$routes->get('/admin/data_jadwal', 'jadwal::index', ['filter' => 'role:Admin']);
$routes->get('/admin/create_jadwal', 'jadwal::create', ['filter' => 'role:Admin']);
$routes->post('/admin/save_jadwal', 'jadwal::save');
$routes->get('/admin/jadwal/delete/(:any)', 'jadwal::delete/$1');
$routes->get('/admin/jadwal/edit/(:any)', 'jadwal::edit/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/jadwal/update', 'jadwal::update');

// routes for administrasi
$routes->get('/admin/data_administrasi', 'administrasi::index', ['filter' => 'role:Admin']);
$routes->get('/admin/create_administrasi', 'administrasi::create', ['filter' => 'role:Admin']);
$routes->post('/admin/save_administrasi', 'administrasi::save');
$routes->get('/admin/administrasi/delete/(:any)', 'administrasi::delete/$1');
$routes->get('/admin/administrasi/edit/(:any)', 'administrasi::edit/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/administrasi/update', 'administrasi::update');

// routes for pencapaian
$routes->get('/admin/data_pencapaian', 'pencapaian::index', ['filter' => 'role:Admin']);
$routes->get('/admin/create_pencapaian', 'pencapaian::create', ['filter' => 'role:Admin']);
$routes->post('/admin/save_pencapaian', 'pencapaian::save');
$routes->get('/admin/pencapaian/delete/(:any)', 'pencapaian::delete/$1');
$routes->get('/admin/pencapaian/edit/(:any)', 'pencapaian::edit/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/pencapaian/update', 'pencapaian::update');

// routes for kalender
// $routes->get('/admin/data_kalender', 'kalender::index', ['filter' => 'role:Admin']);
$routes->get('/admin/create_kalender', 'kalender::create', ['filter' => 'role:Admin']);
$routes->post('/admin/save_kalender', 'kalender::save');
$routes->get('/admin/kalender/delete/(:any)', 'kalender::delete/$1');
$routes->get('/admin/kalender/edit/(:any)', 'kalender::edit/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/kalender/update', 'kalender::update');

// routes for artikel
// $routes->get('/admin/data_kalender', 'kalender::index', ['filter' => 'role:Admin']);
$routes->get('/admin/create_artikel', 'artikel::create', ['filter' => 'role:Admin']);
$routes->post('/admin/save_artikel', 'artikel::save');
$routes->get('/admin/artikel/delete/(:any)', 'artikel::delete/$1');
$routes->get('/admin/artikel/edit/(:any)', 'artikel::edit/$1', ['filter' => 'role:Admin']);
$routes->post('/admin/artikel/update', 'artikel::update');
