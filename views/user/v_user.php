
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>My Account</h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li>My Account</li>
            </ul>
        </div>
    </div>
</div>
<div class="profile-authentication-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="user.php" method="POST" >
                        <?php if (isset($_SESSION['alert_login'])) { ?>
                            <div class="alert alert-danger"  role="alert">
                                <?php echo $_SESSION['alert_login'];?>
                            </div>
                        <?php } unset($_SESSION['alert_login']);?>
                        <?php if(isset($_COOKIE['username'])&&isset($_COOKIE['password'])){
                            $user = $_COOKIE['username'];
                            $pass = $_COOKIE['password'];
                            $check = "checked";
                        }else{
                            $user = "";
                            $pass = "";
                            $check = "";
                        }?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap"  value="<?php echo $user;?>" placeholder="Username " required >

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="mat_khau" name="mat_khau" value="<?php echo $pass;?>" placeholder="Password" required >

                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 remember-me-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" <?php echo $check;?> type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 lost-your-password-wrap">
                                <a href="#" class="lost-your-password">Lost your password?</a>
                            </div>
                        </div>
                        <button type="submit" name="login">Log In</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="register-form">
                    <h2>Register</h2>
                    <form action="" enctype="multipart/form-data" method="POST">
                        <?php if (isset($_SESSION['error_success'])) { ?>
                            <div class="alert alert-success"  role="alert">
                                <?php echo $_SESSION['error_success'];?>
                            </div>
                        <?php } unset($_SESSION['error_success']);?>
                        <?php if (isset($_SESSION['error_danger'])) { ?>
                            <div class="alert alert-danger"  role="alert">
                                <?php echo $_SESSION['error_danger'];?>
                            </div>
                        <?php } unset($_SESSION['error_danger']);?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" required placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="mat_khau" name="mat_khau" required placeholder="Password">
                        </div>
                        <p class="description">The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ & )</p>
                        <button type="submit" name="btn_submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
