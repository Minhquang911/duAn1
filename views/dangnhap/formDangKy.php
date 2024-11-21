<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <!-- Link đến Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Đăng Ký</h5>

                <?php if (isset($_SESSION['error'])) { ?>
                    <p class="text-danger"><?= $_SESSION['error'] ?></p>
                <?php } else { ?>
                    <p class="login">Vui lòng điền thông tin để đăng ký tài khoản</p>
                <?php } ?>

                <form action="<?= 'http://localhost/base_du_an_1/base_du_an_1/index.php' . '?act=check-dangky' ?>" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên" name="ten_nguoi_dung" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="so_dien_thoai" placeholder="Nhập số điện thoại" name="so_dien_thoai" required>
                    </div>
                    <div class="mb-3">
                        <label for="dia_chi" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="dia_chi" placeholder="Nhập địa chỉ" name="dia_chi" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" minlength="6" name="mat_khau" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Xác nhận mật khẩu" minlength="6" name="confirm_mat_khau" required>
                    </div>

                    
                    
                    <div class="mb-3">
                        <a href="<?= 'http://localhost/base_du_an_1/base_du_an_1/index.php' . '?act=login' ?>" class="text-decoration-none">Đã có tài khoản? Đăng nhập ngay!</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Đăng Ký</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
