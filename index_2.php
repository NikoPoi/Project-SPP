<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ('./components/head.php') 
    ?>
    <title>Index</title>
</head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="./index.html"><img src="https://e-ujian.id/wp-content/uploads/2021/04/cropped-Logo_white.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="m-auto"></div>
            <ul class="navbar-nav d-flex align-items-center mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link h6 text-dark" aria-current="page" href="./index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h6 text-dark" href="./career.html">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle h6 text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pembayaran
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cek Tagihan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./input.php">Pembayaran SPP</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-link">
                    <a class="nav-link text-light btn btn-primary rounded-4 px-4" href="./signin.php">LOGIN</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>

        <section class="main_header container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="display-4 fw-normal mb-4" style="margin-top: 100px;">Cara Baru Bayar Uang Pendidikan</div>
                        <p class="display-6">
                            Sistem Pembayaran Uang Sekolah Terkini
                        </p>
                        <p class="main_p_3 fw-normal">
                            Platform untuk Murid, Mahasiswa, dan Orang Tua untuk membayar keperluan sekolah dari aplikasi pembayaran favorit mereka.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="metode_pembayaran container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <span class="col fw-normal text-center display-4 mt-5 mb-5 text-dark">Metode Pembayaran</span>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="https://www.infradigital.io/img/img_payment_options.svg" alt="">
                    </div> 
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid w-25" src="./assets/images/icon_method_cc.png" alt="credit"><div class="h5 fw-normal ">Credit/Debit</div>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid w-25" src="./assets/images/icon_method_wallet.png" alt="wallet"><div class="h5 fw-normal ">e-Wallet</div>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid w-25" src="./assets/images/icon_method_transfer.png" alt="transfer_bank"><div class="h5 fw-normal ">Transfer Bank</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefit container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="display-6 fw-normal">
                            Benefit Untuk Sekolah & Yayasan
                        </div>
                        <p class="mt-3">
                            Semua tagihan seperti SPP, Uang Buku, Sumbangan dan lain-lain, akan lebih mudah diinformasikan dan dibayarkan oleh orang tua siswa. IDN mendukung penuh gerakan paperless untuk semua sekolah.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="img-fluid w-75" src="https://www.infradigital.io/img/img_productknowledge_school_payment.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="fitur container">
            <div class="row justify-content-center">
                <span class="col fw-normal text-center display-4 mt-5 mb-5 text-dark">Fitur Platform</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center">
                    <div class="h4 fw-normal mb-4">
                        Online <br> Reporting
                    </div>
                    <img class="img-fluid mb-4 w-25" src="https://www.infradigital.io/img/icon_feature_school_report.svg" alt="">
                    <p>
                        Sekolah dan Yayasan memiliki reporting yang dapat di akses secara real-time dan terhubung dengan berbagai institusi pembayaran yang telah terintegrasi.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="h4 fw-normal mb-4">
                        Settlement <br> dan Reconciliation
                    </div>
                    <img class="img-fluid mb-4 w-25" src="https://www.infradigital.io/img/icon_feature_school_web.svg" alt="">
                    <p>
                        IDN dan para mitra channel pembayaran menjamin settlement dan rekonsiliasi yang jelas terhadap transaksi yang terjadi pada masing-masing pihak, dan siap memfasilitasi sekaligus melakukan investigasi jika terjadi perselisihan transaksi.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="h4 fw-normal mb-4">
                        Payment <br> Reminder
                    </div>
                    <img class="img-fluid mb-4 w-25" src="https://www.infradigital.io/img/icon_feature_school_finance.svg" alt="">
                    <p>
                        Pembayaran yang telah jatuh tempo akan diingatkan melalui channel sms ataupun email.
                    </p>
                </div>
            </div>
        </section>

        <?php
            include('./components/footer.php')
        ?>
        <?php
            include('./components/foot.php')
        ?>
    </body>
</html>