<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
 $info=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM employees WHERE emp_id='$_GET[id]'"));
    $department=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM corporate_department WHERE department_id='$info[emp_department]'"));
    $country=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries WHERE id='$info[emp_country]'"));
$states=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries_states WHERE country_id='$info[emp_country]' AND id='$info[emp_state]'"));
$cities=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM countries_cities WHERE state_id='$info[emp_state]' AND id='$info[emp_city]'"));  
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
                        <h4 class="text-themecolor">Corporate Profile</h4>
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
                                <center class="m-t-30"> <img src="<?=IMGPATH.$info['emp_image'];?>" width="150" />
                                    <h4 class="card-title m-t-10"><?=$info['emp_name'];?></h4>
                                    <h6 class="card-subtitle"><strong><?=$department['department_name'];?></strong></h6>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><a href="mailto:<?=$info['emp_email'];?>"><?=$info['emp_email'];?></a></h6> 
                                <small class="text-muted p-t-30 db">Mobile</small>
                                <h6><?=$info['emp_mobile'];?></h6>
                                <small class="text-muted p-t-30 db">Alternate Mobile</small>
                                <h6><?=$info['emp_altr_mobile'];?></h6>
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6><?=$info['emp_address'].",".$cities['name'].",".$states['name'].",".$country['name']." - ".$info['emp_pincode'];?></h6>
                                <a href="edit-corporate-inforamtion.php?id=<?=$info['emp_id'];?>" class="btn waves-effect waves-light btn-primary">Edit</a>

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
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Task Handler</th>
                                                <th>Notes</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $task_list=mysqli_query($conn,"SELECT * FROM tasks WHERE task_handler='$_GET[id]' ORDER BY task_id DESC");
                                                while($row=mysqli_fetch_array($task_list)){ ?>
                                                  <tr>
                                                      <td><?=$row['task_type'];?></td>
                                                <td><?php if($row['task_type']=="franchise"){
                                                    $task_type=mysqli_fetch_array(mysqli_query($conn,"SELECT franchise_name FROM franchise WHERE franchise_id='$row[task_from]'"));
                                                    echo $task_type['franchise_name'];
                                                }elseif($row['task_type']=="customer"){
                                                    $task_type=mysqli_fetch_array(mysqli_query($conn,"SELECT customer_name FROM customers WHERE customer_id='$row[task_from]'"));
                                                    echo $task_type['customer_name'];
                                                }elseif($row['task_type']=="employee"){
                                                    echo $row['emp_name'];
                                                }?></td>
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