<?php include("header.php");
include("aside.php");
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor"> Video Testimonial</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">Section Info</h3>
                                <?php if (isset($_GET['msg'])) {
                                    echo '<br/><p style="color:#ff0000">' . $_GET['msg'] . '</p>';
                                } ?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Link</label>
                                            <input type="text" class="form-control" name="link" required>
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="insert_video_testimonial"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
