<?php include("header.php");
include("aside.php"); ?>
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
                <h4 class="text-themecolor">Team</h4>
                <?php if (isset($_GET['msg'])) {
                    echo '<br/><p style="color:#ff0000">' . $_GET['msg'] . '</p>';
                } ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Home Section</h4>
                        <a class="btn btn-primary" href="add-team.php">Add Team</a>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Facebook</th>
                                        <th>Youtube</th>
                                        <th>Twitter</th>
                                        <th>Pinterest</th>
                                        <th>Instagram</th>
                                        <th>Linkedin</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $teamlist = mysqli_query($conn, "SELECT * FROM team");
                                    while ($row = mysqli_fetch_array($teamlist)) { ?>
                                        <tr>
                                            <td><?= $row['name']; ?></td>
                                            <td><?= $row['designation']; ?></td>
                                            <td><?= $row['description']; ?></td>
                                            <td><img src="../img/team/<?= $row['image']; ?>" style="width:100px;"/></td>
                                            <td><?= $row['facebook']; ?></td>
                                            <td><?= $row['youtube']; ?></td>
                                            <td><?= $row['twitter']; ?></td>
                                            <td><?= $row['pinterest']; ?></td>
                                            <td><?= $row['instagram']; ?></td>
                                            <td><?= $row['linkedin']; ?></td>
                                            <td><?php if ($row['status'] == 1) {
                                                    echo "Active";
                                                } else {
                                                    echo "Inactive";
                                                } ?></td>
                                            <td><a href="edit-team.php?id=<?= $row['team_id']; ?>" class="btn waves-effect waves-light btn-primary">Edit</a></td>
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

<?php include("footer.php"); ?>