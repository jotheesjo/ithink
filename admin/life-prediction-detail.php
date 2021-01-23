<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
$info=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM life_prediction WHERE life_id='$_GET[id]'"));

}?>
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Life Prediction</h4>
                       
                    </div>
                </div>

                <div class="row">
                    <!-- Column -->
                    <div class=" col-lg-6 col-xlg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <h4 class="card-title m-t-10"><?=$info['life_name'];?></h4>
                                    <h6 class="card-subtitle"><?=$info['life_pnrno'];?></h6>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email </small>
                                <h6><a href="tel:<?=$info['app_mobile'];?>"><?=$info['life_email'];?></a></h6> 
                                <small class="text-muted p-t-30 db">DOB</small>
                                <h6><?=$info['life_dob'];?></h6>
                                <small class="text-muted p-t-30 db">DOB Time</small>
                                <h6><?=$info['life_dobtime'];?></h6>
                                <small class="text-muted p-t-30 db">Place</small>
                                <h6><?=$info['life_place'];?></h6>
                              
                                <small class="text-muted p-t-30 db">Message</small>
                                <h6><?=$info['life_msg'];?></h6>
                                <a href="reply-life-prediction.php?id=<?=$info['life_id'];?>" class="btn waves-effect waves-light btn-primary">Reply</a>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-6 col-xlg-6 col-md-6">
                        <div class="card">
                            <div class="card-body"> <small class="text-muted">Response Type </small>
                                <h6><a href="tel:<?=$info['app_mobile'];?>"><?=$info['life_response_type'];?></a></h6> 
                                <small class="text-muted p-t-30 db">Response</small>
                                <h6><?=$info['life_response'];?></h6>
                                <small class="text-muted p-t-30 db">Response Date</small>
                                <h6><?=$info['life_rsponse_date'];?></h6>
                                <small class="text-muted p-t-30 db">Status</small>
                                <h6><?php if($info['life_status']==1){
                                                    echo "Active";
                                                }else if($info['life_status']==2){
                                                    echo "Responsed";
                                                }else{
                                                    echo "Inactive";
                                                }?></h6>
                              
                            </div>
                        </div>
                    </div>
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