<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/corano/corano/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:53:03 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Website bán giày</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.jpg">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Pe-icon-7-stroke CSS -->
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- Nice Select css -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <!-- jquery UI css -->
    <link rel="stylesheet" href="assets/css/plugins/jqueryui.min.css">
    <!-- main style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico">




</head>
<!-- Start Header Area -->
<header class="header-area header-wide">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">


        <!-- header middle area start -->
        <div class="header-main-area sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- start logo area -->
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="<?= BASE_URL ?>">
                                <img src="assets/img/logo/logo.jpg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- main menu area start -->
                    <div class="col-lg-6 position-static">
                        <div class="main-menu-area">
                            <div class="main-menu">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li><a href="<?= BASE_URL ?>">Trang chủ</i></a>

                                        </li>

                                        <li><a href="#">Sản phẩm <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Giới thiệu</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                        <li><a href="?act=tintucs">Tin Tức</a></li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                    <!-- main menu area end -->

                    <!-- mini cart area start -->
                    <div class="col-lg-4">
                        <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                            <div class="header-search-container">
                                <button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
                                <form class="header-search-box d-lg-none d-xl-block">
                                    <input type="text" placeholder="Nhập tên sản phẩm" class="header-search-field">
                                    <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    <li class="user-hover">
                                        <a href="#">
                                            <i class="pe-7s-user"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a href="<?= 'http://localhost/PH49685-DuAn1/base_du_an_1/index.php' . '?act=login' ?>">Đăng nhập</a></li>
                                            <li><a href="<?= 'http://localhost/PH49685-DuAn1/base_du_an_1/index.php' . '?act=dangky' ?>">Đăng ký</a></li>
                                            <li><a href="<?= 'http://localhost/PH49685-DuAn1/base_du_an_1/admin/index.php' . '?act=form-dang-nhap' ?>">Đăng nhập admin</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#" class="minicart-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <div class="notification">2</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- mini cart area end -->

                </div>
            </div>
        </div>
        <!-- header middle area end -->
    </div>
    <!-- main header start -->


</header>
<!-- end Header Area -->

<body>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0" style="color: brown;">Trang Tin Tức</h4>
                    </div>
                </div>

            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="search-box">
                                <p style="color: brown;" class="py-2 d-block">Search</p>
                                <div class="position-relative">
                                    <input type="text" class="form-control rounded bg-light border-light" placeholder="Search...">
                                    <i class="mdi mdi-magnify search-icon"></i>
                                </div>
                            </div>

                            <div class="mt-4 pt-4 border-top border-dashed border-bottom-0 border-start-0 border-end-0">
                                <p style="color: brown;" class="py-2 d-block">Thể loại </p>

                                <ul class="list-unstyled fw-medium">
                                    <li><a href="index.php?category=TinMoi" class="text-dark py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Tin mới</a></li>
                                    <li><a href="index.php?category=TinNoiBat" class="text-dark py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Tin nổi bật <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">04</span></a></li>
                                    <li><a href="index.php?category=SuKienGiamGia" class="text-dark py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Sự kiện giảm giá</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-9">
                    <div class="row g-4 mb-3">
                        <div class="col-sm-auto">
                            <div>
                                <h2 class="mb-sm-0" style="color: brown;">Danh Sách Tin Tức</h2>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end gap-2">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control" placeholder="Tim Kiếm Tin Tức">
                                    <i class="ri-search-line search-icon"></i>
                                </div>

                                <select class="form-control w-md" data-choices data-choices-search-false>
                                    <option value="All">All</option>
                                    <option value="Today">Today</option>
                                    <option value="Yesterday" selected>Yesterday</option>
                                    <option value="Last 7 Days">Last 7 Days</option>
                                    <option value="Last 30 Days">Last 30 Days</option>
                                    <option value="This Month">This Month</option>
                                    <option value="Last Year">Last Year</option>
                                </select>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row g-4">
                        <?php if (!empty($tinTucs)): ?>
                            <?php foreach ($tinTucs as $tinTuc): ?>
                                <div class="col-xxl-9 col-lg-7">
                                    <a href="?act=detail-tintuc&id=<?= $tinTuc['id'] ?>">
                                        <h5 class="fs-15 fw-semibold">
                                            Tên tiêu đề: <?= htmlspecialchars($tinTuc['tieude']) ?>
                                        </h5>
                                    </a>
                                    <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
                                        <span class="text-muted">
                                            <i class="ri-calendar-event-line me-1"></i> Ngày Tạo: <?= htmlspecialchars($tinTuc['ngay_tao']) ?>
                                        </span>
                                    </div>
                                    <p class="text-muted mb-2">Nội dung tiêu đề: <?= htmlspecialchars($tinTuc['noidung']) ?></p>
                                    <a href="?act=detail-tintuc&id=<?= $tinTuc['id'] ?>" class="text-decoration-underline">
                                        Xem Chi Tiết <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-xxl-12">
                                <p>Không có tin tức nào.</p>
                            </div>
                        <?php endif; ?>
                    </div>


                </div><!--end col-->
            </div><!--end row-->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</body>
