<?php include "header.php" ?>
<img src="img/innr-banner.jpg" alt="" class="w-100">
<section class="bg-2">
    <div class="container pt-10">
        <div class="row">
            <div class="col-md-11 m-auto text-center">
                <div class="slider-title">
                    Our Services<span class="color-3">.</span>
                </div>
                <p class="text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus sequi porro quas quam hic unde, pariatur voluptate iure at illum nam, sunt ad quisquam perferendis inventore possimus tenetur cupiditate eum?
                </p>
            </div>
        </div>
        <div class="row">
        <?php $services=mysqli_query($conn,"SELECT * FROM services WHERE status='1'");
      while($servicesrow=mysqli_fetch_array($services)){ ?>
        <div class="col-md-4 p-5 m-auto">
        <a href="<?=MAINURL.'services/'.$servicesrow['slug'];?>">
                    <div class="card border wow bounceInUp bg-1" data-wow-duration="1s">
                        <img class="card-img-top" src="img/services/<?=$servicesrow['image'];?>" alt="...">
                        <div class="card-body text-center text-dark">
                            <h3 class=" mb-3 text-white font-weight-bolder wow bounceInLeft" data-wow-duration="1s">
                            <?=$servicesrow['name'];?>
                            </h3>
                            <p class="text-white text-justify">
                            <?=$servicesrow['description'];?>
                            </p>
                        </div>
                    </div>
                </a>

      
    </div>
      <?php } ?>

            

        </div>
    </div>
</section>

<?php include "footer.php" ?>