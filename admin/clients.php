<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
$app_list=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM home_section1 WHERE home_id='$_GET[id]'"));
}
?>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">Clients</h3>
                                <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                <hr>
                                <div class="row p-t-20">
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Image(781*246)</label>
                                            <input type="file" class="form-control" name="photo" >
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="insert_client"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Clients logo</h4>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $service_list = mysqli_query($conn, "SELECT * FROM clients");
                                    while ($row = mysqli_fetch_array($service_list)) { ?>
                                        <tr>
                                        <td><img src="../images/clients/<?= $row['path']; ?>" style="width:100px;"/></td>
                                            <td><?php if ($row['status'] == 1) {
                                                    echo "Active";
                                                } else {
                                                    echo "Inactive";
                                                } ?></td>
                                            <td>
                                            <!-- //edit -->
                                            <div id="responsive-modal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <form action="update.php" method="post">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Update Status</h4>
                                            </div>
                                            <div class="modal-body">
                                                
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Status:</label>
                                                        <input type="hidden" name="id" value="<?=$row['id'];?>">
                                                        <select class="form-control" name="status">
                                                        <option value="1" <?php if ($row['status'] == 1) { echo " selected";}?>> Active</option>
                                                        <option value="0" <?php if ($row['status'] == 0) { echo " selected";}?>> Inactive</option>
                                                        </select>
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger waves-effect waves-light" name="update_client">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- //delete -->
                                <div id="responsive-modal2" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <form action="update.php" method="post">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Delete Clients</h4>
                                            </div>
                                            <p> Are you sure you want to delete this client?
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="<?=$row['id'];?>">
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger waves-effect waves-light" name="delete_client">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <p data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive btn waves-effect waves-light btn-primary" >Edit</p>
                                <p data-toggle="modal" data-target="#responsive-modal2" class="model_img img-responsive btn waves-effect waves-light btn-danger" >Delete</p>
                                        </tr>
                                    <?php } ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php");?>
