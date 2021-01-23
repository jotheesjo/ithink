<?php include("header.php");
include("aside.php");
$app_list = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM about WHERE about_id='1'"));
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
                                <?php if(isset($_GET['msg'])){
                        echo '<br/><p style="color:#ff0000">'.$_GET['msg'].'</p>';
                        }?>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Title 1</label>
                                            <input type="hidden" name="about_id" required value="<?=$app_list['about_id'];?>">
                                            <input type="hidden" name="img" required value="<?=$app_list['image'];?>">
                                            <input type="text" value="<?=$app_list['title1'];?>" id="firstName" class="form-control" placeholder="Title" name="title1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Subtitle 1</label>
                                            <input type="text" value="<?=$app_list['subtitle1'];?>" id="firstName" class="form-control" placeholder="Title" name="subtitle1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Paragraph</label>
                                            <textarea class="form-control" name="paragraph"> <?=$app_list['paragraph'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Image(303*380)</label>
                                            <input type="file" class="form-control" name="photo" >
                                            <img src="../images/about/<?=$app_list['image'];?>" style="width:50px"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Title 2</label>
                                            <input type="text" value="<?=$app_list['title2'];?>" id="firstName" class="form-control" placeholder="Title" name="title2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Subtitle 2</label>
                                            <input type="text" value="<?=$app_list['subtitle2'];?>" id="firstName" class="form-control" placeholder="Title" name="subtitle2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Section 1</label>
                                            <textarea class="form-control" name="sec1"> <?=$app_list['sec1'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Section 2</label>
                                            <textarea class="form-control" name="sec2"> <?=$app_list['sec2'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Section 3</label>
                                            <textarea class="form-control" name="sec3"> <?=$app_list['sec3'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Section 4</label>
                                            <textarea class="form-control" name="sec4"> <?=$app_list['sec4'];?></textarea>
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