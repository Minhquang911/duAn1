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
                            <?php if (!empty($categories) && is_array($categories)): ?>
                                <?php foreach ($categories as $category): ?>
                                    <li>
                                        <a href="<?= BASE_URL . '?act=danh-muc-san-pham&id=' . $category['id'] ?>" style="color: black;">
                                            <?= htmlspecialchars($category['ten_danh_muc']) ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li>Không có danh mục sản phẩm.</li>
                            <?php endif; ?>
                        </ul>

                    </div>

                    <!-- Tìm theo giá -->
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Tìm theo giá</h3>
                        <ul class="filter-options">
                            <li>
                                <input type="checkbox" id="filter-1">
                                <a href="#" style="color: black;" onclick="toggleAndApplyFilter('filter-1', 0, 1000000, event);">
                                    Giá dưới 1.000.000đ
                                </a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-2">
                                <a href="#" style="color: black;" onclick="toggleAndApplyFilter('filter-2', 1000000, 1500000, event);">
                                    1.000.000đ - 1.500.000đ
                                </a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-3">
                                <a href="#" style="color: black;" onclick="toggleAndApplyFilter('filter-3', 1500000, 2000000, event);">
                                    1.500.000đ - 2.000.000đ
                                </a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-4">
                                <a href="#" style="color: black;" onclick="toggleAndApplyFilter('filter-4', 2000000, 2500000, event);">
                                    2.000.000đ - 2.500.000đ
                                </a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-5">
                                <a href="#" style="color: black;" onclick="toggleAndApplyFilter('filter-5', 2500000, 3000000, event);">
                                    2.500.000đ - 3.000.000đ
                                </a>
                            </li>
                            <li>
                                <input type="checkbox" id="filter-6">
                                <a href="#" style="color: black;" onclick="toggleAndApplyFilter('filter-6', 3000000, 10000000, event);">
                                    Giá trên 3.000.000đ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Danh sách sản phẩm - bên phải -->
            <div class="col-md-9">
                <section class="feature-product section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <h2 class="title">Danh sách sản phẩm</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php if (!empty($Sanphams) && is_array($Sanphams)): ?>
                                <?php foreach ($Sanphams as $sp): ?>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="product-item">
                                            <figure class="product-thumb">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sp['id'] ?>">
                                                    <img class="pri-img" src="<?= BASE_URL_IMG . $sp['hinh_anh'] ?>" alt="<?= htmlspecialchars($sp['ten_san_pham']) ?>">
                                                </a>
                                            </figure>
                                            <div class="product-caption text-center">
                                                <h6 class="product-name">
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sp['id'] ?>">
                                                        <?= htmlspecialchars($sp['ten_san_pham']) ?>
                                                    </a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-regular"><?= formatPrice($sp['gia_ban']) ?> đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>Không có sản phẩm nào trong danh mục này.</p>
                            <?php endif; ?>
                        </div>


                    </div>
            </div>
        </div>
        </section>
    </div>
    </div>
    </div>
    <?php if ($totalPages > 1): ?>
        <nav>
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
                        <a class="page-link" href="<?= BASE_URL . '?act=list-sanpham&page=' . $i ?>">
                            <?= $i ?>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    <?php endif; ?>


</main>


<?php require_once 'layout/footer.php'; ?>

<script>
    function toggleAndApplyFilter(id, minPrice, maxPrice, event) {
        event.preventDefault(); // Ngăn chặn reload trang
        var checkbox = document.getElementById(id);
        checkbox.checked = !checkbox.checked;
        var url = new URL(window.location.href);
        url.searchParams.set('min_price', minPrice);
        url.searchParams.set('max_price', maxPrice);
        window.location.href = url.href; // Cập nhật URL và reload
    }
</script>