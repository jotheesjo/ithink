<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
 $info=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM employee_list WHERE em_id='$_GET[id]'"));
    $country=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries WHERE id='$info[em_country]'"));
$states=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries_states WHERE country_id='$info[em_country]' AND id='$info[em_state]'"));
$cities=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries_cities WHERE state_id='$info[em_state]' AND id='$info[em_city]'"));  
}?>
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
                        <h4 class="text-themecolor">Employee Profile</h4>
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
                    <!-- Column -->
                    <div class="offset-md-4 col-lg-4 col-xlg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?=IMGPATH.$info['em_image'];?>" width="150" />
                                    <h4 class="card-title m-t-10"><?=$info['em_name'];?></h4>
                                    <h6 class="card-subtitle"><?=$info['em_code'];?></h6>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><a href="mailto:<?=$info['em_email'];?>"><?=$info['em_email'];?></a></h6> 
                                <small class="text-muted p-t-30 db">Mobile</small>
                                <h6><?=$info['em_mobile'];?></h6>
                                <small class="text-muted p-t-30 db">Emergency Mobile</small>
                                <h6><?=$info['em_emergency_mobile'];?></h6>
                                <small class="text-muted p-t-30 db">Date of Birth</small>
                                <h6><?=$info['em_dob'];?></h6>
                                <small class="text-muted p-t-30 db">Date of Join</small>
                                <h6><?=$info['em_doj'];?></h6>
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6><?=$info['em_address'].",".$cities['name'].",".$states['name'].",".$country['name']." - ".$info['em_postcode'];?></h6>
                                <a href="edit-employee-information.php?id=<?=$info['em_id'];?>" class="btn waves-effect waves-light btn-primary">Edit</a>

                            </div>
                        </div>
                    </div>
            
                    <!-- Column -->
                </div>
                <!-- Row -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
<?php include("footer.php");?>