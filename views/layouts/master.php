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
        if ($viewName == 'product/v_create') {
        ?>
            <!-- quill js -->
            <script src="public/js/vendor/quill.min.js"></script>
            <!-- quill Init js-->
            <script src="public/js/pages/demo.quilljs.js"></script>
        <?php
        }
        if ($viewName == 'category/v_index' || $viewName == 'size/v_index' || $viewName == 'color/v_index') {
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
        if ($viewName == 'category/v_create' || $viewName == 'category/v_update') {
        ?>
            <script type="text/javascript">
                function ChangeToSlug() {
                    var slug;

                    //L???y text t??? th??? input title 
                    slug = document.getElementById("name").value;
                    slug = slug.toLowerCase();
                    //?????i k?? t??? c?? d???u th??nh kh??ng d???u
                    slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
                    slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
                    slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
                    slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
                    slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
                    slug = slug.replace(/??|???|???|???|???/gi, 'y');
                    slug = slug.replace(/??/gi, 'd');
                    //X??a c??c k?? t??? ?????t bi???t
                    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                    //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
                    slug = slug.replace(/ /gi, "-");
                    //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
                    //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
                    slug = slug.replace(/\-\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-/gi, '-');
                    //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
                    slug = '@' + slug + '@';
                    slug = slug.replace(/\@\-|\-\@|\@/gi, '');

                    // Th??m s??? random sau slug ????? kh??ng b??? tr??ng 
                    if (slug != '') {
                        slug = slug + "-" + Math.floor(Math.random() * 1000);
                    }
                    //In slug ra textbox c?? id ???slug???
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