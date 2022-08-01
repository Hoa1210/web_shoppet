<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2022 02:25:11 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Register </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT; ?>/public/images/favicon.ico">

    <!-- App css -->
    <link href="<?php echo _WEB_ROOT; ?>/public/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo _WEB_ROOT; ?>/public/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">
                    <div class="auth-brand text-center text-lg-start">
                        <a href="index.html" class="logo-dark">
                            <span><img src="<?php echo _WEB_ROOT; ?>/public/images/logo-dark.png" alt="" height="18"></span>
                        </a>
                        <a href="index.html" class="logo-light">
                            <span><img src="<?php echo _WEB_ROOT; ?>/public/images/logo.png" alt="" height="18"></span>
                        </a>
                    </div>
                    <!-- form -->
                    <form action="?controller=user&method=register" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="fname" class="form-label">First Name</label>
                                    <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter your first name " required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="lname" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter your last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input class="form-control" type="text" id="username" name="username" placeholder="Enter your user name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input class="form-control" type="email" id="email" name="email" required placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" required id="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-muted">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <div class="mb-0 d-grid text-center">
                            <button class="btn btn-primary" type="submit" name="submit"><i class="mdi mdi-account-circle"></i> Sign Up </button>
                        </div>
                        <!-- social-->

                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Already have account? <a href="?controller=user&method=login" class="text-muted ms-1"><b>Log In</b></a></p>
                    </footer>
                </div>
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">I love everything!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> T love you! . <i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Shoppet Admin User
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>
    <!-- end auth-fluid-->

    <!-- bundle -->
    <script src="<?php echo _WEB_ROOT; ?>/public/js/vendor.min.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/js/app.min.js"></script>

    <script src="<?php echo _WEB_ROOT; ?>/public/js/pages/demo.form-wizard.js"></script>

</body>


<!-- Mirrored from coderthemes.com/hyper/saas/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2022 02:25:11 GMT -->

</html>