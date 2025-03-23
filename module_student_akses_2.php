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
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-user-secret"></i>
                    <span>Jadwal</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="student_akses.php">Jadwal</a>
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
                        <a class="collapse-item" href="module_student_akses.php">Module Terbaru</a>
                        <a class="collapse-item" href="module_student_akses_2.php">Video Pelatihan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">student</span>
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
                    <h1 class="h3 mb-2 text-gray-800">Video Pelatihan</h1>
                </div>

                <div class="container px-5 px-lg-3 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product video -->
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-1.jpg">
                                    <source src="assets/videos/module-video-1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <!-- Product details -->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name -->
                                        <h5 class="fw-bolder">Video 1: Pengantar Cryptocurrency</h5>
                                        <!-- Product price -->
                                        <p class="text-muted">Pelajari dasar-dasar cryptocurrency dan bagaimana cara kerjanya.</p>
                                    </div>
                                </div>
                                <!-- Product actions -->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#productModal1">Play Video</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                                <!-- Product video -->
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-2.jpg">
                                    <source src="assets/videos/module-video-2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Video 2: Analisis Pasar</h5>
                                        <span class="text-muted text-decoration-line-through">Pelajari cara menganalisis tren pasar dan membuat keputusan investasi yang lebih baik.</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal2">Play Video</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                                <!-- Product video -->
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-3.jpg">
                                    <source src="assets/videos/module-video-3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Video 3: Cara Timing The Market Crypto</h5>
                                        <span class="text-muted text-decoration-line-through">Pelajari cara menentukan waktu yang tepat untuk berinvestasi di pasar cryptocurrency dan meningkatkan potensi keuntungan Anda dengan strategi yang efektif.</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal3">Play Video</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product video -->
                                <video class="card-img-top" controls poster="assets/img/thumbnail-module-php-premium.jpg">
                                    <source src="assets/videos/module-php-premium.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Kelas PHP Premium</h5>
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
                                <h5 class="modal-title" id="productModalLabel">Video 1: Pengantar Cryptocurrency</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="img-fluid mb-3" controls>
                                    <source src="assets/videos/module-video-1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h5>Deskripsi:</h5>
                                <p>Kelas ini dirancang untuk pemula yang ingin memahami dasar-dasar cryptocurrency. Peserta akan belajar tentang konsep dasar, teknologi blockchain, dan cara bertransaksi menggunakan mata uang digital.</p>
                                <P>Keuntungan:</P>
                                <p>- Pengenalan Dasar: Memahami konsep dasar cryptocurrency dan teknologi blockchain.</p>
                                <p>- Praktik Langsung: Mendapatkan pengalaman langsung dalam melakukan transaksi cryptocurrency.</p>
                                <p>- Sumber Daya: Akses ke materi pembelajaran dan panduan yang berguna untuk pemula.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Video 2: Analisis Pasar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="img-fluid" controls>
                                    <source src="assets/videos/module-video-2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h5>Deskripsi:</h5>
                                <p>Kelas ini dirancang khusus untuk individu yang telah memiliki pemahaman dasar tentang cryptocurrency dan ingin memperluas wawasan serta keterampilan mereka dalam analisis pasar. Dalam kelas ini, peserta akan mempelajari berbagai aspek analisis pasar cryptocurrency yang lebih mendalam, termasuk:</p>
                                <P>Keuntungan:</P>
                                <p>- Analisis Teknikal: Memahami grafik harga, pola candlestick, dan indikator teknis yang digunakan untuk memprediksi pergerakan harga di masa depan. Peserta akan belajar cara membaca dan menganalisis data historis untuk mengidentifikasi tren dan titik masuk/keluar yang optimal.</p>
                                <p>- Analisis Fundamental: Menggali faktor-faktor yang mempengaruhi nilai cryptocurrency, seperti berita pasar, perkembangan teknologi, dan regulasi. Peserta akan diajarkan cara mengevaluasi proyek cryptocurrency berdasarkan whitepaper, tim pengembang, dan adopsi pasar.</p>
                                <p>- Penggunaan Alat Analisis: Memperkenalkan berbagai alat dan platform analisis yang dapat membantu dalam pengambilan keputusan investasi, seperti TradingView, CoinMarketCap, dan alat analisis on-chain. Peserta akan belajar cara memanfaatkan alat ini untuk mendapatkan wawasan yang lebih baik tentang pasar.</p>
                                <p>- Strategi Perdagangan: Mengembangkan strategi perdagangan yang efektif berdasarkan analisis pasar, termasuk day trading, swing trading, dan investasi jangka panjang. Peserta akan diajarkan cara mengelola risiko dan memaksimalkan potensi keuntungan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Kelas PHP Profesional</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="img-fluid" controls>
                                    <source src="assets/videos/module-php-professional.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h5>Harga: Rp. 400.000</h5>
                                <p>Deskripsi:
                                <p>Kelas profesional ini menawarkan pengetahuan mendalam tentang pengembangan aplikasi web menggunakan PHP dan MySQL. Peserta akan belajar tentang teknik pengembangan lanjutan, keamanan aplikasi, dan optimasi database.</p>
                                <P>Keuntungan:</P>
                                <p>- Pengetahuan Mendalam: Mendapatkan pemahaman mendalam tentang pengembangan aplikasi web.</p>
                                <p>- Keamanan Aplikasi: Belajar cara mengamankan aplikasi web dari serangan.</p>
                                <p>- Sesi Praktis: Mengikuti sesi praktis yang membantu menerapkan teori ke dalam praktik.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="productModal4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Kelas PHP Premium</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="img-fluid" controls>
                                    <source src="assets/videos/module-php-premium.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h5>Harga: Rp. 500.000</h5>
                                <p>Deskripsi:
                                <p>Kelas premium ini menawarkan pengetahuan mendalam tentang pengembangan aplikasi web dan teknik analisis lanjutan. Peserta akan belajar tentang penggunaan alat analisis, manajemen proyek, dan strategi pengembangan yang lebih kompleks.</p>
                                <P>Keuntungan:</P>
                                <p>- Pengetahuan Mendalam: Mendapatkan pemahaman yang komprehensif tentang pengembangan aplikasi web.</p>
                                <p>- Manajemen Proyek: Belajar cara mengelola proyek pengembangan dengan efektif.</p>
                                <p>- Akses ke Alat: Memanfaatkan alat dan sumber daya pengembangan profesional.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan CSS di bagian head atau dalam file CSS Anda -->
                <style>
                    .modal-body video {
                        margin-bottom: 15px;
                        /* Atur jarak bawah video */
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