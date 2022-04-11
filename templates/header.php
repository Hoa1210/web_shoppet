<body>

<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <p>FREE 5 days shipping over $99</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="search-box">
                    <form action="search.php" method="POST">
                        <input type="text" class="input-search" placeholder="Enter your keywords..." name="tu_khoa">
                        <button type="submit" name="tim_kiem"><i class='bx bx-search'></i></button>
<!--                        <input type="submit" name="tim_kiem" value="a">-->
                    </form>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <ul>
                    <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area">
    <div class="patoi-responsive-nav">
        <div class="container">
            <div class="patoi-responsive-menu">
                <div class="logo">
                    <a href="home.php"><img src="public/patoi/assets/img/logo.png" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="patoi-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="home.php"><img src="public/patoi/assets/img/logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php?index" class=" nav-link <?php echo isset($_GET['index']) ? "active" : " ";?>">Home</a>
<!--                            <ul class="dropdown-menu">-->
<!--                                <li class="nav-item"><a href="index.html" class="nav-link">Home Demo - One</a></li>-->
<!--                                <li class="nav-item"><a href="index-2.html" class="nav-link">Home Demo - Two</a></li>-->
<!--                                <li class="nav-item"><a href="index-3.html" class="nav-link active">Home Demo - Three</a></li>-->
<!--                            </ul>-->
                        </li>
                        <li class="nav-item">
                            <a href="about_us.php?about_us" class="nav-link <?php echo isset($_GET['about_us']) ? "active" : " "; ?>">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="shop.php?shop" class=" nav-link <?php echo isset($_GET['shop']) ? "active" : " "; ?>">Shop</a>

                        </li>
                        <li class="nav-item">
                            <a href="blog.php?blog" class=" nav-link <?php echo isset($_GET['blog']) ? "active" : " "; ?>">Blog</a>
                        </li>
                        <li class="nav-item"><a href="contact.php?contact" class="nav-link <?php echo isset($_GET['contact']) ? "active" : " "; ?>">Contact</a></li>
                    </ul>
                    <div class="others-option">
                        <div class="d-flex align-items-center">
                            <ul>
                                <li>
                                    <select class="form-select">
                                        <option selected>English</option>
                                        <option value="1">Spanish</option>
                                        <option value="2">Chinese</option>
                                    </select>
                                </li>
                                <li ><a href="user.php?user" ><i class='bx bx-user-circle'></i></a></li>
                                <li><a href="cart.php"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <ul>
                            <li>
                                <select class="form-select">
                                    <option selected>English</option>
                                    <option value="1">Spanish</option>
                                    <option value="2">Chinese</option>
                                </select>
                            </li>
                            <li><a href="profile-authentication.php"><i class='bx bx-user-circle'></i></a></li>
                            <li><a href="cart.php"><i class='bx bx-cart'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
