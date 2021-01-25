<?php include "header.php" ?>
<?php $blogs=mysqli_query($conn,"SELECT * FROM blog WHERE status='active' AND slug='$_GET[slug]' ORDER BY id desc");?>
<img src="<?=MAINURL;?>img/innr-banner.jpg" alt="" class="w-100">
<section class="bg-2">
    <div class="container pt-10">
        <div class="row">
            <div class="col-md-11 m-auto text-center">
                <div class="slider-title">
                    Blogs<span class="color-3">.</span>
                </div>

            </div>
        </div>
        <div class="row">
            <?php 
            while($blogrow=mysqli_fetch_array($blogs)){ ?>
            <div class="text-justify w-100 py-5">
                <div class="card">
                    <div class="row p-8" style="background-color: #212121;">
                        <div class="col-md-12">
                            <img src="<?=MAINURL.$blogrow['path'];?>" alt="" class="w-100">
                        </div>
                        <div class="col-md-12 text-left m-auto">
                            <img src="<?=MAINURL;?>img/people-q.jpg" alt="" class="img-fluid">
                            <p class="text-white font-weight-light">
                                <?=$blogrow['blog'];?>
                            </p>
                            <a href="<?=MAINURL.'blog/'.$blogrow['slug'];?>">
                                <h3 class="mb-0 text-white font-weight-bold">
                                    Read More
                                </h3>
                            </a>

                            <h6 class="text-white  font-weight-light">
                                <small>
                                    <?php echo date('d/M/Y',strtotime($blogrow['time']));?>
                                </small>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>



        </div>
    </div>
</section>

<?php include "footer.php" ?>