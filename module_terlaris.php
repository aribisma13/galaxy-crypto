<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Materi Pelatihan | Galaxy Crypto</title>

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
                        <a class="collapse-item" href="module_terlaris.php">Video Pelatihan</a>
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

                <!-- Page Heading 1 -->
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
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-4.jpg">
                                    <source src="assets/videos/module-video-4.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Video 4: 5 Coin Crypto Bullish Tahun 2025</h5>
                                        <span class="text-muted text-decoration-line-through">Pelajari lima token cryptocurrency yang diprediksi akan bullish pada tahun 2025 dan bagaimana Anda dapat memanfaatkan peluang investasi ini dengan strategi yang efektif.</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal4">Play Video</button>
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
                                <h5 class="modal-title" id="productModalLabel">Pengantar Cryptocurrency</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-1.jpg">
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
                                <h5 class="modal-title" id="productModalLabel">Analisis Pasar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-2.jpg">
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
                                <h5 class="modal-title" id="productModalLabel">Cara Timing The Market Crypto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-3.jpg">
                                    <source src="assets/videos/module-video-3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h5>Deskripsi:</h5>
                                <p>Kelas ini dirancang untuk trader dan investor crypto yang ingin menguasai seni timing the market dengan tepat. Peserta akan mempelajari strategi-strategi canggih untuk mengidentifikasi momen terbaik masuk (entry) dan keluar (exit) pasar, memaksimalkan profit, dan meminimalkan risiko. Materi mencakup pendekatan teknis, fundamental, dan psikologis untuk membaca peluang di volatilitas pasar crypto.</p>
                                <P>Keuntungan:</P>
                                <p>- Memahami Siklus Pasar Crypto: Mempelajari pola siklus bull run, bear market, dan fase akumulasi. Peserta akan diajarkan cara mengenali tanda-tanda peralihan tren dan memanfaatkannya untuk timing yang optimal.</p>
                                <p>- Analisis Teknikal Lanjutan untuk Timing: Menggunakan indikator teknikal seperti RSI, MACD, Fibonacci retracement, dan volume trading untuk menentukan titik reversal atau breakout. Peserta akan berlatih membaca grafik waktu (timeframes) multi-level (1 jam, 4 jam, daily) guna mengkonfirmasi sinyal.</p>
                                <p>- Analisis On-Chain & Sentimen Pasar: Memanfaatkan data on-chain (seperti aliran whale, aktivitas exchange, dan staking) serta alat analisis sentimen (misalnya Fear & Greed Index) untuk mengukur momentum pasar.</p>
                                <p>- Strategi Entry & Exit yang Terukur: Belajar menyusun rencana trading berbasis risk-reward ratio, termasuk teknik scaling in/out, stop-loss dinamis, dan take-profit bertahap. Studi kasus mencakup cara menangkap pump sebelum airdrop atau news release.</p>
                                <p>- Psikologi & Manajemen Emosi: Mengendalikan FOMO (Fear of Missing Out) dan greed saat volatilitas tinggi, serta disiplin dalam menjalankan strategi timing.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="productModal4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">5 Coin Crypto Bullish Tahun 2025</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-4.jpg">
                                    <source src="assets/videos/module-video-4.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h5>Deskripsi:</h5>
                                <p>Kelas ini dirancang untuk investor dan trader crypto yang ingin mengidentifikasi aset-aset potensial yang siap mengalami rally bullish pada tahun 2025. Peserta akan mempelajari metodologi seleksi koin berdasarkan analisis fundamental, teknologi, siklus pasar, dan faktor makroekonomi. Dibimbing oleh praktisi berpengalaman, kelas ini akan membuka wawasan tentang bagaimana memprediksi koin-koin yang memiliki prospek pertumbuhan tinggi di tengah dinamika pasar yang kompetitif.</p>
                                <P>Keuntungan:</P>
                                <p>- Analisis Fundamental Mendalam: Mengevaluasi proyek crypto berdasarkan use case, teknologi inti, tim pengembang, dan roadmap.</p>
                                <p>- Analisis Teknikal & Siklus Pasar: Membaca pola grafik historis (seperti halving effect, accumulation phases) untuk memprediksi momentum bullish.</p>
                                <p>- Pemetaan Ekosistem & Tren Industri: Mengidentifikasi sektor crypto yang paling prospektif di 2025 (DeFi, AI, RWA, Layer-2, dll.)</p>
                                <p>- Penggunaan Tools Analisis Khusus: Platform seperti Santiment, Glassnode, dan CoinGecko untuk melacak on-chain data dan social sentiment.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page Heading 2 -->
                <div class="container px-5 px-lg-3 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product video -->
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-5.jpg">
                                    <source src="assets/videos/module-video-1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <!-- Product details -->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name -->
                                        <h5 class="fw-bolder">Video 5: Menganalisis Coin Ethereum </h5>
                                        <!-- Product price -->
                                        <p class="text-muted">Pelajari lebih dalam tentang Ethereum, cara kerjanya, serta faktor-faktor yang memengaruhi nilai dan potensinya di dunia cryptocurrency.</p>
                                    </div>
                                </div>
                                <!-- Product actions -->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#productModal5">Play Video</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                                <!-- Product video -->
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-6.jpg">
                                    <source src="assets/videos/module-video-2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Video 6: Bitcoin Analisis Market Bullish</h5>
                                        <span class="text-muted text-decoration-line-through">Pelajari cara mengidentifikasi tren pasar bullish pada Bitcoin melalui indikator teknikal, pola grafik, dan sentimen pasar. Dapatkan pemahaman yang lebih baik tentang bagaimana momentum pasar terbentuk, serta strategi untuk memaksimalkan peluang investasi saat harga bergerak naik.</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal6">Play Video</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                                <!-- Product video -->
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-7.jpg">
                                    <source src="assets/videos/module-video-3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Video 7: Mengetahui Perbedaan Meme Coin dan Altcoin di Crypto</h5>
                                        <span class="text-muted text-decoration-line-through">Pelajari perbedaan mendasar antara meme coin dan altcoin, serta bagaimana karakteristik unik masing-masing dapat memengaruhi keputusan investasi Anda. Temukan strategi untuk mengenali peluang terbaik di pasar cryptocurrency dan meningkatkan potensi keuntungan dengan pendekatan yang tepat.</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal7">Play Video</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product video -->
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-8.jpg">
                                    <source src="assets/videos/module-video-4.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">Video 8: 5 Tips Trading Pada Saat Bear Market di Crypto</h5>
                                        <span class="text-muted text-decoration-line-through">Pelajari 5 tips praktis untuk melakukan trading secara cerdas di tengah kondisi pasar yang menurun (bear market). Temukan strategi bertahan dan peluang tersembunyi yang dapat membantu Anda meminimalkan risiko dan tetap meraih keuntungan di situasi pasar yang penuh tantangan.</span>
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-success mt-auto" data-toggle="modal" data-target="#productModal8">Play Video</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Structure -->
                <div class="modal fade" id="productModal5" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Menganalisis Coin Ethereum</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-5.jpg">
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

                <div class="modal fade" id="productModal6" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Bitcoin Analisis Market Bullish</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-6.jpg">
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

                <div class="modal fade" id="productModal7" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">Mengetahui Perbedaan Meme Coin dan Altcoin di Crypto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-7.jpg">
                                    <source src="assets/videos/module-video-3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h5>Deskripsi:</h5>
                                <p>Kelas ini dirancang untuk trader dan investor crypto yang ingin menguasai seni timing the market dengan tepat. Peserta akan mempelajari strategi-strategi canggih untuk mengidentifikasi momen terbaik masuk (entry) dan keluar (exit) pasar, memaksimalkan profit, dan meminimalkan risiko. Materi mencakup pendekatan teknis, fundamental, dan psikologis untuk membaca peluang di volatilitas pasar crypto.</p>
                                <P>Keuntungan:</P>
                                <p>- Memahami Siklus Pasar Crypto: Mempelajari pola siklus bull run, bear market, dan fase akumulasi. Peserta akan diajarkan cara mengenali tanda-tanda peralihan tren dan memanfaatkannya untuk timing yang optimal.</p>
                                <p>- Analisis Teknikal Lanjutan untuk Timing: Menggunakan indikator teknikal seperti RSI, MACD, Fibonacci retracement, dan volume trading untuk menentukan titik reversal atau breakout. Peserta akan berlatih membaca grafik waktu (timeframes) multi-level (1 jam, 4 jam, daily) guna mengkonfirmasi sinyal.</p>
                                <p>- Analisis On-Chain & Sentimen Pasar: Memanfaatkan data on-chain (seperti aliran whale, aktivitas exchange, dan staking) serta alat analisis sentimen (misalnya Fear & Greed Index) untuk mengukur momentum pasar.</p>
                                <p>- Strategi Entry & Exit yang Terukur: Belajar menyusun rencana trading berbasis risk-reward ratio, termasuk teknik scaling in/out, stop-loss dinamis, dan take-profit bertahap. Studi kasus mencakup cara menangkap pump sebelum airdrop atau news release.</p>
                                <p>- Psikologi & Manajemen Emosi: Mengendalikan FOMO (Fear of Missing Out) dan greed saat volatilitas tinggi, serta disiplin dalam menjalankan strategi timing.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="productModal8" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel">5 Tips Trading Pada Saat Bear Market di Crypto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <video class="card-img-top" controls poster="assets/img/video-thumbnail-8.jpg">
                                    <source src="assets/videos/module-video-4.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h5>Deskripsi:</h5>
                                <p>Kelas ini dirancang untuk investor dan trader crypto yang ingin mengidentifikasi aset-aset potensial yang siap mengalami rally bullish pada tahun 2025. Peserta akan mempelajari metodologi seleksi koin berdasarkan analisis fundamental, teknologi, siklus pasar, dan faktor makroekonomi. Dibimbing oleh praktisi berpengalaman, kelas ini akan membuka wawasan tentang bagaimana memprediksi koin-koin yang memiliki prospek pertumbuhan tinggi di tengah dinamika pasar yang kompetitif.</p>
                                <P>Keuntungan:</P>
                                <p>- Analisis Fundamental Mendalam: Mengevaluasi proyek crypto berdasarkan use case, teknologi inti, tim pengembang, dan roadmap.</p>
                                <p>- Analisis Teknikal & Siklus Pasar: Membaca pola grafik historis (seperti halving effect, accumulation phases) untuk memprediksi momentum bullish.</p>
                                <p>- Pemetaan Ekosistem & Tren Industri: Mengidentifikasi sektor crypto yang paling prospektif di 2025 (DeFi, AI, RWA, Layer-2, dll.)</p>
                                <p>- Penggunaan Tools Analisis Khusus: Platform seperti Santiment, Glassnode, dan CoinGecko untuk melacak on-chain data dan social sentiment.</p>
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

                <!-- DataTales Example -->

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