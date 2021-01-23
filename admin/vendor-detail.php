<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
 $info=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM vendors WHERE vendor_id='$_GET[id]'"));
    $country=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries WHERE id='$info[vendor_country]'"));
$states=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries_states WHERE country_id='$info[vendor_country]' AND id='$info[vendor_state]'"));
$cities=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries_cities WHERE state_id='$info[vendor_state]' AND id='$info[vendor_city]'"));  
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
                        <h4 class="text-themecolor">Franchise Profile</h4>
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
                    <div class="offset-lg-4 col-lg-4 col-xlg-4 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="<?=IMGPATH.$info['vendor_image'];?>" width="150" />
                                    <h4 class="card-title m-t-10"><?=$info['vendor_name'];?></h4>
                                    <h6 class="card-subtitle"><?=$info['vendor_email'];?></h6>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><a href="mailto:<?=$info['vendor_email'];?>"><?=$info['vendor_email'];?></a></h6> 
                                <small class="text-muted p-t-30 db">Mobile</small>
                                <h6><?=$info['vendor_mobile'];?></h6>
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6><?=$info['vendor_address'].",".$cities['name'].",".$states['name'].",".$country['name']." - ".$info['vendor_pincode'];?></h6>
                                <a href="edit-vendor.php?id=<?=$info['vendor_id'];?>" class="btn waves-effect waves-light btn-primary">Edit</a>

                                
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