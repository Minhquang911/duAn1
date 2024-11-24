<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Bảng danh mục sản phẩm bên trái có thể giữ nguyên hoặc không cần thiết -->
            </div>

            <div class="col-md-9">
                <section class="feature-product section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <h2 class="title">Sản phẩm theo danh mục</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                                    <?php
                                    // Lấy ID danh mục từ URL
                                    $categoryId = isset($_GET['id']) ? $_GET['id'] : 0;
                                    // Kiểm tra nếu dữ liệu không có, tránh lỗi
                                    $Sanphams = isset($Sanphams) ? $Sanphams : [];

                                    // Lọc sản phẩm theo danh mục
                                    $filteredProducts = array_filter($Sanphams, function ($product) use ($categoryId) {
                                        return $product['danh_muc_id'] == $categoryId;
                                    });

                                    foreach ($filteredProducts as $sp):
                                    ?>
                                        <!-- product item start -->
                                        <div class="product-item">
                                            <figure class="product-thumb">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sp['id'] ?>">
                                                    <img class="pri-img" src="<?= BASE_URL_IMG . $sp['hinh_anh'] ?>" alt="product">
                                                    <img class="sec-img" src="<?= BASE_URL_IMG . $sp['hinh_anh'] ?>" alt="product">
                                                </a>
                                                <div class="product-badge">
                                                    <?php if ($sp['gia_khuyen_mai']) { ?>
                                                        <div class="product-label discount">
                                                            <span>Giảm giá</span>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="cart-hover">
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sp['id'] ?>" class="btn btn-cart">Thêm vào giỏ hàng</a>
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
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

<?php require_once 'layout/footer.php'; ?>