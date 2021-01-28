<?php include "header.php" ?>
<img src="img/banner/1.jpg" alt="" class="w-100">


<section class="py-12 bg-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div class="slider-title wow bounceInLeft text-center" data-wow-duration="1s">
                    Clients<span class="color-3">.</span>
                </div>
                <div class="row">
                <?php $clients=mysqli_query($conn,"SELECT * FROM clients WHERE status='1'");
                while($clientsrow=mysqli_fetch_array($clients)){ ?>
<div class="col-12 col-sm-3">
    <img src="<?=MAINURL.'img/clients/'.$clientsrow['path'];?>" class="w-100">
</div>
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php" ?>