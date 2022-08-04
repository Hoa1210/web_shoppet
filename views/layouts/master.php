<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2022 02:23:57 GMT -->

<head>
    <?php include 'head.php'; ?>
</head>

<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <?php include 'leftmenu.php'; ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <?php include 'topbar.php'; ?>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">
                    <?php include 'content.php'; ?>
                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <?php include 'footer.php'; ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->

    <!-- /End-bar -->

    <!-- bundle -->
    <script src="public/js/vendor.min.js"></script>
    <script src="public/js/app.min.js"></script>

    <!-- third party js -->
    <?php
    if (isset($viewName)) {
        if ($viewName == 'product/v_index') {
    ?>
            <script src="public/js/vendor/jquery.dataTables.min.js"></script>
            <script src="public/js/vendor/dataTables.bootstrap5.js"></script>
            <script src="public/js/vendor/dataTables.responsive.min.js"></script>
            <script src="public/js/vendor/responsive.bootstrap5.min.js"></script>

            <!-- demo app -->
            <script src="public/js/pages/demo.products.js"></script>
            <!-- end demo js-->
        <?php
        }
        if ($viewName == 'category/v_index' || $viewName == 'size/v_index') {
        ?>
            <script src="public/js/vendor/jquery.dataTables.min.js"></script>
            <script src="public/js/vendor/dataTables.bootstrap5.js"></script>
            <script src="public/js/vendor/dataTables.responsive.min.js"></script>
            <script src="public/js/vendor/responsive.bootstrap5.min.js"></script>
    
            <!-- demo app -->
            <script src="public/js/pages/demo.datatable-init.js"></script>
            <!-- end demo js-->
        <?php
        }
        if ($viewName == 'category/v_create'|| $viewName == 'category/v_update') {
        ?>
            <script type="text/javascript">
                function ChangeToSlug() {
                    var slug;

                    //Lấy text từ thẻ input title 
                    slug = document.getElementById("name").value;
                    slug = slug.toLowerCase();
                    //Đổi ký tự có dấu thành không dấu
                    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                    slug = slug.replace(/đ/gi, 'd');
                    //Xóa các ký tự đặt biệt
                    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                    //Đổi khoảng trắng thành ký tự gạch ngang
                    slug = slug.replace(/ /gi, "-");
                    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                    slug = slug.replace(/\-\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-/gi, '-');
                    //Xóa các ký tự gạch ngang ở đầu và cuối
                    slug = '@' + slug + '@';
                    slug = slug.replace(/\@\-|\-\@|\@/gi, '');

                    // Thêm số random sau slug để không bị trùng 
                    if (slug != '') {
                        slug = slug + "-" + Math.floor(Math.random() * 1000);
                    }
                    //In slug ra textbox có id “slug”
                    document.getElementById('slug').value = slug;
                }
            </script>

            <!-- <script type="text/javascript">
                var description = document.getElementById('snow-editor').innerHTML;

                document.getElementById('description').value = description;
            </script> -->
           
    <?php
        }
    }
    ?>
    <!-- third party js ends -->


</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jul 2022 02:24:33 GMT -->

</html>