<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div>
            <h4 class="page-title">List Category</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                            <a href="?controller=category&method=create" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Category</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-datatable-preview">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Create At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php
                                    foreach ($data as $key => $val) :
                                        if ($val->deleted_at == null) :
                                    ?>
                                            <tr>
                                                <td>
                                                    <?php echo $val->id; ?>
                                                </td>
                                                <td>
                                                    <?php echo $val->name; ?>
                                                </td>
                                                <td>
                                                    <?php echo $val->slug; ?>
                                                </td>
                                                <td>
                                                    <?php echo $val->description; ?>
                                                </td>
                                                <td>
                                                    <img src="<?php echo _WEB_ROOT; ?>/public/uploads/category/<?php echo $val->image; ?>" alt="Upload" width="150">
                                                </td>
                                                <td>
                                                    <?php echo $val->created_at; ?>
                                                </td>
                                                <td>
                                                <a href="?controller=category&method=update&update&id=<?php echo $val->id; ?>" class="btn btn-success mb-2"><i class="mdi dripicons-pencil"></i></a>
                                                <a href="?controller=category&method=delete&delete&id=<?php echo $val->id; ?>" class="btn btn-danger mb-2"><i class="mdi dripicons-trash"></i></a>

                                                </td>
                                            </tr>
                                    <?php
                                        endif;
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