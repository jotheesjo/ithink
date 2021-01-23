<?php include("header.php");
include("aside.php");
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Testimonial</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">Testimonial Info</h3>
                                <?php if (isset($_GET['msg'])) {
                                    echo '<br/><p style="color:#ff0000">' . $_GET['msg'] . '</p>';
                                } ?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="Title" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Designation</label>
                                            <input type="text" class="form-control" name="designation" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Image(453*363)</label>
                                            <input type="file" class="form-control" name="photo" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control" name="description" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="insert_testimonial"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
