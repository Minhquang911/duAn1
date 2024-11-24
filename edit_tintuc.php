<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title> them tin tuc moi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</head>
<script src="https://cdn.tiny.cloud/1/3oqqkp2i4g2oyb435wcrf2pmo79ymu9752opx0408lp70pa1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea', // Chọn thẻ textarea cần kích hoạt TinyMCE
        plugins: 'lists link image table code', // Các plugin bạn muốn sử dụng
        toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code', // Thanh công cụ
        height: 400, // Chiều cao của trình chỉnh sửa
        api_key: '3oqqkp2i4g2oyb435wcrf2pmo79ymu9752opx0408lp70pa1', // Đặt API Key của bạn
    });
</script>


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
                                <h4 class="mb-sm-0">Quản Lý Trang Tin Tức</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Tin Tức</li>
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
                                        <h4 class="card-title mb-0 flex-grow-1"> Update danh mục Tin Tuc </h4>
                                        <div class="flex-shrink-0">
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="?act=sua-tin-tuc" method="post" enctype="multipart/form-data">

                                                <input type="hidden" name="id" value="<?= $tinTuc['id'] ?>">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Tiêu Đề</label>
                                                            <input type="text" class="form-control" placeholder=" xin moi nhap tieu de" name="tieude" value="<?= $tinTuc['tieude'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['tieude']) ? $_SESSION['errors']['tieude'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Trạng Thái </label>
                                                            <select class="form-select" name="Trangthai" value="<?= $tinTuc['Trangthai'] ?>">
                                                                <option selected disabled> Chọn trạng thái</option>
                                                                <option value="1" <?= $tinTuc['Trangthai'] == 1 ? 'selected' : '' ?>> ON</option>
                                                                <option value="2" <?= $tinTuc['Trangthai'] == 2 ? 'selected' : '' ?>>OFF</option>
                                                            </select>
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['Trangthai']) ? $_SESSION['errors']['Trangthai'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Nội Dung</label>
                                                            <!-- Đảm bảo textarea này có giá trị ban đầu được load từ DB -->
                                                            <textarea name="noidung" id="noidung" class="form-control"><?= htmlspecialchars($tinTuc['noidung']) ?></textarea>
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['noidung']) ? $_SESSION['errors']['noidung'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Ngày Tạo</label>
                                                            <input type="date" class="form-control" name="ngay_tao" value="<?= $tinTuc['ngay_tao'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['ngay_tao']) ? $_SESSION['errors']['ngay_tao'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Ảnh</label>
                                                            <input type="file" class="form-control" name="image" value="<?= $tinTuc['image'] ?>">
                                                            <img src="upload_images/<?= htmlspecialchars($tinTuc['image']) ?>" width="100" height="100">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['errors']['image']) ? $_SESSION['errors']['image'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->



                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                </div>

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