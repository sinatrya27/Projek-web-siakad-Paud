<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TK Yayasan Beribu</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <script src="https://kit.fontawesome.com/7a78fef415.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="display: flex;">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center" href="">

                <img src="<?= base_url(); ?>/img/logo_tk.png" alt="" style="width: 30%;">

                <div class="sidebar-brand-text ">TK Yayasan Beribu</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item mx-2">
                <div class="nav-link">
                    <i class="fa-regular fa-user"></i>
                    <span><?= user()->username ?></span>
                </div>
                <!-- <a class="nav-link" href="index.html"> -->
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <?php if (in_groups('Admin')) : ?>
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu Adimin
                </div>

                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?= base_url('/admin/data_guru') ?>">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span>Data Guru</span></a>
                    <a class="nav-link" href="<?= base_url('/admin/data_siswa') ?>">
                        <i class="fa-solid fa-children"></i>
                        <span>Data Siswa</span></a>
                    <a class="nav-link" href="<?= base_url('/admin/data_kelas') ?>">
                        <i class="fa-solid fa-school"></i>
                        <span>Data kelas</span></a>
                    <a class="nav-link" href="<?= base_url('/admin/data_kegiatan') ?>">
                        <i class="fa-regular fa-star"></i>
                        <span>Data Kegiatan</span></a>
                    <a class="nav-link" href="<?= base_url('/admin/data_jadwal') ?>">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span>Data Jadwal</span></a>
                    <a class="nav-link" href="<?= base_url('/admin/data_pencapaian') ?>">
                        <i class="fa-sharp fa-solid fa-medal"></i>
                        <span>Data Pencapaian</span></a>
                    <a class="nav-link" href="<?= base_url('/admin/data_administrasi') ?>">
                        <i class="fa-solid fa-money-bill"></i>
                        <span>Data Administrasi</span></a>
                </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="<?= base_url('/') ?>" id="userDropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-house-chimney"></i>
                                <span class="ml-2 d-none d-lg-inline text-gray-600 small">Rumah</span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link " href="<?= base_url('/petualangan') ?>" id="userDropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span class="ml-2 d-none d-lg-inline text-gray-600 small">Jadwal Petualangan</span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="<?= base_url('/jejak_prestasi') ?>" id="userDropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-shoe-prints"></i>
                                <span class="ml-2 d-none d-lg-inline text-gray-600 small">Jejak Prestasi</span>
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="<?= base_url('/peta_emas') ?>" id="userDropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-coins"></i>
                                <span class="ml-2 d-none d-lg-inline text-gray-600 small">Peta Emas</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?= $this->renderSection('content'); ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, TK Yayasan Beribu
                        </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>