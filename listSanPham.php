<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>

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
                                <li class="breadcrumb-item"><a href="shop.html">Sản phẩm</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
     
<!-- featured product area start -->
 
<section class="feature-product section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">Danh sách sản phẩm</h2>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                    <?php foreach ($Sanphams as $key=> $sp): ?>
                        <!-- product item start -->
                        <div class="product-item">
                            <figure class="product-thumb">
                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sp['id'] ?>">
                                    <img class="pri-img" src="<?= BASE_URL_IMG . $sp['hinh_anh'] ?>" alt="product">
                                    <img class="sec-img" src="<?= BASE_URL_IMG . $sp['hinh_anh'] ?>" alt="product">
                                </a>
                                <div class="product-badge">
                                    <?php
                                    $ngayNhap = new DateTime($sp['ngay_nhap']);
                                    $ngayHienTai = new DateTime();
                                    $tinhNgay = $ngayHienTai->diff($ngayNhap);

                                    if ($tinhNgay->days <= 7) { ?>
                                        <div class="product-label new">
                                            <span>Mới</span>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <?php if ($sp['gia_khuyen_mai']) { ?>

                                        <div class="product-label discount">
                                            <span>Giảm giá</span>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="cart-hover">
                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sp['id'] ?> " class="btn btn-cart">Thêm vào giỏ hàng</a>
                                </div>
                            </figure>

                            <div class="product-caption text-center">

                                <h6 class="product-name">
                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sp['id'] ?>"><?= $sp['ten_san_pham'] ?></a>
                                </h6>
                                <div class="price-box">
                                    <?php if ($sp['gia_khuyen_mai']) { ?>
                                        <span class="price-regular"><?= formatPrice($sp['gia_khuyen_mai']) . 'đ'; ?></span>
                                        <span class="price-old"><del><?= formatPrice($sp['gia_ban']) . 'đ'; ?></del></span>
                                    <?php } else { ?>
                                        <span class="price-regular"><?= formatPrice($sp['gia_ban']) . 'đ'; ?></span>
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
</main>
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