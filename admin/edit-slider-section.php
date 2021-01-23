<?php include("header.php");
include("aside.php");
$app_list=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM slider_section WHERE id='1'"));
?>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">Edit Slider Section</h3>
                                <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Link</label>
                                            <input type="text" value="<?=$app_list['link'];?>" id="firstName" class="form-control" placeholder="Title" name="link" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control tiny" required name="description"><?=$app_list['description'];?></textarea>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="update_slidersection"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php");?>
