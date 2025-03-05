<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Galaxy Crypto</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/galaxy-crypto.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        /* CSS bisa ditambahkan di sini jika tidak menggunakan file terpisah */
        .header-class {
            background-image: url('assets/img/bg-masthead-01.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 60vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <div class="logo">
                <img src="assets/img/bg-log-nav.png" alt="Galaxy Crypto Logo" class="logo">
                <style>
                    /* Atur ukuran logo */
                    .logo img {
                        width: 100px;
                        /* Sesuaikan ukuran sesuai kebutuhan */
                        height: auto;

                        .navbar {
                            display: flex;
                            align-items: center;
                            justify-content: space-between;
                            /* Menjaga jarak antara logo, teks, dan tombol */
                            padding: 10px 20px;
                        }
                        .logo-container {
                            display: flex;
                            align-items: center;
                        }
                        .logo-container img {
                            width: 80px;
                            /* Sesuaikan ukuran logo */
                            height: auto;
                            margin-right: 10px;
                            /* Jarak antara logo dan teks */
                        }
                        .navbar-brand {
                            font-size: 20px;
                            font-weight: bold;
                            margin-left: 10px;
                            /* Pindahkan teks lebih ke kanan */
                        }
                        .navbar-right {
                            margin-left: auto;
                            /* Memindahkan tombol login ke kanan */
                        }
                    }
                </style>
                <a class="navbar-brand" href="#!">Galaxy Crypto</a>
            </div>
            <div class="navbar-right">
                <a class="btn btn-primary" href="login.php">Login</a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="header-class">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-3">Selamat Datang di Galaxy Crypto</h1>
                        <p class="mb-4">Platform Edukasi Dan Pelatihan Trading Cryptocurrency Terbaik!</p>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-currency-bitcoin m-auto text-primary"></i></div>
                        <h3>Profesional Trading Crypto</h3>
                        <p class="lead mb-0">Memanfaatkan teknologi mutakhir untuk meningkatkan kemampuan perdagangan secara keseluruhan!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-people m-auto text-primary"></i></div>
                        <h3>Sharing With Mentor</h3>
                        <p class="lead mb-0">Memberi pengguna akses langsung ke mentor berpengalaman yang dapat menawarkan saran dan wawasan yang disesuaikan!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-camera-video m-auto text-primary"></i></div>
                        <h3>Video Pembelajaran Premium</h3>
                        <p class="lead mb-0">Akses tak terbatas ke sumber video pembelajaran dengan jadi member kami!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Showcases-->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-kp-7.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Memahami Fundamentals Cryptocurrency</h2>
                    <p class="lead mb-0">Cryptocurrency menawarkan berbagai peluang, mulai dari investasi, pembayaran digital, hingga pengembangan teknologi baru di sektor keuangan. Dengan memahami fundamentalnya, Anda bisa memanfaatkan potensi besar yang ditawarkan dunia crypto secara lebih bijak dan aman.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-kp-5.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Mendalami Sejarah Bitcoin</h2>
                    <p class="lead mb-0">Bitcoin diperkenalkan pada tahun 2008 oleh seseorang atau kelompok dengan nama samaran Satoshi Nakamoto. Dalam sebuah whitepaper berjudul "Bitcoin: A Peer-to-Peer Electronic Cash System", Nakamoto menjelaskan konsep mata uang digital yang beroperasi di atas teknologi blockchain—sebuah sistem buku besar yang terdistribusi dan tidak dapat diubah.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-kp-6.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Cara Timing The Market Buy or Sell Crypto</h2>
                    <p class="lead mb-0">Dalam dunia cryptocurrency, memahami kapan harus membeli (buy) atau menjual (sell) adalah kunci untuk memaksimalkan keuntungan dan mengurangi risiko. Namun, karena pasar crypto sangat volatil, tidak ada strategi yang 100% akurat.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section-->
    <section class="py-5" style="background-color:rgb(248, 249, 250);">
        <div class="container px-5 px-lg-3 my-5">
            <div class="text-center text-black">
                <h1 class="display-6 fw-bolder">Materi Pembelajaran Kelas Trading di Galaxy Crypto</h1>
                <div class="container px-5 px-lg-3 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/bg-module-1.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Kelas Beginner</h5>
                                        <!-- Product price-->
                                        Rp. 150.000
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-success mt-auto" href="login.php">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/bg-module-2.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Kelas Middle</h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">Rp. 200.000</span>
                                        Rp. 180.000
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-success mt-auto" href="login.php">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/bg-module-3.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Kelas Profesional</h5>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">Rp. 450.000</span>
                                        Rp. 400.000
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-success mt-auto" href="login.php">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/bg-module-4.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Kelas Premium</h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        Rp. 500.000
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-success mt-auto" href="login.php">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Testimonials-->
    <section class="testimonials text-center bg-white">
        <div class="container">
            <h1 class="mb-5">Testimonials Student di Galaxy Crypto</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/bg-andi.jpeg" alt="..." />
                        <h5>Andi</h5>
                        <p class="font-weight-light mb-0">"Saya sangat puas dengan kursus di Galaxy Crypto! Materinya sangat lengkap, mulai dari dasar-dasar blockchain hingga strategi trading yang lebih kompleks. Instruktur yang berpengalaman menjelaskan dengan cara yang mudah dipahami, bahkan untuk pemula seperti saya. Setelah mengikuti kursus ini, saya merasa lebih percaya diri dalam berinvestasi dan trading crypto. Terima kasih Galaxy Crypto!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/bg-budi.jpeg" alt="..." />
                        <h5>Budi</h5>
                        <p class="font-weight-light mb-0">"Kursus di Galaxy Crypto benar-benar membuka wawasan saya tentang dunia cryptocurrency! Materinya disusun dengan sangat baik, dan instruktur selalu siap membantu jika ada pertanyaan. Sebelumnya, saya ragu untuk mulai trading, tapi setelah mengikuti kursus ini, saya lebih memahami strategi yang tepat dan cara mengelola risiko. Sangat direkomendasikan bagi siapa saja yang ingin serius di dunia crypto!" 🚀</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/bg-feby.jpeg" alt="..." />
                        <h5>Feby</h5>
                        <p class="font-weight-light mb-0">"Belajar di Galaxy Crypto adalah pengalaman yang luar biasa! Materinya disampaikan dengan jelas dan mudah dipahami, bahkan untuk pemula seperti saya. Instruktur sangat responsif dalam menjawab pertanyaan, dan saya mendapatkan banyak wawasan berharga tentang investasi dan trading crypto. Setelah mengikuti kursus ini, saya jadi lebih percaya diri dalam mengambil keputusan di pasar crypto. Highly recommended!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action-->
    <section class="header-footer text-white text-center" id="signup">
        <style>
            /* CSS bisa ditambahkan di sini jika tidak menggunakan file terpisah */
            .header-footer {
                background-image: url('assets/img/bg-masthead-01.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 40vh;
                width: 100%;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
            }
        </style>
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                    <!-- Signup form-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                            </div>
                            <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <p>To activate this form, sign up at</p>
                                <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Galaxy Crypto 2025. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>