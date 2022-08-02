
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php
                    if(isset($data['status'])):
                    ?>
                    <div class="alert alert-success">
                        <?php echo $data['content']; ?>
                    </div>
                    <?php
                    endif;
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" name="name" onkeyup="ChangeToSlug()" value="<?php echo $data['name']; ?>" placeholder="Enter category name">
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" id="slug" class="form-control" name="slug" value="<?php echo $data['slug']; ?>" placeholder="Enter category slug">
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" id="description" value="<?php echo $data['description']; ?>" style="height: 100px;"></textarea>
                                <label for="description">Description</label>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                                <img src="public/uploads/category/<?php echo $data['image']; ?>" width="150">
                            </div>
                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                    </form>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>