<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Cập nhật người dùng | NN Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";

        require_once "views/layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Quản lý đơn hàng</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Đơn hàng</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Sửa thông tin đơn hàng</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="?act=sua-don-hang" method="post">
                                                <input type="hidden" name="id" value="<?= $donHang['id'] ?>">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Tên người nhận</label>
                                                            <input type="text" class="form-control" placeholder="Nhập tên người nhận" name="ten_nguoi_nhan" value="<?= $donHang['ten_nguoi_nhan'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['ten_nguoi_nhan']) ? $_SESSION['errors']['ten_nguoi_nhan'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Email</label>
                                                            <input type="email" class="form-control" placeholder="Nhập email người nhận" name="email_nguoi_nhan" value="<?= $donHang['email_nguoi_nhan']  ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['email_nguoi_nhan']) ? $_SESSION['errors']['email_nguoi_nhan'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Số điện thoại</label>
                                                            <input type="number" class="form-control" placeholder="Nhập số điện thoại người nhận" name="sdt_nguoi_nhan" value="<?= $donHang['sdt_nguoi_nhan']   ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['sdt_nguoi_nhan']) ? $_SESSION['errors']['sdt_nguoi_nhan'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Địa chỉ</label>
                                                            <input type="text" class="form-control" placeholder="Nhập địa chỉ người nhận" name="dia_chi_nguoi_nhan" value="<?= $donHang['dia_chi_nguoi_nhan']  ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['dia_chi_nguoi_nhan']) ? $_SESSION['errors']['dia_chi_nguoi_nhan'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="citynameInput" class="form-label">Nhập ghi chú</label>
                                                            <input type="text" class="form-control" placeholder="Nhập ghi chú" name="ghi_chu" value="<?= $donHang['ghi_chu']  ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['ghi_chu']) ? $_SESSION['errors']['ghi_chu'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>


                                                    <!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Trạng thái đơn hàng</label>
                                                            <?php
                                                            // Kiểm tra dữ liệu đơn hàng
                                                            $trangThaiDonHang = $donHang['trang_thai_id'];
                                                            ?>
                                                            <select class="form-control" name="trang_thai_id" required>
                                                                <option value="">-- Chọn trạng thái --</option>
                                                                <option value="1" <?= $trangThaiDonHang == 1 ? 'selected' : '' ?>>Chưa Xác Nhận</option>
                                                                <option value="2" <?= $trangThaiDonHang == 2 ? 'selected' : '' ?>>Đã Xác Nhận</option>
                                                                <option value="3" <?= $trangThaiDonHang == 3 ? 'selected' : '' ?>>Chưa Thanh Toán</option>
                                                                <option value="4" <?= $trangThaiDonHang == 4 ? 'selected' : '' ?>>Đã Thanh Toán</option>
                                                                <option value="5" <?= $trangThaiDonHang == 5 ? 'selected' : '' ?>>Đang Chuẩn Bị Hàng</option>
                                                                <option value="6" <?= $trangThaiDonHang == 6 ? 'selected' : '' ?>>Đang Giao</option>
                                                                <option value="7" <?= $trangThaiDonHang == 7 ? 'selected' : '' ?>>Đã Giao</option>
                                                                <option value="8" <?= $trangThaiDonHang == 8 ? 'selected' : '' ?>>Đã Nhận</option>
                                                                <option value="9" <?= $trangThaiDonHang == 9 ? 'selected' : '' ?>>Thành Công</option>
                                                                <option value="10" <?= $trangThaiDonHang == 10 ? 'selected' : '' ?>>Hoàn Hàng</option>
                                                                <option value="11" <?= $trangThaiDonHang == 11 ? 'selected' : '' ?>>Hủy Đơn</option>
                                                            </select>



                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['trang_thai_id']) ? $_SESSION['errors']['trang_thai_id'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    ?>

</body>

</html>