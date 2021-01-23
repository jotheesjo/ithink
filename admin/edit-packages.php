<?php include("header.php");
include("aside.php");
if (isset($_GET['id'])) {
    $app_list = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM packages WHERE packages_id='$_GET[id]'"));
}
?>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">Edit Packages</h3>
                                <?php if (isset($_GET['msg'])) {
                                    echo '<br/><p style="color:#ff0000">' . $_GET['msg'] . '</p>';
                                } ?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            <input type="hidden" name="packages_id" required value="<?= $app_list['packages_id']; ?>">
                                            <input type="text" value="<?= $app_list['title']; ?>" id="firstName" class="form-control" placeholder="Title" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Subtitle</label>
                                            <input type="text" class="form-control" name="subtitle" value="<?= $app_list['subtitle']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1" <?php if ($app_list['status'] == '1') {
                                                                        echo " selected";
                                                                    } ?>>Active</option>
                                                <option value="0" <?php if ($app_list['status'] == '0') {
                                                                        echo " selected";
                                                                    } ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="appand">
                                        <?php $features = json_decode($app_list['package_info'], true);
                                        foreach ($features as $key => $value) { ?>

                                            <div class="row clonesec">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Features Name</label>
                                                        <input type="text" value="<?= $key; ?>" class="form-control" placeholder="Feature Name" name="fea_name[]" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Features Status</label>
                                                        <select class="form-control" name="featuresstatus[]" required>
                                                            <option value="1" <?php if ($value == '1') {
                                                                                    echo " selected";
                                                                                } ?>>Active</option>
                                                            <option value="0" <?php if ($value == '0') {
                                                                                    echo " selected";
                                                                                } ?>>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Action</label><br />
                                                        <button class="btn btn-danger unclone" type="button">-</button>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Action</label><br />
                                            <button class="btn btn-primary" type="button" id="clone">+</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="update_packages"> <i class="fa fa-check"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
<script>
    $(document).ready(function() {
        $("#clone").click(function() {
            $(".appand").append('<div class="clonesec"><div class="row"><div class="col-md-6"><div class="form-group"><label class="control-label">Features Name</label><input type="text" id="firstName" class="form-control" placeholder="Feature Name" name="fea_name[]" required></div></div><div class="col-md-4"><div class="form-group"><label class="control-label">Features Status</label> <select class="form-control" name="featuresstatus[]" required><option value="1">Active</option><option value="0">Inactive</option></select></div></div><div class="col-md-2"><div class="form-group"><label class="control-label">Action</label><br /><button class="btn btn-danger unclone" type="button" id="">-</button></div></div></div></div>')
        });
        $('body').on('click', '.unclone', function() {
            $(this).closest('.clonesec').remove();
        });
    });
</script>