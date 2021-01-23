<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
 $id=$_GET['id'];   
 $projinfo=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM projects WHERE task_id='$id'"));
 $proj_task_info=mysqli_query($conn,"SELECT * FROM project_task WHERE proj_project_id='$id'");
}else{
     header("Location:index.php");
        exit();
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
                        <h4 class="text-themecolor"><?php echo $projinfo['proj_name'];?></h4>
                    </div>
                </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="timeline">
                                    <?php while($row=mysqli_fetch_array($proj_task_info)){
   //print_r($row);
    $create_by=mysqli_fetch_array(mysqli_query($conn,"SELECT emp_name,emp_image FROM employees WHERE emp_id='$row[proj_task_create_by]'"));
    $assign_to=mysqli_fetch_array(mysqli_query($conn,"SELECT emp_name,emp_image FROM employees WHERE emp_id='$row[proj_assign_to]'"));?>
                                     <li>
                                        <div class="timeline-badge success"><img class="img-responsive" alt="user" src="<?=IMGPATH.$create_by['emp_image'];?>"> </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h5 class="timeline-title"><?=$create_by['emp_name'];?> Assign to <?=$assign_to['emp_name'];?></h5>
                                                <p><small class="text-muted"><i class="fa fa-clock-o"></i> <?=$row['proj_task_create_date'];?></small> </p>
                                                <p><small class="text-muted"><strong>Status: </strong><?php if($row['proj_task_status']=='1'){
    echo "Open";
    }elseif($row['proj_task_status']=='0'){
        echo "Closed";
    }elseif($row['proj_task_status']=='2'){
        echo "Hold";
    }elseif($row['proj_task_status']=='3'){
        echo "Reopen";
    }?></small> </p>
                                            </div>
                                            <div class="timeline-body">
                                                <?=$row['proj_comments'];?>
                                            </div>
                                            <hr/>
                                            <div class="btn-group show">
                                                    <button type="button" class="btn btn-primary btn-sm togg" id="comm_<?=$row['project_task_id'];?>"> <i class="fa fa-reply"></i>   </button>
                                                
                                                </div>
                                            
                                            <form action="insert.php" method="POST" style="display:none" id="comm1_<?=$row['project_task_id'];?>">
                                            <input type="hidden" name="task_id" value="<?=$row['project_task_id'];?>">
                                                <textarea class="form-control" required  name="task_reply"></textarea>
                                                <select class="form-control" name="task_status" <?php if($_SESSION['admin_session_role']=='employee'){?> style="display:none"<?php } ?>>
                                                    <option value="1" <?php if($row['proj_task_status']=='1'){ echo " selected"; }?>>Open</option>
                                                    <option value="0"  <?php if($row['proj_task_status']=='0'){ echo " selected"; }?>>Closed</option>
                                                    <option value="2"  <?php if($row['proj_task_status']=='2'){ echo " selected"; }?>>Hold</option>
                                                    <option value="3" <?php if($row['proj_task_status']=='3'){ echo " selected"; }?>>Reopen</option>
                                                </select>
                                                 <button type="submit" name="task_rep" class="btn btn-primary btn-sm">Submit</button>
                                            </form>
                                        </div>
                                    </li>
                                    <?php if($row['proj_comment_reply']!=''){ 
                                    $response=(json_decode($row['proj_comment_reply'])); 
                                    foreach ( $response as $res ) { 
                                    $responser_by=mysqli_fetch_array(mysqli_query($conn,"SELECT emp_name,emp_image FROM employees WHERE emp_id='$res->reply_from'"));?>
    <li class="timeline-inverted">
                                        <div class="timeline-badge warning"><img class="img-responsive" alt="user" src="<?=IMGPATH.$responser_by['emp_image'];?>"> </div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title"><?=$responser_by['emp_name'];?></h4>
                                                <p><small class="text-muted"><i class="fa fa-clock-o"></i> <?=$res->replytime;?></small> </p>
                                            </div>
                                            <div class="timeline-body">
                                                <p><?=$res->reply;?></p>
                                            </div>
                                        </div>
                                    </li>
<?php }?>
                                    
        
    <?php } ?>
     
<?php }?>
                                    
                                </ul>
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
<script>$(".togg").click(function(){
       var str=this.id;
        var res = str.split("_");
  $("#comm1_"+res[1]).toggle();
});</script>