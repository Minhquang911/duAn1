<?php require_once 'layout/header.php'; ?>

<?php require_once 'layout/menu.php'; ?>

<main>
    <!-- hero slider area start -->
    <section class="slider-area">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider033.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider011.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider022.png">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
        </div>
    </section>
    <!-- hero slider area end -->

    <!-- service policy area start -->
    <div class="service-policy section-padding">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-plane"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Giao hàng</h6>
                            <p>Miễn phí giao hàng</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-help2"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Hỗ trợ</h6>
                            <p>Hỗ trợ 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-back"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Hoàn tiền</h6>
                            <p>Hoàn tiền trong 30 ngày khi lỗi</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-credit"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Thanh toán</h6>
                            <p>Bảo mật thanh toán</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service policy area end -->

    <!-- banner statistics area start -->
    <div class="banner-statistics-area">
        <div class="container">
            <div class="row row-20 mtn-20">
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="assets/img/slider/slider033.png" alt="product banner">
                        </a>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1">BEAUTIFUL</h5>
                            <h2 class="banner-text2">Wedding<span>Rings</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="assets/img/slider/slider022.png" alt="product banner">
                        </a>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1">BEAUTIFUL</h5>
                            <h2 class="banner-text2">Wedding<span>Rings</span></h2>
                            <a href="shop.html" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>

            </div>
        </div>
    </div>
    <!-- banner statistics area end -->

    <!-- product area start -->
    <section class="product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Sản phẩm của chúng tôi</h2>
                        <p class="sub-title">Sản phẩm được cập nhật liên tục </p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-container">


                        <!-- product tab content start -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                    <?php foreach ($listSanPham as $key => $sanPham): ?>
                                        <!-- product item start -->
                                        <div class="product-item">
                                            <figure class="product-thumb">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPham['id'] ?>">
                                                    <img class="pri-img" src="<?= BASE_URL_IMG . $sanPham['hinh_anh'] ?>" alt="product">
                                                    <img class="sec-img" src="<?= BASE_URL_IMG . $sanPham['hinh_anh'] ?>" alt="product">
                                                </a>
                                                <div class="product-badge">
                                                    <?php
                                                    $ngayNhap = new DateTime($sanPham['ngay_nhap']);
                                                    $ngayHienTai = new DateTime();
                                                    $tinhNgay = $ngayHienTai->diff($ngayNhap);

                                                    if ($tinhNgay->days <= 7) { ?>
                                                        <div class="product-label new">
                                                            <span>Mới</span>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php if ($sanPham['gia_khuyen_mai']) { ?>

                                                        <div class="product-label discount">
                                                            <span>Giảm giá</span>
                                                        </div>
                                                    <?php } ?>
                                                </div>

                                                <div class="cart-hover">
                                                    <!-- <button  class="btn btn-cart">Xem chi tiết</button> -->
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPham['id'] ?> " class="btn btn-cart">Xem chi tiết</a>
                                                </div>
                                            </figure>
                                            <div class="product-caption text-center">

                                                <h6 class="product-name">
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPham['id'] ?>"><?= $sanPham['ten_san_pham'] ?></a>
                                                </h6>
                                                <div class="price-box">
                                                    <?php if ($sanPham['gia_khuyen_mai']) { ?>
                                                        <span class="price-regular"><?= formatPrice($sanPham['gia_khuyen_mai']) . 'đ'; ?></span>
                                                        <span class="price-old"><del><?= formatPrice($sanPham['gia_ban']) . 'đ'; ?></del></span>
                                                    <?php } else { ?>
                                                        <span class="price-regular"><?= formatPrice($sanPham['gia_ban']) . 'đ'; ?></span>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- product item end -->
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- product area end -->
</main>

    <!-- product banner statistics area start -->
    <section class="product-banner-statistics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">Danh mục sản phẩm</h2>
                </div>
                <!-- section title start -->
                    <div class="product-banner-carousel slick-row-10">
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                <img class="pri-img" src="<?= BASE_URL_IMG . $sanPham['hinh_anh'] ?>" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">Giày trắng</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                <img class="sec-img" src="<?= BASE_URL_IMG . $sanPham['hinh_anh'] ?>" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">Giày đen</a></h5>
                                </div>
                            </figure>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product banner statistics area end -->

<!-- featured product area start -->
<section class="feature-product section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">Sản phẩm nổi bật</h2>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                    <?php foreach ($listSanPham as $key => $sanPham): ?>
                        <!-- product item start -->
                        <div class="product-item">
                            <figure class="product-thumb">
                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPham['id'] ?>">
                                    <img class="pri-img" src="<?= BASE_URL_IMG . $sanPham['hinh_anh'] ?>" alt="product">
                                    <img class="sec-img" src="<?= BASE_URL_IMG . $sanPham['hinh_anh'] ?>" alt="product">
                                </a>
                                <div class="product-badge">
                                    <?php
                                    $ngayNhap = new DateTime($sanPham['ngay_nhap']);
                                    $ngayHienTai = new DateTime();
                                    $tinhNgay = $ngayHienTai->diff($ngayNhap);

                                    if ($tinhNgay->days <= 7) { ?>
                                        <div class="product-label new">
                                            <span>Mới</span>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <?php if ($sanPham['gia_khuyen_mai']) { ?>

                                        <div class="product-label discount">
                                            <span>Giảm giá</span>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="cart-hover">
                                    <!-- <button  class="btn btn-cart">Xem chi tiết</button> -->
                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPham['id'] ?> " class="btn btn-cart">Thêm vào giỏ hàng</a>
                                </div>
                            </figure>

                            <div class="product-caption text-center">

                                <h6 class="product-name">
                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPham['id'] ?>"><?= $sanPham['ten_san_pham'] ?></a>
                                </h6>
                                <div class="price-box">
                                    <?php if ($sanPham['gia_khuyen_mai']) { ?>
                                        <span class="price-regular"><?= formatPrice($sanPham['gia_khuyen_mai']) . 'đ'; ?></span>
                                        <span class="price-old"><del><?= formatPrice($sanPham['gia_ban']) . 'đ'; ?></del></span>
                                    <?php } else { ?>
                                        <span class="price-regular"><?= formatPrice($sanPham['gia_ban']) . 'đ'; ?></span>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <!-- product item end -->
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- featured product area end -->
<!-- offcanvas mini cart start -->
<div class="offcanvas-minicart-wrapper">
    <div class="minicart-inner">
        <div class="offcanvas-overlay"></div>
        <div class="minicart-inner-content">
            <div class="minicart-close">
                <i class="pe-7s-close"></i>
            </div>
            <div class="minicart-content-box">
                <div class="minicart-item-wrapper">
                    <ul>
                        <li class="minicart-item">
                            <div class="minicart-thumb">
                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPham['id'] ?>">
                                    <img src="<?= BASE_URL_IMG . $sanPham['hinh_anh'] ?>" alt="product">
                                </a>
                            </div>
                            <div class="minicart-content">
                                <h3 class="product-name">
                                    <a href="product-details.html">tên sản phẩm trong giỏ hàng</a>
                                </h3>
                                <p>
                                    <span class="cart-quantity">1 <strong>&times;</strong></span>
                                    <span class="cart-price">$100.00</span>
                                </p>
                            </div>
                            <button class="minicart-remove"><i class="pe-7s-close"></i></button>
                        </li>
                        <li class="minicart-item">
                            <div class="minicart-thumb">
                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPham['id'] ?>">
                                    <img src="<?= BASE_URL_IMG . $sanPham['hinh_anh'] ?>" alt="product">
                                </a>
                            </div>
                            <div class="minicart-content">
                                <h3 class="product-name">
                                    <a href="product-details.html">tên sản phẩm trong giỏ hàng</a>
                                </h3>
                                <p>
                                    <span class="cart-quantity">1 <strong>&times;</strong></span>
                                    <span class="cart-price">$80.00</span>
                                </p>
                            </div>
                            <button class="minicart-remove"><i class="pe-7s-close"></i></button>
                        </li>
                    </ul>
                </div>

                <div class="minicart-pricing-box">
                    <ul>
                        <li>
                            <span>Tổng phụ</span>
                            <span><strong>$300.00</strong></span>
                        </li>
                        <li>
                            <span>Thuế môi trường (-2.00)</span>
                            <span><strong>$10.00</strong></span>
                        </li>
                        <li>
                            <span>Thuế giá trị gia tăng (20%)</span>
                            <span><strong>$60.00</strong></span>
                        </li>
                        <li class="total">
                            <span>Tổng tiền</span>
                            <span><strong>$370.00</strong></span>
                        </li>
                    </ul>
                </div>

                <div class="minicart-button">
                    <a href="cart.html"><i class="fa fa-shopping-cart"></i> Xem giỏ hàng</a>
                    <a href="cart.html"><i class="fa fa-share"></i> Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offcanvas mini cart end -->


<?php require_once 'layout/footer.php'; ?>