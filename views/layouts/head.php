<meta charset="utf-8" />
<title>ADMIN SHOPPET</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<base href="<?php echo _WEB_ROOT; ?>/">
<!-- App favicon -->
<link rel="shortcut icon" href="public/images/favicon.ico">

<!-- third party css -->
<?php
if (isset($viewName)) {
    if ($viewName == 'product/v_index' || $viewName == 'category/v_index' || $viewName == 'size/v_index' || $viewName == 'color/v_index') {
?>
        <link href="public/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
        <link href="public/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />

    <?php
    }
    if ($viewName == 'product/v_create') {
    ?>
        <link href="public/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="public/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />
<?php
    }
}
?>

<!-- third party css end -->

<!-- App css -->
<link href="public/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="public/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />