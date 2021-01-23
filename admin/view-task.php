<?php include("header.php");
include("aside.php");?>
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
                        <h4 class="text-themecolor">Projects</h4>
                        <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">projects List</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Project Name</th>
                                                <th>Client</th>
                                                <th>Service Required</th>
                                                <th>Task Status</th>
                                                <th>Assign To</th>
                                                <th>Open Date</th>
                                                <th>Close Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $task_list=mysqli_query($conn,"SELECT * FROM projects");
                                                while($row=mysqli_fetch_array($task_list)){ ?>
                                                  <tr>
                                                <td><?=$row['proj_name'];?></td>
                                                <td><?=$row['client_name'].', '.$row['client_email'].', '.$row['client_mobile'].', '.$row['client_altr_mobile'];?></td>
                                                <td><?=$row['req_service'];?></td>
                                                      <td>
                                                          <?php
                                                           $totaltask=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM project_task WHERE proj_project_id='$row[task_id]'"));        
                                                           $opentask=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM project_task WHERE proj_task_status='1' AND proj_project_id='$row[task_id]'"));
                                                           $holdtash=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM project_task WHERE proj_task_status='2' AND proj_project_id='$row[task_id]'"));                           $closetask=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM project_task WHERE proj_task_status='0' AND proj_project_id='$row[task_id]'"));
                                                           $reopentask=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM project_task WHERE proj_task_status='3' AND proj_project_id='$row[task_id]'"));?>
                                                          Total: <?=$totaltask;?><br/>
                                                          Open: <?=$opentask;?>
                                                          &nbsp;&nbsp;Close: <?=$closetask;?><br/>
                                                          Hold: <?=$holdtash;?>
                                                          &nbsp;&nbsp;Reopen: <?=$reopentask;?>
                                                                                           
                                                      </td>
                                                <td>
                                                    <?php $emp_det= mysqli_query($conn,"SELECT emp_name FROM `employees` WHERE emp_id IN(".$row['proj_handler'].")");
                                                    while($rowemp=mysqli_fetch_array($emp_det)){ echo $rowemp['emp_name'].' '; } ?>
                                                      </td>
                                                <td><?=$row['proj_open_date'];?></td>
                                                      <td><?=$row['proj_close_date'];?></td>
                                                <td><?php if($row['task_status']==1){
                                                    echo "Active";
                                                }elseif($row['task_status']==0){
                                                    echo "Closed";
                                                }elseif($row['task_status']==2){
                                                        echo "Hold";
                                                    }?></td>
                                                      <td>
                                                          <a href="view-task-list.php?id=<?=$row['task_id'];?>" class="btn waves-effect waves-light btn-warning">View</a>
                                                          <a href="edit-task.php?id=<?=$row['task_id'];?>" class="btn waves-effect waves-light btn-primary">Edit</a></td>
                                            </tr>  
                                                <?php } ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                 </div>
                        </div>
                        
  <?php include("footer.php");?>
<script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });

            $('#config-table').DataTable({
                responsive: true
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>