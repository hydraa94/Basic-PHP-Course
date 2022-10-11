<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN <?= $data['judul']; ?></title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href=" <?= BASEURL ?>img/favicon.ico">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <style>
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
            <a class="navbar-brand text-bg-light ms-5" href="<?= BASEURL ?>">MVC COURSE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">MVC COURSE</h5>
                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= BASEURL ?>about">About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= BASEURL ?>siswa">Siswa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
