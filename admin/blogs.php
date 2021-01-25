<?php include("header.php");
include("aside.php");
$meeting_with=mysqli_query($conn,"SELECT * FROM employees WHERE emp_status='1'");
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
                <h4 class="text-themecolor">BLOGS</h4>
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
                        <form class="form-auth-small" action="insert.php" method="post" enctype="multipart/form-data">
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
                                            <input type="text" class="form-control" name="title" required="required">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Image</label>
                                            <input type="file" class="form-control" id="banner" name="file_img[]" multiple>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Slug</label>
                                            <input type="text" class="form-control" name="slug" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                           <textarea class="form-control tinymce" name="blog" id="mytextarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Short Description</label>
                                            <textarea class="form-control tinymce" name="short_blog"></textarea>
                                        </div>
                                    </div>
                                    

                                </div>
                                <!--/row-->
                                <div class="row">

                                    <!--/span-->

                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="btn_blog"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
            <div class="col-xs-12 col-sm-12">
                <div class="panel">
      <div class="panel-heading">Blogs</div>
      <div class="panel-body">
<table class="table">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Image</th>
        <th>Title</th>
        <th>Slug</th>
		<th>Status</th>      
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php $sql="select * from blog";
 $result = mysqli_query($conn,$sql);
 $i=0;
 while($row=mysqli_fetch_array($result)){ 
 $i++;?>
	 <tr>
        <td><?=$i;?></td>
        <td><img src="../<?=$row['path'];?>" class="img-responsive" width='100'/></td>
        <td><?=$row['title'];?></td>
        <td><?=$row['slug'];?></td>
        <td><?php echo $row['status'];?></td>
		<td>
		<form method="post" action="">
		<input type="hidden" name="id" value="<?=$row['id'];?>">
     <a href="edit-blog.php?edit=<?=$row['id'];?>" class="btn btn-success"><span class="fa fa-eye"></span></a>
		</form>
		</td>
      </tr>
 <?php }?>
      

    </tbody>
  </table>
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
