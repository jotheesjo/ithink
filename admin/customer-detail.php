<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
 $info=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM customers WHERE customer_id='$_GET[id]'"));
    $country=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries WHERE id='$info[customer_country]'"));
$states=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries_states WHERE country_id='$info[customer_country]' AND id='$info[customer_state]'"));
$cities=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries_cities WHERE state_id='$info[customer_state]' AND id='$info[customer_city]'"));  
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
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <h4 class="card-title m-t-10"><?=$info['customer_name'];?></h4>
                                    <h6 class="card-subtitle"><?=$info['customer_email'];?></h6>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><a href="mailto:<?=$info['customer_email'];?>"><?=$info['customer_email'];?></a></h6> 
                                <small class="text-muted p-t-30 db">Mobile</small>
                                <h6><?=$info['customer_mobile'];?></h6>
                                <small class="text-muted p-t-30 db">Alternate Mobile</small>
                                <h6><?=$info['customer_altr_mobile'];?></h6>
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6><?=$info['customer_address'].",".$cities['name'].",".$states['name'].",".$country['name']." - ".$info['customer_pincode'];?></h6>
                                <a href="edit-customer.php?id=<?=$info['customer_id'];?>" class="btn waves-effect waves-light btn-primary">Edit</a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title m-t-10">Tasks</h4>
                            
                            
                            <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Task Handler</th>
                                                <th>Notes</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $task_list=mysqli_query($conn,"SELECT * FROM tasks WHERE task_type='customer' AND task_from='$_GET[id]' ORDER BY task_id DESC");
                                                while($row=mysqli_fetch_array($task_list)){ ?>
                                                  <tr>
                                                <td><?php $emp_type=mysqli_fetch_array(mysqli_query($conn,"SELECT emp_name FROM employees WHERE emp_id='$row[task_handler]'"));
                                                    echo $emp_type['emp_name'];?></td>
                                                <td><?=$row['task_notes'];?></td>
                                                <td><?=$row['task_open_date'];?></td>
                                                <td><?php if($row['task_status']==1){
                                                    echo "Active";
                                                }elseif($row['task_status']==0){
                                                    echo "Closed";
                                                }elseif($row['task_status']==2){
                                                        echo "Pending";
                                                    }?></td>
                                                      <td>
                                                          <a href="view-tasks.php?id=<?=$row['task_id'];?>" class="btn waves-effect waves-light btn-success">View</a>
                                                          <a href="edit-task.php?id=<?=$row['task_id'];?>" class="btn waves-effect waves-light btn-primary">Edit</a></td>
                                            </tr>  
                                                <?php } ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            
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