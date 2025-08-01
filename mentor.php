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

    <!-- DataTables CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        #accordionSidebar {
            background-image: url('assets/img/bg-dashboard.jpg');
            background-size: cover;
            background-position: left;
            background-repeat: no-repeat;
        }
    </style>
</head>

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
                            <input type="text" class="form-control bg-light border-0 small" id="searchInput" placeholder="Search for mentors..." aria-label="Search" aria-describedby="basic-addon2">
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
                                        <input type="text" class="form-control bg-light border-0 small" id="searchInputMobile" placeholder="Search for mentors..." aria-label="Search" aria-describedby="basic-addon2">
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Modal Tambah Mentor -->
                    <div class="modal fade" id="tambahMentorModal" tabindex="-1" role="dialog" aria-labelledby="tambahMentorModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="add_mentor.php" method="POST" enctype="multipart/form-data">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="tambahMentorModalLabel">Tambah Data Mentor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_tempat_tinggal">Alamat Tempat Tinggal</label>
                                            <textarea class="form-control" id="alamat_tempat_tinggal" name="alamat_tempat_tinggal" placeholder="Masukkan Alamat" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor_telepon">Nomor Telepon / WhatsApp</label>
                                            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan No WhatsApp" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_email">Alamat Email</label>
                                            <input type="email" class="form-control" id="alamat_email" name="alamat_email" placeholder="Masukkan Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <input type="file" class="form-control-file" id="foto" name="foto" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="riwayat_pendidikan">Riwayat Pendidikan</label>
                                            <textarea class="form-control" id="riwayat_pendidikan" name="riwayat_pendidikan" placeholder="Riwayat Pendidikan" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="gelar_akademik">Gelar Akademik</label>
                                            <input type="text" class="form-control" id="gelar_akademik" name="gelar_akademik" placeholder="Masukkan Gelar Akademik" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pengalaman_mengajar">Pengalaman Mengajar</label>
                                            <textarea class="form-control" id="pengalaman_mengajar" name="pengalaman_mengajar" placeholder="Pengalaman Mengajar" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="bidang_keahlian">Bidang Keahlian</label>
                                            <input type="text" class="form-control" id="bidang_keahlian" name="bidang_keahlian" placeholder="Bidang Keahlian" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                   <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Table Mentor</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahMentorModal">Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Mentor</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>No WhatsApp</th>
                                            <th>Email</th>
                                            <th>Foto</th>
                                            <th>Riwayat Pendidikan</th>
                                            <th>Gelar Akademik</th>
                                            <th>Pengalaman Mengajar</th>
                                            <th>Bidang Keahlian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Koneksi ke database
                                        $conn = new mysqli("localhost", "root", "", "crypto");

                                        // Cek koneksi
                                        if ($conn->connect_error) {
                                            die("Koneksi gagal: " . $conn->connect_error);
                                        }

                                        // Ambil data dari tabel mentor
                                        $sql = "SELECT * FROM mentor";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id_mentor'] . "</td>";
                                                echo "<td>" . $row['nama_lengkap'] . "</td>";
                                                echo "<td>" . $row['tempat_tanggal_lahir'] . "</td>";
                                                echo "<td>" . $row['alamat_tempat_tinggal'] . "</td>";
                                                echo "<td>" . $row['nomor_telepon_whatsapp'] . "</td>";
                                                echo "<td>" . $row['alamat_email'] . "</td>";
                                                echo "<td><img src='" . htmlspecialchars($row['foto'], ENT_QUOTES, 'UTF-8') . "' alt='Foto' style='width: 130px; height: 150px;'></td>";
                                                echo "<td>" . $row['riwayat_pendidikan_formal'] . "</td>";
                                                echo "<td>" . $row['gelar_akademik'] . "</td>";
                                                echo "<td>" . $row['pengalaman_mengajar_sebelumnya'] . "</td>";
                                                echo "<td>" . $row['bidang_keahlian_mata_pelajaran'] . "</td>";
                                                echo "<td>
                                                    <a href='edit_mentor.php?id=" . $row['id_mentor'] . "' class='btn btn-warning'>Edit</a>
                                                    <a href='delete_mentor.php?id=" . $row['id_mentor'] . "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a>
                                                </td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='12'>Tidak ada data</td></tr>";
                                        }
                                        $conn->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            // Inisialisasi DataTable
            $('#dataTable').DataTable({
                "language": {
                    "search": "Cari:",
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Tidak ada data yang ditemukan",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered": "(disaring dari _MAX_ total data)",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Berikutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });

            // Fungsi pencarian untuk input desktop
            $('#searchInput').keyup(function(){
                $('#dataTable').DataTable().search($(this).val()).draw();
            });

            // Fungsi pencarian untuk input mobile
            $('#searchInputMobile').keyup(function(){
                $('#dataTable').DataTable().search($(this).val()).draw();
            });
        });
    </script>

</body>

</html>