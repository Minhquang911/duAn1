<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link đến Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Đăng Nhập</h5>

                <?php if (isset($_SESSION['error'])) { ?>
                    <p class="text-danger"><?= $_SESSION['error'] ?></p>
                <?php } else { ?>
                    <p class="login">Vui lòng đăng nhập</p>
                <?php } ?>

                <form action="<?= 'http://localhost/base_du_an_1/base_du_an_1/index.php' . '?act=check-login' ?>" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" minlength="6" name="mat_khau">
                    </div>

                    <div class="mb-3">
                        <a href="#" class="text-decoration-none">Quên mật khẩu?</a>
                    </div>
                    <div class="mb-3">
                        <a href="<?= 'http://localhost/base_du_an_1/base_du_an_1/index.php' . '?act=dangky' ?>" class="text-decoration-none">Chưa có tài khoản? Đăng ký ngay!</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>