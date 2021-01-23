<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
$app_list=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM services WHERE service_id='$_GET[id]'"));
}
?>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">Edit Service</h3>
                                <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            <input type="hidden" name="service_id" required value="<?=$app_list['service_id'];?>">
                                            <input type="hidden" name="img" required value="<?=$app_list['image'];?>">
                                            <input type="text" value="<?=$app_list['title'];?>" id="firstName" class="form-control" placeholder="Title" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Image(270*250)</label>
                                            <input type="file" class="form-control" name="photo" >
                                            <img src="../images/service/<?=$app_list['image'];?>" style="width:50px"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1" <?php if($app_list['status']=='1'){ echo " selected"; }?>>Active</option>
                                                <option value="0" <?php if($app_list['status']=='0'){ echo " selected"; }?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control" name="description"> <?=$app_list['description'];?></textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="update_service"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php");?>
<script>
    $(document).ready(function() {
        $("#meetingwith").change(function() {
            var meeting_with = $(this).val();
            $.ajax({
                type: 'POST',
                data: {
                    meeting_with: meeting_with
                },
                url: 'ajax.php',
                success: function(data) {
                    $("#meperson").html(data);
                }
            });
        });
    });
</script>