<?php include("header.php");?>
<?php include("aside.php");
if(!isset($_SESSION[ADMINSESSION.'role'])){
     header('Location:login.php');
    exit();
} ?>
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
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <!-- card -->
                    <div class="card o-income">
                        <div class="card-body">
                            <div class="m-b-30 no-block dashboard">
                                <div class="row">
                                    <div class="col-md-4 m-b-30">
                                        <a href="view-task.php" class="ss">
                                    <div class="bg-warning">
                                        <?php $active_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tasks WHERE task_status='1'")); ?>
                                      <h2><?=$active_cnt;?></h2>
                                  <span class="today-details-title">Active Task</span> 
                                    </div>
                                        </a>
                                  </div>
                                <div class="col-md-4 m-b-30">
                                    <a href="view-task.php" class="ss">
                                    <div class="bg-primary">
                                          <?php $cmp_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tasks WHERE task_status='0'")); ?>
                                      <h2><?=$cmp_cnt;?></h2>
                                  <span class="today-details-title">Completed Task</span> 
                                    </div>
                                    </a>
                                  </div>
                                <div class="col-md-4 m-b-30">
                                    <a href="view-appoinment.php" class="ss">
                                    <div class="bg-success">
                                          <?php $app_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM appoinment WHERE app_status='1'")); ?>
                                      <h2><?=$app_cnt;?></h2>
                                  <span class="today-details-title">Appoinments</span> 
                                    </div>
                                    </a>
                                  </div>
                                     <div class="col-md-4 m-b-30 ">
                                         <a href="view-franchise.php" class="ss">
                                  <div class="bg-primary">
                                      <?php $branch_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM franchise WHERE franchise_status='1'")); ?>
                                      <h2><?=$branch_cnt;?></h2>
                                  <span class="today-details-title">Branch</span> 
                                  </div>
                                         </a>
                                  </div>
                                    
                                <div class="col-md-4 m-b-30">
                                    <a href="view-customer.php" class="ss">
                                    <div class="bg-success">
                                        <?php $customer_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM customers WHERE customer_status='1'")); ?>
                                      <h2><?=$customer_cnt;?></h2>
                                  <span class="today-details-title">Customers</span> 
                                    </div>
                                    </a>
                                  </div>
                                <div class="col-md-4 m-b-30">
                                    <a href="view-corporate-information.php" class="ss">
                                    <div class="bg-danger">
                                        <?php $emp_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM employees WHERE emp_status='1'")); ?>
                                      <h2><?=$emp_cnt;?></h2>
                                  <span class="today-details-title">Corporate Team</span> 
                                    </div>
                                    </a>
                                  </div>
                                    <div class="col-md-4 m-b-30 ">
                                         <a href="view-employee-information.php" class="ss">
                                  <div class="bg-danger">
                                      <?php $em_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM employee_list WHERE em_status='1'")); ?>
                                      <h2><?=$em_cnt;?></h2>
                                  <span class="today-details-title">Employees</span> 
                                  </div>
                                         </a>
                                  </div>
                                     <div class="col-md-4 m-b-30">
                                    <a href="view-vendor.php" class="ss">
                                    <div class="bg-dark">
                                          <?php $vend_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM vendors WHERE vendor_status='1'")); ?>
                                      <h2><?=$vend_cnt;?></h2>
                                  <span class="today-details-title">Vendors</span> 
                                    </div>
                                    </a>
                                  </div>
                                <div class="col-md-4 m-b-30">
                                    <a href="view-admin.php" class="ss">
                                    <div class="bg-warning">
                                        <?php $admin_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM admin_profile WHERE admin_status='1' AND admin_role='admin'")); ?>
                                      <h2><?=$admin_cnt;?></h2>
                                  <span class="today-details-title">Admin</span> 
                                    </div>
                                    </a>
                                  </div>
                                    
                               
                                </div>
                             
                                

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