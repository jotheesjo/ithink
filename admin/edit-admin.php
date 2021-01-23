<?php include("header.php");
include("aside.php");
if($_SESSION[ADMINSESSION.'role']!="super_admin"){
    header("location:index.php");
    exit();
}
if(isset($_GET['id'])){
$admin_list=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM admin_profile WHERE admin_id='$_GET[id]'"));    
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
                        <h4 class="text-themecolor">EDIT ADMIN</h4>
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
                                <form action="update.php" method="post">
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="hidden" name="admin_id" value="<?=$admin_list['admin_id'];?>">
                                                    <input type="text" id="firstName" class="form-control" placeholder="Name" name="name" required value="<?=$admin_list['admin_name'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" id="username" class="form-control" placeholder="Username" name="username" required value="<?=$admin_list['admin_username'];?>">
                                                    </div>
                                            </div>
                                           
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">E-mail</label>
                                                    <input type="text" id="email" class="form-control" placeholder="Email" name="email" required value="<?=$admin_list['admin_email'];?>">
                                                    </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Mobile</label>
                                                    <input type="text" id="mobile" class="form-control onlynumber" maxlength="10" minlength="10" placeholder="Mobile" name="mobile" required  value="<?=$admin_list['admin_mobile'];?>">
                                                    </div>
                                            </div>
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">
                                                        <option value="1" <?php if($admin_list['admin_id']=="1"){ echo " selected";}?>>Active</option>
                                                        <option value="0" <?php if($admin_list['admin_id']=="0"){ echo " selected";}?>>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="update_admin"> <i class="fa fa-check"></i> Save</button>
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
 