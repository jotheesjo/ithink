<?php include("header.php");
include("aside.php");
$app_list = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM about WHERE about_id='1'"));
?>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">About</h3>
                                <?php if (isset($_GET['msg'])) {
                                    echo '<br/><p style="color:#ff0000">' . $_GET['msg'] . '</p>';
                                } ?>
                                <hr>
                                <div class="appand">
                                    <?php $features = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $app_list['description']), true );
                                    foreach ($features as $key => $value) { ?>
                                        <div class="row clonesec">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Title</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="Title" name="title[]" required value="<?=stripslashes($key);?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Description</label>
                                                    <textarea class="form-control" name="description[]" required><?=stripslashes($value);?></textarea>
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
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Action</label><br />
                                            <button class="btn btn-primary" type="button" id="clone">+</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="update_about"> <i class="fa fa-check"></i> Save</button>
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
            $(".appand").append('<div class="clonesec"><div class="row"> <div class="col-md-6"><div class="form-group"><label class="control-label">Title</label><input type="text" id="firstName" class="form-control" placeholder="Title" name="title[]" required></div></div><div class="col-md-4"><div class="form-group"><label class="control-label">Description</label><textarea class="form-control" name="description[]" required></textarea></div></div><div class="col-md-2"><div class="form-group"><label class="control-label">Action</label><br /><button class="btn btn-danger unclone" type="button" id="">-</button></div></div></div></div>')
        });
        $('body').on('click', '.unclone', function() {
            $(this).closest('.clonesec').remove();
        });
    });
</script>