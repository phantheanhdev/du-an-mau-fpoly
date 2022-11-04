<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xshop</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css
">
    <!-- css -->
    <!-- css header -->
    <link rel="stylesheet" href="./public/css/views/header.css">

    <!-- css footer -->
    <link rel="stylesheet" href="./public/css/views/footer.css">

    <!-- css home -->
    <link rel="stylesheet" href="./public/css/views/home.css">

    <!-- css aside -->
    <link rel="stylesheet" href="./public/css/views/aside.css">

    <!-- css hang hoa detail -->

    <link rel="stylesheet" href="./public/css/views/hang_hoa_detail.css">

    <!-- css sign_up -->
    <link rel="stylesheet" href="./public/css/views/sign_up.css">



</head>

<body>
    <div class="container">
        <!-- <div class="h1 text-uppercase border border-0 rounded-2 bg-success text-success p-3 bg-opacity-25">siêu thị trực tuyến</div> -->

        <div class="header row">
            <div class="header__logo col d-flex align-items-center">
                <a href="?ctl=home">
                    <img src="./public/images/logo/xshop.png" alt="">
                </a>
            </div>
            <div class="header__title col d-flex align-items-center justify-content-end">
                <a href="?ctl=home">
                    <h2>SIÊU THỊ TRỰC TUYẾN</h2>
                </a>
            </div>
        </div>

        <!--  -->
        <nav class="navbar-dark navbar-expand-lg p-2 mb-2 bg-dark text-white rounded-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav p-1">
                        <a class="nav-link active" aria-current="page" href="?ctl=home">Trang chủ</a>
                        <a class="nav-link px-4" href="?ctl=introduce">Giới thiệu</a>
                        <a class="nav-link px-4" href="?ctl=contact">Liên hệ</a>
                        <a class="nav-link px-4" href="?ctl=about">Góp ý</a>
                        <a class="nav-link px-4" href="?ctl=qa">Hỏi đáp</a>
                    </div>
                </div>
            </div>
        </nav>