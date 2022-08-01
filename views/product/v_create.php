<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                    <li class="breadcrumb-item active">Create Product</li>
                </ol>
            </div>
            <h4 class="page-title">Create Category</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form action="?controller=category&method=create" method="post">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" name="name" onkeyup="ChangeToSlug()" placeholder="Enter category name">
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" id="slug" class="form-control" name="slug" placeholder="Enter category slug">
                            </div>
                            <div class="mb-3">
                                <label for="snow-editor" class="form-label">Description</label>
                                <div id="snow-editor"   style="height: 300px;">
                                    <h3><span class="ql-size-large">Hello World!</span></h3>
                                    
                                </div>
                                <input type="hidden" name="description" id="description">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                    </form>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>