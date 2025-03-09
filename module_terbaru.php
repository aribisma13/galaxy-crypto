<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mentor | Galaxy Crypto</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/galaxy-crypto.ico" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <Style>
        #accordionSidebar {
            background-image: url('assets/img/bg-dashboard.jpg');
            /* Sesuaikan path dengan lokasi gambar */
            background-size: cover;
            background-position: left;
            background-repeat: no-repeat;
        }
    </Style>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Galaxy Crypto<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-users"></i>
                    <span>Peserta</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="student.php">Student</a>
                        <a class="collapse-item" href="pendidikan.php">Pendidikan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-user-secret"></i>
                    <span>Instruktur</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="mentor.php">Mentor</a>
                        <a class="collapse-item" href="jadwal.php">Jadwal</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fa fa-book"></i>
                    <span>Materi Pelatihan</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="module_terbaru.php">Module Terbaru</a>
                        <a class="collapse-item" href="module_terlaris.php">Module Terlaris</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Logout</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Divider -->

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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Page Content -->

                <!-- Page Heading -->
                <div style="text-align: center;">
                    <h1 class="h3 mb-2 text-gray-800">Module Terbaru</h1>
                </div>

                <div class="container px-5 px-lg-3 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image -->
                                <img class="card-img-top" src="assets/img/bg-module-1.jpg" alt="Kelas Beginner" />
                                <!-- Product details -->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name -->
                                        <h5 class="fw-bolder">Kelas Beginner</h5>
                                        <!-- Product price -->
                                        Rp. 150.000
                                    </div>
                                </div>
                                <!-- Product actions -->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#productModal1">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <img class="card-img-top" src="assets/img/bg-module-2.jpg" alt="Kelas Middle" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Kelas Middle</h5>
                                        <span class="text-muted text-decoration-line-through">Rp. 180.000</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal2">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <img class="card-img-top" src="assets/img/bg-module-3.jpg" alt="Kelas Profesional" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Kelas Profesional</h5>
                                        <span class="text-muted text-decoration-line-through">Rp. 400.000</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal3">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top" src="assets/img/bg-module-4.jpg" alt="Kelas Premium" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Kelas Premium</h5>
                                        Rp. 500.000
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal4">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Structure -->
                <div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Kelas Beginner</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/img/bg-module-1.jpg" class="img-fluid mb-3" alt="Kelas Beginner" />
                                <h5>Harga: Rp. 150.000</h5>
                                <p>Deskripsi:
                                    <p>Kelas ini dirancang untuk pemula yang ingin memahami dasar-dasar cryptocurrency. Peserta akan belajar tentang konsep dasar, cara bertransaksi, dan pengenalan terhadap berbagai jenis mata uang digital. Cocok untuk siapa saja yang baru memulai perjalanan di dunia crypto.</p>
                                <P>Keuntungan:</P>
                                    <p>- Pengenalan Dasar: Memahami konsep dasar cryptocurrency dan teknologi blockchain.</p>
                                    <P>- Praktik Langsung: Mendapatkan pengalaman langsung dalam melakukan transaksi.</P>
                                    <p>- Jaringan: Kesempatan untuk berinteraksi dengan sesama pemula dan membangun jaringan.</p>
                                    <p>- Sumber Daya: Akses ke materi pembelajaran dan panduan yang berguna untuk pemula.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page Heading -->
                <div style="text-align: center;">
                    <h1 class="h3 mb-2 text-gray-800">Module Terfavorit</h1>
                </div>

                <div class="container px-5 px-lg-3 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image -->
                                <img class="card-img-top" src="assets/img/bg-module-5.jpg" alt="Kelas Trader & Investment" />
                                <!-- Product details -->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name -->
                                        <h5 class="fw-bolder">Kelas Trader & Investment</h5>
                                        <!-- Product price -->
                                        Rp. 250.000
                                    </div>
                                </div>
                                <!-- Product actions -->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#productModal1">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                                <img class="card-img-top" src="assets/img/bg-module-2.jpg" alt="Kelas Middle" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Kelas Middle</h5>
                                        <span class="text-muted text-decoration-line-through">Rp. 180.000</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal2">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                                <img class="card-img-top" src="assets/img/bg-module-3.jpg" alt="Kelas Profesional" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Kelas Profesional</h5>
                                        <span class="text-muted text-decoration-line-through">Rp. 400.000</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal3">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top" src="assets/img/bg-module-4.jpg" alt="Kelas Premium" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Kelas Premium</h5>
                                        Rp. 500.000
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal4">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Structure -->
                <div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Kelas Beginner</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/img/bg-module-1.jpg" class="img-fluid mb-3" alt="Kelas Beginner" />
                                <h5>Harga: Rp. 150.000</h5>
                                <p>Deskripsi:
                                    <p>Kelas ini dirancang untuk pemula yang ingin memahami dasar-dasar cryptocurrency. Peserta akan belajar tentang konsep dasar, cara bertransaksi, dan pengenalan terhadap berbagai jenis mata uang digital. Cocok untuk siapa saja yang baru memulai perjalanan di dunia crypto.</p>
                                <P>Keuntungan:</P>
                                    <p>- Pengenalan Dasar: Memahami konsep dasar cryptocurrency dan teknologi blockchain.</p>
                                    <P>- Praktik Langsung: Mendapatkan pengalaman langsung dalam melakukan transaksi.</P>
                                    <p>- Jaringan: Kesempatan untuk berinteraksi dengan sesama pemula dan membangun jaringan.</p>
                                    <p>- Sumber Daya: Akses ke materi pembelajaran dan panduan yang berguna untuk pemula.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan CSS di bagian head atau dalam file CSS Anda -->
                <style>
                    .modal-body img {
                        margin-bottom: 15px;
                        /* Atur jarak bawah gambar */
                    }

                    .modal-body h5 {
                        margin-top: 10px;
                        /* Atur jarak atas judul harga */
                    }

                    .modal-body p {
                        margin-top: 10px;
                        /* Atur jarak atas paragraf deskripsi */
                    }
                </style>

                <div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Kelas Middle</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/img/bg-module-2.jpg" class="img-fluid" alt="Kelas Middle" />
                                <h5>Harga: Rp. 200.000</h5>
                                <p>Deskripsi:
                                    <p>Kelas ini ditujukan bagi mereka yang sudah memiliki pemahaman dasar tentang cryptocurrency dan ingin memperdalam pengetahuan mereka. Materi mencakup analisis pasar, strategi investasi, dan cara mengelola risiko. Ideal untuk peserta yang ingin meningkatkan keterampilan trading mereka.</p>
                                <P>Keuntungan:</P>
                                    <p>- Analisis Pasar: Mempelajari cara menganalisis tren pasar dan membuat keputusan investasi yang lebih baik.</p>
                                    <P>- Strategi Investasi: Mengembangkan strategi trading yang efektif untuk memaksimalkan keuntungan.</P>
                                    <p>- Dukungan Komunitas: Bergabung dengan komunitas trader yang mendukung dan berbagi pengalaman.</p>
                                    <p>- Peningkatan Keterampilan: Meningkatkan keterampilan trading dan manajemen risiko.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Kelas Profesional</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/img/bg-module-3.jpg" class="img-fluid" alt="Kelas Profesional" />
                                <h5>Harga: Rp. 400.000</h5>
                                <p>Deskripsi:
                                    <p>Kelas profesional ini menawarkan pengetahuan mendalam tentang trading cryptocurrency dan teknik analisis lanjutan. Peserta akan belajar tentang penggunaan alat analisis teknis, manajemen portofolio, dan strategi trading yang lebih kompleks. Cocok untuk trader yang ingin mengambil langkah serius dalam investasi crypto.</p>
                                <P>Keuntungan:</P>
                                    <p>- Pengetahuan Mendalam: Mendapatkan pemahaman mendalam tentang teknik analisis dan trading lanjutan.</p>
                                    <P>- Manajemen Portofolio: Belajar cara mengelola portofolio investasi secara efektif.</P>
                                    <p>- Sesi Praktis: Mengikuti sesi praktis yang membantu menerapkan teori ke dalam praktik.</p>
                                    <p>- Akses ke Alat Trading: Memanfaatkan alat dan sumber daya trading profesional.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="productModal4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Kelas Premium</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/img/bg-module-4.jpg" class="img-fluid" alt="Kelas Premium" />
                                <h5>Harga: Rp. 400.000</h5>
                                <p>Deskripsi:
                                    <p>Kelas premium ini menawarkan pengetahuan mendalam tentang trading cryptocurrency dan teknik analisis lanjutan. Peserta akan belajar tentang penggunaan alat analisis teknis, manajemen portofolio, dan strategi trading yang lebih kompleks. Kelas ini dirancang khusus untuk trader yang ingin mengambil langkah serius dalam investasi crypto.</p>
                                <P>Keuntungan:</P>
                                    <p>- Pengetahuan Mendalam: Mendapatkan pemahaman yang komprehensif tentang teknik analisis dan trading lanjutan.</p>
                                    <P>- Manajemen Portofolio: Belajar cara mengelola portofolio investasi dengan efektif dan efisien.</P>
                                    <p>- Sesi Praktis: Mengikuti sesi praktis yang dirancang untuk membantu menerapkan teori ke dalam praktik nyata.</p>
                                    <p>- Akses ke Alat Trading: Memanfaatkan alat dan sumber daya trading profesional untuk meningkatkan kinerja investasi.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Pilih "Keluar" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                <a class="btn btn-primary" href="login.php">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

</body>

</html>