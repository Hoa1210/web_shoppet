<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Size</li>
                </ol>
            </div>
            <h4 class="page-title">List Size</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-5">
                        <a href="size/create.html" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Size</a>
                    </div>
                </div>
                <div class="tab-content">
                <?php if (isset($_SESSION['alert_size'])) { ?>
                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            <?php 
                                echo $_SESSION['alert_size']; 
                                unset($_SESSION['alert_size']);
                            ?>
                        </div>
                    <?php } ?>
                    <div class="tab-pane show active" id="basic-datatable-preview">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                foreach ($data as $key => $val) :
                                ?>
                                        <tr>
                                            <td>
                                                <?php echo $val->id; ?>
                                            </td>
                                            <td>
                                                <?php echo $val->name; ?>
                                            </td>
                                            <td>
                                                <a href="size/update/<?php echo $val->id; ?>" class="btn btn-success mb-2"><i class="mdi dripicons-pencil"></i></a>
                                                <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#danger-header-<?php echo $val->id; ?>"><i class="mdi dripicons-trash"></i></button>
                                                <div id="danger-header-<?php echo $val->id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-danger">
                                                                <h4 class="modal-title" id="danger-header-modalLabel">B???n ch???c ch???n mu???n x??a size <?php echo $val->name; ?></h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <a href="size/delete/<?php echo $val->id; ?>" class="btn btn-danger">Delete</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                            </td>
                                        </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div> <!-- end preview-->

                    <!-- end preview code-->
                </div> <!-- end tab-content-->

                <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>