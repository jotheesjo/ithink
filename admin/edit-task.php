<?php include("header.php");
 include("aside.php");
$id=$_GET['id'];
 $task=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM projects WHERE task_id='$id'"));?>
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
                        <h4 class="text-themecolor">Project Information</h4>
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
                                <form action="update.php" method="post">
                                    <div class="form-body">
                                        <h3 class="card-title">Task Info</h3>
                                        <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                    <input type="hidden" name="task_id" value="<?=$task['task_id'];?>">
                                                    <div class="form-group">
                                            <label class="control-label">Project Name</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="Project Name" name="proj_name" required value="<?=$task['proj_name'];?>">
                                        </div>
                                            </div>
                                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Client Name</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="Client Name" name="client_name" required value="<?=$task['client_name'];?>">
                                        </div>
                                        </div>
                                            <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">E-mail</label>
                                            <input type="text" id="email" class="form-control" placeholder="Email" name="email" required value="<?=$task['client_email'];?>">
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Mobile</label>
                                            <input type="text" id="mobile" class="form-control onlynumber" maxlength="10" minlength="10" placeholder="Mobile" name="mobile" required value="<?=$task['client_mobile'];?>">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Alternate Mobile</label>
                                            <input type="text" id="alternate mobile" class="form-control onlynumber" maxlength="10" minlength="10" placeholder="Alternate Mobile" name="altr_mobile" required value="<?=$task['client_altr_mobile'];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Open Date</label>
                                            <input type="text" id="" class="form-control date-format" placeholder="Date" name="open_date" required value="<?=$task['proj_open_date'];?>">
                                        </div>
                                    </div>
                                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Service Required</label>
                                            <?php $tkaar=explode(',',$task['req_service']);?>
                                            <select class="selectpicker" multiple data-style="form-control btn-secondary" name="req_service[]" required>
                                            <option value="Design" <?php if(in_array("Design", $tkaar)){ echo " selected"; }?>>Design</option> 
                                            <option value="Development" <?php if(in_array("Development", $tkaar)){ echo " selected"; }?>>Development</option> 
                                            <option value="SEO" <?php if(in_array("SEO", $tkaar)){ echo " selected"; }?>>SEO and Digital Marketing</option>
                                        </select>
                                        </div>
                                    </div>
                                            
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Assign to</label>
                                                  <?php $tkasign=explode(',',$task['proj_handler']);?>
                                                    <select class="selectpicker" name="task_handler[]" id="task_handler" multiple>
                                                        <?php $emp=mysqli_query($conn,"SELECT a.*,b.department_name FROM employees a, corporate_department b WHERE a.emp_status='1' AND a.emp_department=b.department_id");
                                                        while($emp_row=mysqli_fetch_array($emp)){ ?>
                                                            <option value="<?=$emp_row['emp_id'];?>" <?php if(in_array($emp_row['emp_id'], $tkasign)){ echo " selected"; }?>><?=$emp_row['emp_name'];?> (<?=$emp_row['department_name'];?>)</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                        </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Open Date</label>
                                            <input type="text" id="" class="form-control date-format" placeholder="Date" name="proj_close_date" required value="<?=$task['proj_close_date'];?>">
                                        </div>
                                    </div>
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label>Project Status</label>
                                                     <select class="form-control" name="task_status">
                                                     <option value="1" <?php if($task['task_status']=="1"){ echo " selected"; }?>>Active</option>
                                                     <option value="0" <?php if($task['task_status']=="0"){ echo " selected"; }?>>Closed</option>
                                                     <option value="2" <?php if($task['task_status']=="2"){ echo " selected"; }?>>Hold</option>
                                                     </select>
                                                 </div>
                                            </div>
                                        
                                
                                    </div>
                                    
                                    
                                    
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="update_task"> <i class="fa fa-check"></i> Save</button>
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
    $("#qry_from").change(function(){
       var qry_from=$(this).val();
        $.ajax({
        type:'POST',
        data: { qry_from: qry_from},
        url:'ajax.php',
        success:function(data){
            //$("#city").html(data);
//            console.log(data);
            if(data=="emp")
            {
                $("#task_from").hide();
                $("#emp_from").show();
            }else{
                $("#task_from").show().html(data);
                $("#emp_from").hide().val('');
            }
        }
    });
    });
        });
</script>