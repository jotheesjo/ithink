<?php include("header.php");
include("aside.php");
if(isset($_GET['edit'])){
$bloginfo=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM blog WHERE id='$_GET[edit]'"));

}
?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Edit Blog</h4>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="update.php" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h3 class="card-title">Blog Info</h3>
                                        <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Title</label>
                                                    <input type="hidden" name="id" required value="<?=$bloginfo['id'];?>">
                                                    <input type="text" id="firstName" class="form-control" placeholder="Name" name="title" required value="<?=$bloginfo['title'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Image</label>
                                                    <input type="hidden" name="image" required value="<?=$bloginfo['path'];?>">
                                                    <input type="file" class="form-control" id="banner" name="file_img[]" multiple>
                                                    
                                                    </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Slug</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="Slug" name="slug" required value="<?=$bloginfo['slug'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Description</label>
                                                     <textarea class="form-control tinymce" name="blog" id="mytextarea"><?=$bloginfo['blog'];?></textarea>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Short Description</label>
                                                     <textarea class="form-control tinymce" name="shortblog"><?=$bloginfo['shortblog'];?></textarea>
                                                    </div>
                                            </div>
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Status</label>
                                                    <select class="form-control" name="status">
                                                        <option value="active" <?php if($bloginfo['status']=='active'){ echo " selected"; }?>>Active</option>
                                                        <option value="inactive" <?php if($bloginfo['status']=='inactive'){ echo " selected"; }?>>Inactive</option>
                                                    </select>
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="update_blog"> <i class="fa fa-check"></i> Save</button>
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
    $(document).ready(function(){
    $("#stateid").change(function(){
       var state=$(this).val();
        $.ajax({
        type:'POST',
        data: { load_state: state},
        url:'ajax.php',
        success:function(data){
            $("#city").html(data);
        }
    });
    });
        });
</script>
 