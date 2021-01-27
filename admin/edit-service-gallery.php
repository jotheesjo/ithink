<?php include("header.php");
include("aside.php");
$app_list = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM service_list WHERE service_list_id='$_GET[id]'"));
?>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post" enctype="multipart/form-data">
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
                                                <input type="hidden" value="<?=$app_list['service_list_id'];?>" name="service_list_id">
                                                <select class="form-control" name="service">
                                                    <option disabled selected></option>
                                                    <?php $servicelist=mysqli_query($conn,"SELECT * FROM services WHERE status='1'");
                                                while($servicerow=mysqli_fetch_array($servicelist)){ ?>
                                                    <option value="<?=$servicerow['service_id'];?>" <?php if($app_list['service']==$servicerow['service_id']){ echo " selected"; }?>>
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
                                                    <option value="photos" <?php if($app_list['type']=='photos'){ echo " selected"; }?>>Photos</option>
                                                    <option value="videos" <?php if($app_list['type']=='videos'){ echo " selected"; }?>>Videos</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Name" name="name" value="<?=$app_list['name'];?>"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Description</label>
                                                <textarea class="form-control" name="description"><?=$app_list['description'];?></textarea>
                                            </div>
                                        </div>

                                    </div>


                                </div>


                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="update_service_list"> <i
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