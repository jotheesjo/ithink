<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
$emp_list=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM employee_list WHERE em_id='$_GET[id]'"));
$country=mysqli_query($conn,"SELECT * FROM countries");
$states=mysqli_query($conn,"SELECT * FROM countries_states WHERE country_id='101'");
$cities=mysqli_query($conn,"SELECT * FROM countries_cities WHERE state_id='$emp_list[em_state]'");  

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
                        <h4 class="text-themecolor">EDIT EMPLOYEE</h4>
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
                                        <h3 class="card-title">Person Info</h3>
                                        <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Employee Code</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="Employee code" name="employee_code" required value="<?=$emp_list['em_code'];?>">
                                                     <input type="hidden" class="form-control" name="employee_id" required value="<?=$emp_list['em_id'];?>">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="Name" name="name" required value="<?=$emp_list['em_name'];?>">
                                                    </div>
                                            </div>
                                            
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">E-mail</label>
                                                    <input type="text" id="email" class="form-control" placeholder="Email" name="email" required value="<?=$emp_list['em_email'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Profile Photo</label>
                                                    <input type="file" id="img" class="form-control" placeholder="" name="photo" accept="image/jpg,image/png,image/jpeg,image/gif" >
                                                    <input type="hidden" class="form-control" name="img" required value="<?=$emp_list['em_image'];?>">
                                                     <img src="<?=IMGPATH.$emp_list['em_image']?>" class="img-fluid" style="width:150px"/>
                                                    </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Mobile</label>
                                                    <input type="text" id="mobile" class="form-control onlynumber" maxlength="10" minlength="10" placeholder="Mobile" name="mobile" required patten="[0-9]+" value="<?=$emp_list['em_mobile'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Emergency Mobile</label>
                                                    <input type="text" id="emergency mobile" class="form-control onlynumber" maxlength="10" minlength="10" placeholder="Emergency Mobile" name="emergency_mobile" required value="<?=$emp_list['em_emergency_mobile'];?>">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="text" id="appdate" class="form-control date-format2" placeholder="Date of Birth" name="dob" required value="<?=$emp_list['em_dob'];?>">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Date of Join</label>
                                                    <input type="text" id="doj" class="form-control date-format2" placeholder="Date of Join" name="doj" required value="<?=$emp_list['em_doj'];?>">
                                                    </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Street</label>
                                                    <input type="text" class="form-control" name="address" name="street" required value="<?=$emp_list['em_address'];?>">
                                                </div>
                                            </div>
                                         
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <select class="form-control custom-select" name="city" id="city" required>
                                                        <option disabled selected value>--Select your City--</option>
                                                      <?php while($city_row=mysqli_fetch_array($cities)){
        if($city_row['id']==$emp_list['em_city']){
        $sel=" selected";
    }else{
        $sel=" ";
    }
    echo '<option '.$sel.' value='.$city_row['id'].'>'.$city_row['name'].'</option>'; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State</label>
                                                     
                                                    <select class="form-control custom-select" name="state" id="stateid" required>
                                                        <option disabled selected value>--Select your State--</option>
                                                      <?php while($state_row=mysqli_fetch_array($states)){
    if($state_row['id']=="35"){
        $sel=" selected";
    }else{
        $sel=" ";
    }
    echo '<option '.$sel.' value='.$state_row['id'].'>'.$state_row['name'].'</option>'; } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Post Code</label>
                                                    <input type="text" class="form-control onlynumber" maxlength="6" minlength="6" name="postcode" required value="<?=$emp_list['em_postcode'];?>">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="form-control custom-select" name="country" required>
                                                        <option value="101" selected>India</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="update_employees"> <i class="fa fa-check"></i> Save</button>
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
 