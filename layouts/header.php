<?php
  // database
  require_once("admin/pages/modules/config.php");

  // categories
  $data4 = "SELECT * FROM type_blog WHERE id_type <> 25 AND id_type <> 26";
  $result4 = mysqli_query($conn, $data4);
  $arr4 = array();
  while ($row4 = mysqli_fetch_array($result4))
  {
    $arr4[] = $row4;
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/icon.png">
    <title>TRANG TIN VỀ GAME HOT NHẤT | LNKBlog</title>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <!-- <link rel="stylesheet" href="assets/css/all.css"> -->
    <!-- owlCarousel -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Facebook SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>

    <div id="wrapper">
      <header class="header">
        <div class="top-header sm-hidden py-4">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 text-center">
                <a href="index.php"><img src="assets/images/logo.png" alt="logo.png" width="65%"></a>
              </div>
              <div class="col-lg-8 col-md-8">
                <div class="header-banner">
                  <a href="#"><img src="assets/images/header-banner.png" width="100%"/></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- top header -->
        <div class="menu-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12 nav-sm-fuild">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">TRANG CHỦ<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="chi-tiet.php?id=29">GIỚI THIỆU</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">CHUYÊN MỤC TIN TỨC</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">VIDEO LIVE STREAM</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">REVIEW</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">TRAILER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="chi-tiet.php?id=30">LIÊN HỆ</a>
                      </li>
                      <!--
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>
                      -->
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- menu header -->
      </header>
