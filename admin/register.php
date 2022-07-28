<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2022 02:25:11 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Register | Shoppet Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="public/assets/images/favicon.ico">

    <!-- App css -->
    <link href="public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box" style="max-width: 650px;">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <h4 class="header-title mb-3">Register account admin</h4>

                        <form action="" method="POST">
                            <div id="progressbarwizard">

                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                    <li class="nav-item">
                                        <a href="#account-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-account-circle me-1"></i>
                                            <span class="d-none d-sm-inline">Account</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-tab-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-face-profile me-1"></i>
                                            <span class="d-none d-sm-inline">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#finish-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                            <span class="d-none d-sm-inline">Finish</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content b-0 mb-0">

                                    <div id="bar" class="progress mb-3" style="height: 7px;">
                                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                                    </div>

                                    <div class="tab-pane" id="account-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="userName1">User name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="userName1" name="userName1" value="hyper">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="password1"> Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="password1" name="password1" class="form-control" value="123456789">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="confirm1">Re Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="confirm1" name="confirm1" class="form-control" value="123456789">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="profile-tab-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="name1"> First name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="name1" name="name1" class="form-control" value="Francis">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="surname1"> Last name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="surname1" name="surname1" class="form-control" value="Brinkman">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="email1">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="email1" name="email1" class="form-control" value="cory1979@hotmail.com">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="finish-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                    <h3 class="mt-0">Thank you !</h3>

                                                    <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                        mattis dictum aliquet.</p>

                                                    <div class="mb-3">
                                                        <div class="form-check d-inline-block">
                                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                                            <label class="form-check-label" for="customCheck3">I agree with the Terms and Conditions</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <ul class="list-inline mb-0 wizard">
                                        <li class="previous list-inline-item">
                                            <a href="javascript:void(0);" class="btn btn-info">Previous</a>
                                        </li>
                                        <li class="next list-inline-item float-end">
                                            <a href="javascript:void(0);" class="btn btn-info">Next</a>
                                        </li>
                                    </ul>

                                </div> <!-- tab-content -->
                            </div> <!-- end #progressbarwizard-->
                        </form>
                        <footer class="footer footer-alt">
                        <p class="text-muted">Don't have an account? <a href="pages-register-2.html" class="text-muted ms-1"><b>Sign Up</b></a></p>
                    </footer>

                </div> <!-- end .card-body -->
                
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
    <script src="public/assets/js/vendor.min.js"></script>
    <script src="public/assets/js/app.min.js"></script>

    <script src="public/assets/js/pages/demo.form-wizard.js"></script>

</body>


<!-- Mirrored from coderthemes.com/hyper/saas/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2022 02:25:11 GMT -->

</html>