<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
$app_list=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM home_section2 WHERE home_id='$_GET[id]'"));
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
                                <h3 class="card-title">Edit Section</h3>
                                <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            <input type="hidden" name="home_id" required value="<?=$app_list['home_id'];?>">
                                            <input type="text" value="<?=$app_list['title'];?>" id="firstName" class="form-control" placeholder="Title" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control tiny" required name="description"><?=$app_list['description'];?></textarea>
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
                                
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="update_homesec2"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php");?>
