<?php include "header.php" ?>
<img src="<?=MAINURL;?>img/innr-banner.jpg" alt="" class="w-100">

<?php $service=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM services WHERE slug='$_GET[slug]'")); ?>

<section class="bg-2">
    <div class="container pt-10">
<div class="row">
            <div class="col-12">
                <div class="slider-title wow bounceInLeft text-center" data-wow-duration="1s">
                    <?=$service['name'];?><span class="color-3">.</span>
                    <p><?=$service['description'];?></p>
                </div>
            </div>
        </div>
        </div>
</section>
<?php $service_list=mysqli_query($conn,"SELECT * FROM service_list WHERE service='$service[service_id]' AND type='photos'"); 
$service_listcount= mysqli_num_rows($service_list); ?>
<?php if($service_listcount>0){ ?>

    <section class="bg-2">
    <div class="container pt-10">
        <div class="row">
            <div class="col-12">
                <div class="slider-title wow bounceInLeft text-center" data-wow-duration="1s">
                    Photos<span class="color-3">.</span>
                </div>
            </div>
        </div>
        <div class="row">
        <?php while($service_listrow=mysqli_fetch_array($service_list)){ ?>
            <div class="col-12">
                <div class="slider-title wow bounceInLeft" data-wow-duration="1s">
                    <?=$service_listrow['name'];?><span class="color-3">.</span>
                </div>
            </div>

<?php $servicegallery=mysqli_query($conn,"SELECT * FROM service_gallery WHERE serv_list_id='$service_listrow[service_list_id]'");
$service_gallerycount= mysqli_num_rows($servicegallery); ?>

<?php if($service_gallerycount>0){ ?>
    <?php while($service_galleryrow=mysqli_fetch_array($servicegallery)){ ?>
    <div class="col-6 col-md-4 pt-8">
                <a href="<?=MAINURL;?>img/gallery/<?=$service_galleryrow['gallery'];?>" data-fancybox="gallery">
                    <img src="<?=MAINURL;?>img/gallery/<?=$service_galleryrow['gallery'];?>" alt="" class="w-100 lift">
                </a>
            </div>

    <?php } 
}else{ ?>
    <div class="col-12"><h3 style="color:#fff;">Innovation under process</h3></div>
        
    <?php } ?>

        <?php } ?>
            
        </div>


    </div>
</section>

<?php } ?>


<?php $service_list=mysqli_query($conn,"SELECT * FROM service_list WHERE service='$service[service_id]' AND type='videos'"); 
$service_listcount= mysqli_num_rows($service_list); ?>
<?php if($service_listcount>0){ ?>

    <section class="bg-2">
    <div class="container pt-10">
        <div class="row">
            <div class="col-12">
                <div class="slider-title wow bounceInLeft text-center" data-wow-duration="1s">
                    Videos<span class="color-3">.</span>
                </div>
            </div>
        </div>
        <div class="row">
        <?php while($service_listrow=mysqli_fetch_array($service_list)){ ?>
            <div class="col-12">
                <div class="slider-title wow bounceInLeft" data-wow-duration="1s">
                    <?=$service_listrow['name'];?><span class="color-3">.</span>
                </div>
            </div>

<?php $servicegallery=mysqli_query($conn,"SELECT * FROM service_gallery WHERE serv_list_id='$service_listrow[service_list_id]'");
$service_gallerycount= mysqli_num_rows($servicegallery); ?>

<?php if($service_gallerycount>0){ ?>
    <?php while($service_galleryrow=mysqli_fetch_array($servicegallery)){ 
         $url =$service_galleryrow['gallery'];
         preg_match_all("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", 
                     $url, $matches);  
                     $durl="https://www.youtube.com/embed/".$matches[0][0];
                     ?>
        <div class="col-6 col-md-4 text-center pt-9 mx-auto">
                <iframe width="100%" height="190" src="<?=$durl;?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

    <?php } 
}else{ ?>
    <div class="col-12"><h3 style="color:#fff;">Innovation under process</h3></div>
        
    <?php } ?>

        <?php } ?>
            
        </div>


    </div>
</section>

<?php } ?>
<?php include "footer.php" ?>