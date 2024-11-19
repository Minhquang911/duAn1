<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>quan ly trang banner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
                                <h4 class="mb-sm-0">Quản Lý Trang Doanh Thu</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Doanh Thu</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <!-- Striped Rows -->
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1"> Danh Sach Doanh Thu </h4>
                                        <form action="?act=search-banner" method="post">
                                            <input type="search" name="search" placeholder="Tìm Kiếm theo Tiêu Đề">
                                            <input type="submit" name="timkiem" value="Tìm Kiếm" class="btn btn-soft-success material-shadow-none" class="ri-add-circle-line align-middle me-1">
                                        </form>

                                    </div><!-- end card header -->

                                    <div class="col-xxl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Doanh Thu</h4>
                                            </div><!-- end card header -->

                                            <div class="card-header p-0 border-0 bg-light-subtle">
                                                <div class="row g-0 text-center">
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1"><span class="counter-value"><?= $data['current_day']; ?></span></h5>
                                                            <p class="text-muted mb-0">Ngay</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1"><span class="counter-value"><?= $data['orders']; ?></span></h5>
                                                            <p class="text-muted mb-0">So Don</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1"><span class="counter-value"><?= $data['revenue']; ?></span>$</h5>
                                                            <p class="text-muted mb-0">Doanh So</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                            <h5 class="mb-1 text-success"><span class="counter-value"><?= $data['profit']; ?></span>%</h5>
                                                            <p class="text-muted mb-0">Loi Nhuan</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                            </div>


                                            <div class="card-body p-0 pb-2">
                                                <div>
                                                    <div id="customer_impression_charts"></div>
                                                </div>
                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        var element = document.getElementById("customer_impression_charts");

                                                        // Lấy màu từ thuộc tính data
                                                        var colors = JSON.parse(element.getAttribute("data-colors"));

                                                        var options = {
                                                            chart: {
                                                                type: "bar",
                                                                height: 350
                                                            },
                                                            series: [{
                                                                name: "Doanh thu",
                                                                data: [500, 600, 800, 700, 650, 900, 1000, 1100, 1500, 1300, 1700, 2000,
                                                                    2200, 2400, 2100, 1800, 1500, 1300, 1200, 1000, 900, 800, 600, 500
                                                                ]
                                                            }],
                                                            colors: colors,
                                                            xaxis: {
                                                                categories: [
                                                                    "00:00", "01:00", "02:00", "03:00", "04:00", "05:00",
                                                                    "06:00", "07:00", "08:00", "09:00", "10:00", "11:00",
                                                                    "12:00", "13:00", "14:00", "15:00", "16:00", "17:00",
                                                                    "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"
                                                                ],
                                                                title: {
                                                                    text: "Giờ trong ngày"
                                                                }
                                                            },
                                                            yaxis: {
                                                                title: {
                                                                    text: "Doanh thu (VNĐ)"
                                                                }
                                                            },
                                                            tooltip: {
                                                                y: {
                                                                    formatter: function(val) {
                                                                        return val.toLocaleString('vi-VN') + " VNĐ";
                                                                    }
                                                                }
                                                            }
                                                        };

                                                        var chart = new ApexCharts(element, options);
                                                        chart.render();
                                                    });
                                                </script>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->

                                    </div>

                                    <!-- end code -->
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1"> Don Hang</h4>
                                                <!-- Tìm kiếm người dùng -->
                                                <form action="?act=search-don-hang" method="post">
                                                    <input type="search" name="search" placeholder="Tìm Kiếm theo họ tên ">
                                                    <input type="submit" name="timkiem" value="Tìm Kiếm">
                                                </form>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th> STT</th>
                                                                <th>Mã đơn hàng</th>
                                                                <th>Tên người nhận</th>
                                                                <th>Số điện thoại</th>
                                                                <th>Ngày đặt</th>
                                                                <th>Tổng tiền</th>
                                                                <th>Trạng thái</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if (!empty($listdonHang)) : ?>
                                                                <?php foreach ($listdonHang as $key => $donHang) : ?>
                                                                    <tr>
                                                                        <td><?= $key + 1 ?></td>
                                                                        <td><?= $donHang['ma_don_hang'] ?></td>
                                                                        <td><?= $donHang['ten_nguoi_nhan'] ?></td>
                                                                        <td><?= $donHang['sdt_nguoi_nhan'] ?></td>
                                                                        <td><?= $donHang['ngay_dat'] ?></td>
                                                                        <td><?= $donHang['tong_tien'] ?></td>
                                                                        <td><?= $donHang['ten_trang_thai'] ?></td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            <?php else : ?>
                                                                <tr>
                                                                    <td colspan="8" class="text-center">Không có đơn hàng nào</td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        </tbody>

                                                    </table><!-- end table -->
                                                </div>
                                            </div>
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
                                    <!--end col-->
                                </div><!-- end card -->

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