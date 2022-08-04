<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Size</a></li>
                    <li class="breadcrumb-item active">Create Size</li>
                </ol>
            </div>
            <h4 class="page-title">Create Size</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-xl-6">
                            <?php if (isset($_SESSION['alert_size']) ) {?>
                                    <div class="alert alert-success ?> alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <strong>Success - </strong> <?php echo $_SESSION['alert_size']; ?>
                                    </div>
                            <?php unset($_SESSION['alert_size']);
                            } ?>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" name="name"  placeholder="Enter size name">
                            </div>
                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                    </form>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>