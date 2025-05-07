<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Mengambil peran dari form

    // Validasi input
    if (empty($email) || empty($password) || empty($role)) {
        $error = "Semua field harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email tidak valid.";
    } else {
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $hashedPassword, $role);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to login page after successful registration
            header("Location: login.php");
            exit();
        } else {
            $error = "Terjadi kesalahan saat mendaftar: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galaxy Crypto - Register</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/galaxy-crypto.ico" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-register">
    <style>
        body.bg-register {
            background-image: url('assets/img/bg-register-1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
    </style>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="container">
                        <div class="image-box">
                            <img src="assets/img/galaxy-logo-login.jpg" alt="eco-logo" id="logo">
                        </div>
                        <style>
                            /* styles.css */
                            body {
                                font-family: Arial, sans-serif;
                                background-color: #1e1e1e;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 90vh;
                                margin: 0;
                            }

                            .container {
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                width: 100%;
                                padding: 20px;
                                border-radius: 10px;
                            }

                            .image-box {
                                flex: 1;
                                width: 500px;
                                height: 500px;
                                margin-right: 20px;
                                margin-left: 20px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                overflow: hidden;
                                position: relative;
                            }

                            .image-box img {
                                width: auto;
                                height: auto;
                            }

                            .form-section {
                                flex: 1;
                                padding-left: 20px;
                            }

                            .form-section form {
                                display: flex;
                                flex-direction: column;
                                gap: 10px;
                            }

                            .form-section input,
                            .form-section button {
                                padding: 10px;
                                font-size: 16px;
                                border: 1px solid #ddd;
                                border-radius: 5px;
                            }

                            .form-section button {
                                background-color: #007bff;
                                color: white;
                                cursor: pointer;
                            }

                            .form-section button:hover {
                                background-color: #0056b3;
                            }

                            .form-section .links {
                                display: flex;
                                justify-content: space-between;
                            }
                        </style>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang di Galaxy Crypto! Buat Akun Baru</h1>
                                </div>
                                <form class="user" method="POST" action="register.php">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="exampleFirstName" name="firstName" placeholder="First Name" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="exampleLastName" name="lastName" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="role" id="role" class="form-control form-control-user" required>
                                            <option value="admin">Admin</option>
                                            <option value="student">Student</option>
                                            <option value="mentor">Mentor</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="confirmPassword" placeholder="Repeat Password" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                                    <hr>
                                </form>
                                <?php if (isset($error)): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo htmlspecialchars($error); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (isset($success)): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo htmlspecialchars($success); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="text-center">
                                    <a class="small" href="login.php">Sudah punya akun? Masuk!</a>
                                </div>
                            </div>
                        </div>
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