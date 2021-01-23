<?php include("header.php");
include("aside.php");
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Team</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">Team Info</h3>
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
                                            <label class="control-label">Image(350*350)</label>
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
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Facebook</label>
                                            <input type="text" class="form-control"  name="facebook" placeholder="Facebook" >
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Youtube</label>
                                            <input type="text" class="form-control"  name="youtube" placeholder="Youtube"  >
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pinterest</label>
                                            <input type="text" class="form-control"  name="pinterest" placeholder="pinterest"  >
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Instagram</label>
                                            <input type="text" class="form-control"  name="instagram" placeholder="Instagram"  >
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Linkedin</label>
                                            <input type="text" class="form-control"  name="linkedin" placeholder="Linkedin"  >
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Twitter</label>
                                            <input type="text" class="form-control"  name="twitter" placeholder="twitter"  >
                                        </div>
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="insert_team"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
