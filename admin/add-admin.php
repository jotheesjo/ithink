<?php include("header.php");
include("aside.php");
if($_SESSION[ADMINSESSION.'role']!="super_admin"){
    header("location:index.php");
    exit();
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
                        <h4 class="text-themecolor">ADD ADMIN</h4>
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
                                <form action="insert.php" method="post">
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
                                                    <input type="text" id="firstName" class="form-control" placeholder="Name" name="name" required>
                                                    </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" id="username" class="form-control" placeholder="Username" name="username" required>
                                                    </div>
                                            </div>
                                           
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">E-mail</label>
                                                    <input type="text" id="email" class="form-control" placeholder="Email" name="email" required>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Mobile</label>
                                                    <input type="text" id="mobile" class="form-control onlynumber" maxlength="10" minlength="10" placeholder="Mobile" name="mobile" required>
                                                    </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="insert_admin"> <i class="fa fa-check"></i> Save</button>
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
 