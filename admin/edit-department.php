<?php include("header.php");
include("aside.php");
if(isset($_GET['id'])){
    $info=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM corporate_department WHERE department_id='$_GET[id]'"));
}
?>
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
                        <h4 class="text-themecolor">ADD CORPORATE INFO</h4>
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
                                <form action="update.php" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Department Name</label>
                                                    <input type="text" class="form-control" placeholder="Department" name="department_name" required value="<?=$info['department_name'];?>">
                                                    <input type="hidden" class="form-control" placeholder="Department" name="department_id" required value="<?=$info['department_id'];?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">
                                                    <option value="1" <?php if($info['department_status']=="1"){ echo " selected"; } ?>>Active</option>
                                                    <option value="0" <?php if($info['department_status']=="0"){ echo " selected"; } ?>>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <!--/row-->
                                    
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="update_department"> <i class="fa fa-check"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
 <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Department List</h4>
                    </div>
                </div>
           <div class="card">
                            <div class="card-body">     

                 <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Department</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $franch_list=mysqli_query($conn,"SELECT * FROM corporate_department WHERE department_status='1'");
                                                while($row=mysqli_fetch_array($franch_list)){ ?>
                                                  <tr>
                                                <td><?=$row['department_name'];?></td>
                                                <td><?php if($row['department_status']==1){
                                                    echo "Active";
                                                }else{
                                                    echo "Inactive";
                                                }?></td>
                                                      <td><a href="edit-department.php?id=<?=$row['department_id'];?>" class="btn waves-effect waves-light btn-primary">Edit</a></td>
                                            </tr>  
                                                <?php } ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                </div>
               </div>
                
                
                
            </div>
</div>
 <?php include("footer.php");?>
<script>
    $(document).ready(function(){
    $("#stateid").change(function(){
       var state=$(this).val();
        $.ajax({
        type:'POST',
        data: { load_state: state},
        url:'ajax.php',
        success:function(data){
            $("#city").html(data);
        }
    });
    });
        });
</script>
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
 