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

                                        <li><a href="http://localhost/base_du_an_1-2/index.php?act=list-sanpham">Sản phẩm </i></a>
                                            <!-- <ul class="dropdown">
                                                <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="http://localhost/base_du_an_1-2/index.php?act=gioi-thieu">Giới thiệu</a></li>
                                        <li><a href="http://localhost/base_du_an_1-2/index.php?act=lien-he">Liên hệ</a></li>
                                        <li><a href="http://localhost/base_du_an_1-2/index.php?act=tintucs">Tin tức</a></li>
                                        <li><a href="http://localhost/base_du_an_1-2/index.php?act=khuyen-mai">Khuyến mãi</a></li>
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
                                <form action="<?= 'http://localhost/PH49685-DuAn1/base_du_an_1/index.php' . '?act=search-san-pham' ?>" method="GET" class="header-search-box">
                                    <input type="text" name="search" placeholder="Nhập tên sản phẩm" class="header-search-field">
                                    <button type="submit" class="header-search-btn"><i class="pe-7s-search"></i></button>
                                </form>

                            </div>

                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    <label>
                                        <?php
                                        if (isset($_SESSION['nguoidungs_client']['ten_nguoi_dung'])) {
                                            echo "Xin chào, " . $_SESSION['nguoidungs_client']['ten_nguoi_dung'] . "!";
                                        } else {
                                            echo "Xin chào, khách!";
                                        }
                                        ?>
                                    </label>
                                    <li class="user-hover">
                                        <a href="#">
                                            <i class="pe-7s-user"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li><a href="<?= 'http://localhost/base_du_an_1-2/admin/index.php' . '?act=form-dang-nhap' ?>">Đăng nhập admin</a></li>
                                            <li>
                                                <?php if (isset($_SESSION['nguoidungs_client'])): ?>
                                                    <!-- Nếu người dùng đã đăng nhập -->
                                                    <a href="http://localhost/base_du_an_1-2/index.php?act=taikhoan">Tài khoản cá nhân</a>
                                                    <a href="http://localhost/base_du_an_1-2/index.php?act=lich-su-mua-hang">Xem đơn hàng</a>
                                                    <a onclick="return confirm('Đăng xuất tài khoản?')" href="http://localhost/base_du_an_1-2/index.php?act=logout">Đăng Xuất</a>
                                                <?php else: ?>
                                                    <!-- Nếu người dùng chưa đăng nhập -->
                                                    <a href="http://localhost/base_du_an_1-2/index.php?act=login">Đăng Nhập</a>
                                                    <a href="<?= 'http://localhost/base_du_an_1-2/index.php' . '?act=dangky' ?>">Đăng ký</a>
                                                <?php endif; ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="http://localhost/base_du_an_1-2/index.php?act=gio-hang" class="minicart-btn">
                                            <i class="pe-7s-shopbag"></i>
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

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- checkout main wrapper start -->
    <div class="checkout-page-wrapper section-padding">
        <div class="container">

            <div class="col-12">
                <!-- Checkout Login Coupon Accordion Start -->
                <div class="checkoutaccordion" id="checkOutAccordion">
                    <div class="card">
                        <h6>Thêm Mã Giảm Giá <span data-bs-toggle="collapse" data-bs-target="#couponaccordion"> Click nhập mã giảm giá vào </span></h6>
                        <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                            <div class="card-body">
                                <div class="cart-update-option">
                                    <div class="apply-coupon-wrapper">
                                        <form action="#" method="post" class=" d-block d-md-flex">
                                            <input type="text" placeholder="Mời Bạn Nhập Mã Giảm Giá" required />
                                            <button class="btn btn-sqr">Đồng Ý</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Checkout Login Coupon Accordion End -->
            </div>
            <!-- Checkout Billing Details -->
            <form action="<?= BASE_URL . '?act=xu-ly-thanh-toan' ?>" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h5 class="checkout-title">Thông Tin Người Nhận</h5>
                            <div class="billing-form-wrap">

                                <div class="single-input-item">
                                    <label for="ten_nguoi_nhan" class="required">Tên người nhận</label>
                                    <!-- Điền tên người nhận từ session -->
                                    <input type="text" id="ten_nguoi_nhan" name="ten_nguoi_nhan" placeholder="Tên người Nhận" value="<?= htmlspecialchars($userInfo['ten_nguoi_dung']) ?>" required />
                                </div>
                                <div class="single-input-item">
                                    <label for="email_nguoi_nhan" class="required">Email</label>
                                    <!-- Điền email người nhận từ session -->
                                    <input type="email" id="email_nguoi_nhan" name="email_nguoi_nhan" placeholder="Email" value="<?= htmlspecialchars($userInfo['email']) ?>" required />
                                </div>
                                <div class="single-input-item">
                                    <label for="dia_chi_nguoi_nhan" class="required">Địa Chỉ</label>
                                    <!-- Điền địa chỉ từ session -->
                                    <input type="text" id="dia_chi_nguoi_nhan" name="dia_chi_nguoi_nhan" placeholder="Địa chỉ" value="<?= htmlspecialchars($userInfo['dia_chi']) ?>" required />
                                </div>
                                <div class="single-input-item">
                                    <label for="sdt_nguoi_nhan">Số Điện Thoại</label>
                                    <!-- Điền số điện thoại người nhận từ session -->
                                    <input type="text" id="sdt_nguoi_nhan" name="sdt_nguoi_nhan" placeholder="Phone" value="<?= htmlspecialchars($userInfo['so_dien_thoai']) ?>" />
                                </div>
                                <div class="single-input-item">
                                    <label for="ghi_chu">Ghi Chú</label>
                                    <textarea name="ghi_chu" id="ghi_chu" cols="30" rows="3" placeholder="Vui lòng nhập ghi chú của bạn"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Order Summary Details -->
                    <div class="col-lg-6">
                        <div class="order-summary-details">
                            <h5 class="checkout-title">Tóm Tắt Đơn Hàng</h5>
                            <div class="order-summary-content">
                                <!-- Order Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sản Phẩm</th>
                                                <th>Thành Tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $tongTienSanPham = 0; // Biến lưu tổng tiền sản phẩm
                                            foreach ($gioHang as $id => $item) {
                                                // Tính thành tiền mỗi sản phẩm
                                                $thanhTien = $item['gia_ban'] * $item['so_luong'];
                                                $tongTienSanPham += $thanhTien; // Cộng dồn tổng tiền sản phẩm
                                            ?>
                                                <tr>
                                                    <td>
                                                        <a href=""><?= htmlspecialchars($item['ten_san_pham']) ?> <strong> × <?= $item['so_luong'] ?></strong></a>
                                                    </td>
                                                    <td><?= number_format($thanhTien) ?>đ</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Tổng Tiền Sản Phẩm</td>
                                                <td><strong><?= number_format($tongTienSanPham) ?>đ</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Phí Vận Chuyển</td>
                                                <td><strong>30.000đ</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Tổng Tiền Đơn Hàng</td>
                                                <input type="hidden" name="tong_tien" value="<?= ($tongTienSanPham + 30000) ?>">
                                                <td><strong><?= number_format($tongTienSanPham + 30000) ?>đ</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Order Payment Method -->
                                <div class="order-payment-method">
                                    <div class="single-payment-method show">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cashon" name="paymentmethod" value="1" class="custom-control-input" checked />
                                                <label class="custom-control-label" for="cashon"> Thanh Toán Khi Nhận Hàng (COD)</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="1">
                                            <p>Có thể thanh toán sau khi đã nhận hàng thành công(cần xác thực đơn hàng).</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="directbank" name="paymentmethod" value="2" class=" custom-control-input" />
                                                <label class="custom-control-label" for="directbank">Thanh Toán Online</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="bank">
                                            <p>Khách hàng chuyển khoản khi thanh toán online</p>
                                        </div>
                                    </div>
                                    <div class="summary-footer-area">
                                        <div class="custom-control custom-checkbox mb-20">
                                            <input type="checkbox" class="custom-control-input" id="terms" required />
                                            <label class="custom-control-label" for="terms">Xác nhận bạn đồng ý mua hàng</label>
                                        </div>
                                        <button type="submit" class="btn btn-sqr">Tiến Hành Đặt Hàng</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- checkout main wrapper end -->
</main>



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