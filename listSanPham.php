<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>

<main>
    <div class="container">
        <div class="row">
            <!-- Bảng danh mục sản phẩm - bên trái -->
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Danh mục sản phẩm</h3>
                        <ul class="sidebar-list">
                            <?php
                            if (isset($categories) && is_array($categories)):
                                foreach ($categories as $category):
                            ?>
                                    <li>
                                        <a href="<?= BASE_URL . '?act=danh-muc-san-pham&id=' . $category['id'] ?>">
                                            <?= $category['ten_danh_muc'] ?> <!-- Tên danh mục -->
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>Không có danh mục sản phẩm.</p>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <!-- Bảng bộ lọc sản phẩm - tìm theo giá -->
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Bộ lọc sản phẩm</h3>
                        <form action="<?= BASE_URL ?>" method="GET">
                            <div class="price-filter">
                                <label for="min_price">Giá từ:</label>
                                <input type="number" id="min_price" name="min_price" placeholder="0" value="<?= isset($_GET['min_price']) ? $_GET['min_price'] : '' ?>">
                            </div>
                            <div class="price-filter">
                                <label for="max_price">Đến:</label>
                                <input type="number" id="max_price" name="max_price" placeholder="1000000" value="<?= isset($_GET['max_price']) ? $_GET['max_price'] : '' ?>">
                            </div>
                            <button type="submit" class="btn btn-filter">Lọc theo giá</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Danh sách sản phẩm - bên phải -->
            <div class="col-md-9">
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
                                <!-- section title end -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                                    <?php
                                    // Kiểm tra xem có filter theo danh mục hay không
                                    $categoryFilter = isset($_GET['category']) ? $_GET['category'] : [];
                                    $minPrice = isset($_GET['min_price']) ? $_GET['min_price'] : 0;
                                    $maxPrice = isset($_GET['max_price']) ? $_GET['max_price'] : PHP_INT_MAX;

                                    foreach ($Sanphams as $key => $sp):
                                        // Kiểm tra nếu sản phẩm thuộc danh mục được chọn và giá lọc
                                        if ((empty($categoryFilter) || in_array($sp['danh_muc_id'], $categoryFilter)) &&
                                            $sp['gia_ban'] >= $minPrice && $sp['gia_ban'] <= $maxPrice
                                        ):
                                    ?>
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
                                    <?php endif;
                                    endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- featured product area end -->
            </div>
        </div>
    </div>
</main>

<?php require_once 'layout/footer.php'; ?>