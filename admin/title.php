<?php include("header.php");
include("aside.php");
$app_list = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM title_list WHERE id='1'"));
?>

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <h3 class="card-title">Title</h3>
                                <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">About</label>
                                            <input type="hidden" name="id" required value="1">
                                            <input type="text" value="<?=$app_list['about'];?>" id="firstName" class="form-control" placeholder="about" name="about" required> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">portfolio</label>
                                            <input type="text" value="<?=$app_list['portfolio'];?>" id="firstName" class="form-control" placeholder="portfolio" name="portfolio" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">package</label>
                                            <input type="text" value="<?=$app_list['package'];?>" id="firstName" class="form-control" placeholder="package" name="package" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">process</label>
                                            <input type="text" value="<?=$app_list['process'];?>" id="firstName" class="form-control" placeholder="process" name="process" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">service</label>
                                            <input type="text" value="<?=$app_list['service'];?>" id="firstName" class="form-control" placeholder="service" name="service" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">contact</label>
                                            <input type="text" value="<?=$app_list['contact'];?>" id="firstName" class="form-control" placeholder="contact" name="contact" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="update_title"> <i class="fa fa-check"></i> Save</button>
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
    $(document).ready(function() {
        $("#meetingwith").change(function() {
            var meeting_with = $(this).val();
            $.ajax({
                type: 'POST',
                data: {
                    meeting_with: meeting_with
                },
                url: 'ajax.php',
                success: function(data) {
                    $("#meperson").html(data);
                }
            });
        });
    });
</script>