<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->

<!-- footer area start -->
<footer class="footer-widget-area">
    <div class="footer-top section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget-item">
                        <div class="widget-title">
                            <div class="widget-logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo.png" alt="brand logo">
                                </a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <p>We are a team of designers and developers that create high quality wordpress, shopify, Opencart </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget-item">
                        <h6 class="widget-title">Contact Us</h6>
                        <div class="widget-body">
                            <address class="contact-block">
                                <ul>
                                    <li><i class="pe-7s-home"></i> 4710-4890 Breckinridge USA</li>
                                    <li><i class="pe-7s-mail"></i> <a href="mailto:demo@plazathemes.com">demo@yourdomain.com </a></li>
                                    <li><i class="pe-7s-call"></i> <a href="tel:(012)800456789987">(012) 800 456 789-987</a></li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget-item">
                        <h6 class="widget-title">Information</h6>
                        <div class="widget-body">
                            <ul class="info-list">
                                <li><a href="#">about us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">privet policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">contact us</a></li>
                                <li><a href="#">site map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget-item">
                        <h6 class="widget-title">Follow Us</h6>
                        <div class="widget-body social-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-20">
                <div class="col-md-6">
                    <div class="newsletter-wrapper">
                        <h6 class="widget-title-text">Signup for newsletter</h6>
                        <form class="newsletter-inner" id="mc-form">
                            <input type="email" class="news-field" id="mc-email" autocomplete="off" placeholder="Enter your email address">
                            <button class="news-btn" id="mc-submit">Subscribe</button>
                        </form>
                        <!-- mail-chimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mail-chimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mail-chimp-success end -->
                            <div class="mailchimp-error"></div><!-- mail-chimp-error end -->
                        </div>
                        <!-- mail-chimp-alerts end -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-payment">
                        <img src="assets/img/payment.png" alt="payment method">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text text-center">
                        <p>&copy; 2022 <b>Corano</b> Made with <i class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/"><b>HasThemes</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- JS
============================================ -->

<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<!-- slick Slider JS -->
<script src="assets/js/plugins/slick.min.js"></script>
<!-- Countdown JS -->
<script src="assets/js/plugins/countdown.min.js"></script>
<!-- Nice Select JS -->
<script src="assets/js/plugins/nice-select.min.js"></script>
<!-- jquery UI JS -->
<script src="assets/js/plugins/jqueryui.min.js"></script>
<!-- Image zoom JS -->
<script src="assets/js/plugins/image-zoom.min.js"></script>
<!-- Images loaded JS -->
<script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
<!-- mail-chimp active js -->
<script src="assets/js/plugins/ajaxchimp.js"></script>
<!-- contact form dynamic js -->
<script src="assets/js/plugins/ajax-mail.js"></script>
<!-- google map api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
<!-- google map active js -->
<script src="assets/js/plugins/google-map.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from htmldemo.net/corano/corano/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 09:53:43 GMT -->

</html>