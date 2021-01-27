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
                <h4 class="text-themecolor">Gallery</h4>
                <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Services List</h4>
                        <a class="btn btn-primary" href="add-service-gallery.php">Add services gallery</a>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Service List</th>
                                        <th>Image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $service_list=mysqli_query($conn, "SELECT * FROM `service_gallery`");
                                                while($row=mysqli_fetch_array($service_list)){ ?>
                                    <tr>
                                    <td>
                                    <?php $servicename=mysqli_fetch_array(mysqli_query($conn,"SELECT name FROM services WHERE service_id='$row[serv_id]'"));
                                    $servicelistname=mysqli_fetch_array(mysqli_query($conn,"SELECT name FROM service_list WHERE service_list_id='$row[serv_list_id]'"));
                                    ?>
                                    <?=$servicename['name'];?></td>
                                        <td><?=$servicelistname['name'];?></td>
                                        <td>
                                        <?php if($row['type']=='photo'){ ?>
<img src="../img/gallery/<?=$row['gallery'];?>" style="width:150px;" />
                                        <?php }else{ 
                                            $url =$row['gallery'];
                                            preg_match_all("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", 
                                                        $url, $matches);  
                                                        $durl="https://www.youtube.com/embed/".$matches[0][0]; ?>

<iframe width="100%" height="190" src="<?=$durl;?>" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                                        <?php } ?>
                                        </td>
                                        <td><a href="edit-service-list.php?id=<?=$row['service_list_id'];?>"
                                                class="btn waves-effect waves-light btn-primary">Edit</a></td>
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