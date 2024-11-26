<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Danh mục sản phẩm</h3>
                        <ul class="sidebar-list">
                            <?php
                            if (isset($categories) && is_array($categories)):
                                foreach ($categories as $category):
                                    // Kiểm tra xem danh mục có phải là danh mục đang được chọn không
                                    $isActive = (isset($_GET['id']) && $_GET['id'] == $category['id']) ? 'active' : '';
                            ?>
                                    <li class="<?= $isActive ?>">
                                        <a href="<?= BASE_URL . '?act=danh-muc-san-pham&id=' . $category['id'] ?>" style="color: black;">
                                            <?= $category['ten_danh_muc'] ?> <!-- Tên danh mục -->
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>Không có danh mục sản phẩm.</p>
                            <?php endif; ?>
                        </ul>
                    </div>


                    <!-- Bộ lọc sản phẩm -->
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Tìm theo giá</h3>
                        <ul class="filter-options">
                            <li>
                                <input type="checkbox" id="filter-1" onchange="applyFilter('filter-1', 0, 1000000)">
                                <a href="<?= BASE_URL . '?min_price=0&max_price=1000000' ?>" style="color: black;" onclick="toggleAndApplyFilter('filter-1', 0, 1000000, event);">Giá dưới 1.000.000đ</a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-2" onchange="applyFilter('filter-2', 1000000, 1500000)">
                                <a href="<?= BASE_URL . '?min_price=1000000&max_price=1500000' ?>" style="color: black;" onclick="toggleAndApplyFilter('filter-2', 1000000, 1500000, event);">1.000.000đ - 1.500.000đ</a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-3" onchange="applyFilter('filter-3', 1500000, 2000000)">
                                <a href="<?= BASE_URL . '?min_price=1500000&max_price=2000000' ?>" style="color: black;" onclick="toggleAndApplyFilter('filter-3', 1500000, 2000000, event);">1.500.000đ - 2.000.000đ</a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-4" onchange="applyFilter('filter-4', 2000000, 2500000)">
                                <a href="<?= BASE_URL . '?min_price=2000000&max_price=2500000' ?>" style="color: black;" onclick="toggleAndApplyFilter('filter-4', 2000000, 2500000, event);">2.000.000đ - 2.500.000đ</a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-5" onchange="applyFilter('filter-5', 2500000, 3000000)">
                                <a href="<?= BASE_URL . '?min_price=2500000&max_price=3000000' ?>" style="color: black;" onclick="toggleAndApplyFilter('filter-5', 2500000, 3000000, event);">2.500.000đ - 3.000.000đ</a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-6" onchange="applyFilter('filter-6', 3000000, 10000000)">
                                <a href="<?= BASE_URL . '?min_price=3000000' ?>" style="color: black;" onclick="toggleAndApplyFilter('filter-6', 3000000, 10000000, event);">Giá trên 3.000.000đ</a>
                            </li>
                        </ul>
                    </div>
                </div>
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