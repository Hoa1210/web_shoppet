<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Tài Khoản</h1>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li>Tài khoản</li>
            </ul>
        </div>
    </div>
</div>
<div class="profile-authentication-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="login-form">
                    <h2>Đăng Nhập</h2>
                    <form action="user.php" method="POST">
                        <?php if (isset($_SESSION['alert_login'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['alert_login']; ?>
                            </div>
                        <?php }
                        unset($_SESSION['alert_login']); ?>
                        <?php if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
                            $user = $_COOKIE['username'];
                            $pass = $_COOKIE['password'];
                            $check = "checked";
                        } else {
                            $user = "";
                            $pass = "";
                            $check = "";
                        } ?>
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" value="<?php echo $user; ?>" placeholder="Nhập tên đăng nhập... " maxlength="16" required>

                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" id="mat_khau" name="mat_khau" value="<?php echo $pass; ?>" placeholder="Nhập mật khẩu..." maxlength="16" required>

                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 remember-me-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" <?php echo $check; ?> type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">Ghi nhớ đăng nhập</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 lost-your-password-wrap">
                                <a href="#" class="lost-your-password">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <button type="submit" name="login">Đăng nhập</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="register-form">
                    <h2>Đăng Ký</h2>
                    <form action="" enctype="multipart/form-data" method="POST">
                        <?php if (isset($_SESSION['error_success'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_SESSION['error_success']; ?>
                            </div>
                        <?php }
                        unset($_SESSION['error_success']); ?>
                        <?php if (isset($_SESSION['error_danger'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['error_danger']; ?>
                            </div>
                        <?php }
                        unset($_SESSION['error_danger']); ?>
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" maxlength="16" required placeholder="Nhập tên đăng nhập...">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Nhập email...">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" id="mat_khau" name="mat_khau" maxlength="16" required placeholder="Nhập mật khẩu...">
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="mat_khau" name="mat_khau_1" maxlength="16" required placeholder="Nhập lại mật khẩu...">
                        </div>
                        <p class="description">Mật khẩu phải dài ít nhất 8 ký tự.
                            Để làm cho nó mạnh mẽ hơn, hãy sử dụng các chữ cái, số và ký hiệu chữ thường và chữ thường như ! " ? $ % ^ & )</p>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="checkme">
                            <label class="form-check-label" for="checkme">
                                Chấp nhận <a href="terms-conditions.php">Điều khoản dịch vụ</a> và <a href="privacy-policy.php">Chính sách bảo mật.</a>
                            </label>
                        </div>
                        <button type="submit" name="btn_submit">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
