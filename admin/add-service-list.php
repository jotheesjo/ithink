<?php include("header.php");
include("aside.php");
$app_list = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM about WHERE about_id='1'"));
?>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">Service List</h3>
                                <?php if (isset($_GET['msg'])) {
                                    echo '<br/><p style="color:#ff0000">' . $_GET['msg'] . '</p>';
                                } ?>
                                <hr>
                                <div class="appand">

                                    <div class="row clonesec">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Service</label>
                                                <select class="form-control" name="service">
                                                    <option disabled selected></option>
                                                    <?php $servicelist=mysqli_query($conn,"SELECT * FROM services WHERE status='1'");
                                                while($servicerow=mysqli_fetch_array($servicelist)){ ?>
                                                    <option value="<?=$servicerow['service_id'];?>">
                                                        <?=$servicerow['name'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Type</label>
                                                <select class="form-control" name="type" required>
                                                    <option disabled selected></option>
                                                    <option value="photos">Photos</option>
                                                    <option value="videos">Videos</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Name" name="name"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Description</label>
                                                <textarea class="form-control" name="description"></textarea>
                                            </div>
                                        </div>

                                    </div>


                                </div>


                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="insert_service_list"> <i
                                        class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>