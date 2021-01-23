<?php include "header.php" ?>
<img src="img/banner/1.jpg" alt="" class="w-100">


<section class="py-12 bg-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div class="slider-title wow bounceInLeft text-center" data-wow-duration="1s">
                    ABOUT US<span class="color-3">.</span>
                </div>
            </div>
            <?php $about = mysqli_fetch_array(mysqli_query($conn, "SELECT description from about"));
            $aboutcontent = json_decode($about['description']);
            foreach ($aboutcontent as $key => $value) { ?>
                <div class="col-12">
                    <h2 class="mb-7 text-white wow bounceInLeft" data-wow-duration="1s">
                        <?= stripslashes($key); ?>
                    </h2>
                    <blockquote class="blockquote-2 my-7 wow bounceInLeft" data-wow-duration="1s">
                        <p class="mb-0 text-justify text-white">
                            <?= stripslashes($value); ?>
                        </p>
                    </blockquote>

                </div>
            <?php } ?>

        </div>
    </div>
</section>

<section class="py-12 bg-2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div class="slider-title wow bounceInLeft text-center" data-wow-duration="1s">
                    Our Core Creative Team<span class="color-3">.</span>
                </div>
            </div>
            <?php $team = mysqli_query($conn, "SELECT * FROM team WHERE status='1'");
            while ($teamrow = mysqli_fetch_array($team)) { ?>
                <div class="col-6 col-md-4 text-center pt-9 mb-auto">
                    <a class=" dan-card-22 card justify-content-center bg-cover " href=" # " style="height: 357px;border-radius: 50%; ">
                        <div class=" card-bg " style="border-radius: 50%;">
                            <div class=" card-bg-img bg-cover " style=" background-image: url(<?= 'img/team/' . $teamrow['image']; ?>); ">
                            </div>
                        </div>
                    </a>
                    <h3 class="text-white font-weight-bolder pt-5 mb-0 text-center">
                        <?= $teamrow['name']; ?>
                    </h3>
                    <p class="text-white font-size-xxxs mb-0">
                        <?= $teamrow['designation']; ?>
                    </p>
                    <table class="social m-auto">
                        <tr>
                            <?php if ($contact_info['facebook'] != '') { ?>
                                <td>
                                    <a href="<?= $contact_info['facebook']; ?>" target="blank">
                                        <i class="fe fe-facebook text-white"></i>
                                    </a>
                                </td>
                            <?php } ?>
                            <?php if ($contact_info['instagram'] != '') { ?>
                                <td>
                                    <a href="<?= $contact_info['instagram']; ?>" target="blank">
                                        <i class="fe fe-instagram text-white"></i>
                                    </a>
                                </td>
                            <?php } ?>
                            <?php if ($contact_info['linkedin'] != '') { ?>
                                <td>
                                    <a href="<?= $contact_info['linkedin']; ?>" target="blank">
                                        <i class="fe fe-linkedin text-white"></i>
                                    </a>
                                </td>
                            <?php } ?>
                            <?php if ($contact_info['pinterest'] != '') { ?>
                                <td>
                                    <a href="<?= $contact_info['pinterest']; ?>" target="blank">
                                        <i class="fe fe-pinterest text-white"></i>
                                    </a>
                                </td>
                            <?php } ?>
                            <?php if ($contact_info['youtube'] != '') { ?>
                                <td>
                                    <a href="<?= $contact_info['youtube']; ?>" target="blank">
                                        <i class="fe fe-youtube text-white"></i>
                                    </a>
                                </td>
                            <?php } ?>
                            <?php if ($contact_info['twitter'] != '') { ?>
                                <td>
                                    <a href="<?= $contact_info['twitter']; ?>" target="blank">
                                        <i class="fe fe-twitter text-white"></i>
                                    </a>
                                </td>
                            <?php } ?>
                        </tr>
                    </table>
                    <p class="text-white mb-0">
                        <?= $teamrow['description']; ?>
                    </p>
                </div>

            <?php } ?>
            

        </div>
    </div>
</section>


<section class=" people py-12 bg-1 ">
    <div class=" container">
        <div class=" row ">
            <div class=" col-md-12 text-center ">
                <div class="slider-title pb-5">
                    Testimonials<span class="color-3">.</span>
                </div>

                <!-- Slider -->
                <div class="flickity-buttons-bottom-left wow bounceInDown" data-wow-duration="1s" data-flickity='{"prevNextButtons": true,"autoPlay": 1500}'>
                <?php $testimonial = mysqli_query($conn, "SELECT * FROM testimonial WHERE status='1'");
            while ($testimonialrow = mysqli_fetch_array($testimonial)) { ?>
           

                    <div class="text-justify w-100">
                        <div class="card">
                            <div class="row p-8" style="background-color: #212121;">
                                <div class="col-md-5">
                                    <img src="img/testimonial/<?=$testimonialrow['image'];?>" alt="" class="w-100">
                                </div>
                                <div class="col-md-7 text-left m-auto">
                                    <img src="img/people-q.jpg" alt="" class="img-fluid">
                                    <p class="text-white font-weight-light">
                                    <?=$testimonialrow['description'];?>
                                    </p>
                                    <h3 class="mb-0 text-white font-weight-bold">
                                    <?=$testimonialrow['name'];?>
                                    </h3>
                                    <h6 class="text-white  font-weight-light">
                                        <small>
                                        <?=$testimonialrow['designation'];?>
                                        </small>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                </div>

            </div>
        </div>
    </div>
</section>
<section class="py-12 bg-2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div class="slider-title wow bounceInLeft text-center" data-wow-duration="1s">
                    Video Testimonials<span class="color-3">.</span>
                </div>
            </div>
            <?php 
            $video_testi=mysqli_query($conn,"SELECT * FROM video_testimonial WHERE status='1'");
            while($video_testirow=mysqli_fetch_array($video_testi)){
                $url =$video_testirow['link'];
                preg_match_all("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", 
                            $url, $matches);  
                            $durl="https://www.youtube.com/embed/".$matches[0][0];
                            ?>
                            <div class="col-6 col-md-4 text-center pt-9 mx-auto">
                <iframe width="100%" height="190" src="<?=$durl;?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <?php } ?>


            
           

        </div>
    </div>
</section>

<?php include "footer.php" ?>