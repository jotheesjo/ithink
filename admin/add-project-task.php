<?php include("header.php");
 include("aside.php");
$task_id=$_GET['id']?>
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
                        <h4 class="text-themecolor">CREATE PROJECT</h4>
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
                                <form action="insert.php" method="post">
                                    <div class="form-body">
                                        <h3 class="card-title">Project Task</h3>
                                        <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                        <hr>
                                        <div class="row p-t-20">
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Choose Project</label>
                                            <select class="form-control" id="pro_taks" name="project" required>
                                                <option disabled selected>--Choose Project--</option> 
                                                <?php $proj=mysqli_query($conn,"SELECT * FROM projects");
                                                        while($proj_row=mysqli_fetch_array($proj)){
                                                            echo '<option value="'.$proj_row['task_id'].'">'.$proj_row['proj_name'].'</option>';
                                                        } ?>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Assign to</label>
                                            <select class="form-control" name="assign_to" required id="meperson">
                                                <option disabled selected value>Person</option>
                                            </select>

                                        </div>
                                    </div>
                                            <?php //print_r($_SESSION);?>
                                            <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Task Status</label>
                                            <select class="form-control" id="taks_status" name="task_status" required>
                                                <option value="1">Active</option> 
                                                <option value="0">Completed</option> 
                                                <option value="2">Hold</option> 
                                                <option value="3">Reopen</option> 
                                            </select>
                                        </div>
                                    </div>
                                             <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Comments</label>
                                            <textarea class="form-control tinymce" id="mymce" name="proj_comments"></textarea>
                                        </div>
                                    </div>
                                        </div>
                                        <!--/row-->

                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="insert_proj_task"> <i class="fa fa-check"></i> Save</button>
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
    $("#pro_taks").change(function(){
       var proj_id=$(this).val();
        $.ajax({
        type:'POST',
        data: { proj_id: proj_id},
        url:'ajax.php',
        success:function(data){
            console.log(data);
            $("#meperson").html(data);
        }
    });
    });
        });
</script>