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
                                        <?php $active_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM projects WHERE task_status='1'")); ?>
                                      <h2><?=$active_cnt;?></h2>
                                  <span class="today-details-title">Active Projects</span> 
                                    </div>
                                        </a>
                                  </div>
                                <div class="col-md-4 m-b-30">
                                    <a href="view-task.php" class="ss">
                                    <div class="bg-primary">
                                          <?php $cmp_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM projects WHERE task_status='0'")); ?>
                                      <h2><?=$cmp_cnt;?></h2>
                                  <span class="today-details-title">Closed Projects</span> 
                                    </div>
                                    </a>
                                  </div>
                                    <div class="col-md-4 m-b-30">
                                    <a href="view-task.php" class="ss">
                                    <div class="bg-danger">
                                          <?php $cmp_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM projects WHERE task_status='2'")); ?>
                                      <h2><?=$cmp_cnt;?></h2>
                                  <span class="today-details-title">Hold Projects</span> 
                                    </div>
                                    </a>
                                  </div>
                                <div class="col-md-4 m-b-30">
                                    <a href="view-appoinment.php" class="ss">
                                    <div class="bg-success">
                                          <?php $admin_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM employees WHERE emp_role='super admin'")); ?>
                                      <h2><?=$admin_cnt;?></h2>
                                  <span class="today-details-title">Administrator</span> 
                                    </div>
                                    </a>
                                  </div>
                                     <div class="col-md-4 m-b-30 ">
                                         <a href="view-franchise.php" class="ss">
                                  <div class="bg-primary">
                                      <?php $manager_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM employees WHERE emp_role='manager'")); ?>
                                      <h2><?=$manager_cnt;?></h2>
                                  <span class="today-details-title">Managers</span> 
                                  </div>
                                         </a>
                                  </div>
                                    
                                <div class="col-md-4 m-b-30">
                                    <a href="view-customer.php" class="ss">
                                    <div class="bg-danger">
                                        <?php $emp_cnt=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM employees WHERE emp_role='employee'")); ?>
                                      <h2><?=$emp_cnt;?></h2>
                                  <span class="today-details-title">Employees</span> 
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