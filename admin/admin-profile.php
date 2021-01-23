<?php include("header.php");?>
<?php include("aside.php");
$info=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM admin_profile WHERE admin_id='5'"));
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
                        <h4 class="text-themecolor">Admin Profile</h4>
                    </div>
                </div>
    
               
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post" action="update.php">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="admin_username" placeholder="Enter Username" required value="<?=$info['admin_username'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="admin_name" placeholder="Enter name" required value="<?=$info['admin_name'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Mobile</label>
                                            <input type="text" class="form-control" id="exampleInputmobile" name="admin_mobile" placeholder="Enter Mobile" required value="<?=$info['admin_mobile'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="admin_email" placeholder="Enter email" required value="<?=$info['admin_email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Enquiry Email</label>
                                            <input type="text" class="form-control"  name="enquiryemail" placeholder="Enquiry Email" required value="<?=$info['enquiryemail'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address Line 1</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="admin_addr1" placeholder="Enter Line 1" required value="<?=$info['admin_addr1'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address Line 2</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="admin_addr2" placeholder="Enter Line 2" required value="<?=$info['admin_addr2'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Footer Info</label>
                                            <textarea class="form-control" placeholder="footer Info" required name="footer_msg"><?=$info['footer_msg'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Facebook</label>
                                            <input type="text" class="form-control"  name="facebook" placeholder="Facebook" required value="<?=$info['facebook'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Youtube</label>
                                            <input type="text" class="form-control"  name="youtube" placeholder="Youtube" required value="<?=$info['youtube'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pinterest</label>
                                            <input type="text" class="form-control"  name="pinterest" placeholder="pinterest" required value="<?=$info['pinterest'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Instagram</label>
                                            <input type="text" class="form-control"  name="instagram" placeholder="Instagram" required value="<?=$info['instagram'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Linkedin</label>
                                            <input type="text" class="form-control"  name="linkedin" placeholder="Linkedin" required value="<?=$info['linkedin'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Twitter</label>
                                            <input type="text" class="form-control"  name="twitter" placeholder="twitter" required value="<?=$info['twitter'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Change Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                                        </div>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="admin_profile_update">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
<?php include("footer.php");?>