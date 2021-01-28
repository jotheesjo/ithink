<?php include "header.php" ?>

<img src="img/banner1.jpg" alt="" class="w-100">
<section class="bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-11 m-auto text-center">
        <div class="slider-title">
          Our Pro Services<span class="color-3">.</span>
        </div>
        <p class="text-white">
          We just don't click, we understand the clients requirement, plan the project, create concepts,
          execute the ideas which will reach the target audience.
        </p>
      </div>
      <?php $services=mysqli_query($conn,"SELECT * FROM services WHERE status='1'");
      while($servicesrow=mysqli_fetch_array($services)){ ?>
        <div class="col-md-4 m-auto pb-10">
        <img src="img/services/<?=$servicesrow['image'];?>" alt="" class="w-100">
            <h1 class="mb-0 text-white"> <?=$servicesrow['name'];?> </h1>
            <p class="text-gray-350 line-height-fixed"><?=$servicesrow['description'];?></p>
            <a href="<?=MAINURL.'services/'.$servicesrow['slug'];?>" class="button button-3 lift p-1 pl-5 pr-5">
               Read More
            </a> 
    </div>
      <?php } ?>
        
    </div>
    
   
      </div>
</section>

<section class="bg-2">
  <div class="container pt-10">
    <div class="row">
      <div class="col-md-11 m-auto text-center">
        <div class="slider-title">
          Our Portfolio<span class="color-3">.</span>
        </div>
        <p class="text-white">
          With the Professional Experience of More than 12+ Years in Photography & Film Industry has
          gained huge knowledge by being as a Dancer, Choreographer, Actor, Director
        </p>
      </div>
    </div>
    <div class="row">
    <?php $portfolio=mysqli_query($conn,"SELECT * FROM `service_gallery` WHERE type='photo' ORDER BY RAND() LIMIT 0,6 ");
    while($portfoliorow=mysqli_fetch_array($portfolio)){ ?>
<div class="col-6 col-md-4 pt-8">
        <a href="<?=MAINURL;?>img/gallery/<?=$portfoliorow['gallery'];?>" data-fancybox="gallery">
          <img src="<?=MAINURL;?>img/gallery/<?=$portfoliorow['gallery'];?>" alt="" class="w-100 lift">
        </a>
      </div>
    <?php } ?>
      
    </div>
    <div class="row">
      <div class="col-md-4 m-auto pt-5">
        <a href="<?=MAINURL;?>our-service.php" class="btn button button-3 lift">
          See More Works
        </a>
      </div>
    </div>
  </div>
  <img src="img/mountain-bg.jpg" alt="" class="w-100 mt-md-n15">
</section>

<section class="bg-1">
  <div class="container">
        <div class=" row py-5">
          <div class=" col-md-12 text-center ">
            <div class="slider-title">
              Social Media<span class="color-3">.</span>
            </div>
            <p class="text-white pb-5">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud.
            </p>
    
            <!--<div class="row">-->
            <!--  <div class="col-md-3">-->
            <!--    <img src="img/social-1.png" alt="" class="w-100">-->
            <!--  </div>-->
            <!--  <div class="col-md-3">-->
            <!--    <img src="img/social-2.png" alt="" class="w-100">-->
            <!--  </div>-->
            <!--  <div class="col-md-3">-->
            <!--    <img src="img/social-3.png" alt="" class="w-100">-->
            <!--  </div>-->
            <!--  <div class="col-md-3">-->
            <!--    <img src="img/social-4.png" alt="" class="w-100">-->
            <!--  </div>-->
            <!--</div>-->
            
            
                <div class="row">
                    <div class="col-12 text-uppercase">
                   
                    <div class="row" id="instagrampostlist"></div>

                    <div data-flickity='{"pageDots": false, "autoPlay": 2000, "wrapAround": true, "prevNextButtons": false}'>
                        <div class="col-md-3">
                            <img src="img/social-1.png" alt="" class="w-100">
                        </div>
                        <div class="col-md-3">
                            <img src="img/social-2.png" alt="" class="w-100">
                        </div>
                        <div class="col-md-3">
                            <img src="img/social-3.png" alt="" class="w-100">
                        </div>
                        <div class="col-md-3">
                            <img src="img/social-4.png" alt="" class="w-100">
                        </div>
                        <div class="col-md-3">
                            <img src="img/social-2.png" alt="" class="w-100">
                        </div>
                         <div class="col-md-3">
                            <img src="img/social-1.png" alt="" class="w-100">
                        </div>
                        <div class="col-md-3">
                            <img src="img/social-3.png" alt="" class="w-100">
                        </div>
                    </div>
                    </div>
                </div>
                
          </div>
          <div class="col-md-4 m-auto pt-10">
            <a href="#" class="btn button button-3 lift">
              View All
            </a>
          </div>
        </div>
     </div>
</section>


<section class=" people py-12 bg-1 ">
  <div class=" container py-10">
    <div class=" row ">
      <div class=" col-md-12 text-center ">
        <div class="slider-title">
          Peoples Trusted Us<span class="color-3">.</span>
        </div>
        <p class="text-white">
          We just don't click, we understand the clients requirement, plan the project, create
        </p>

        <!-- Slider -->
        <div class="flickity-buttons-bottom-left wow bounceInDown" data-wow-duration="1s"
                    data-flickity='{"prevNextButtons": true,"autoPlay": 1500}'>
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


<section class=" team pt-12 bg-2 ">
  <div class=" container py-10">
    <div class=" row ">
      <div class=" col-md-12 text-center ">
        <div class="slider-title">
          Let's discuss<span class="color-3">.</span>
        </div>
        <div class="slider-title">
          Have a project in mind<span class="color-3">?</span>
        </div>
        <p class="text-white">
          We make sure the client requirement is 100% fulfilled.
        </p>
        <div class="col-md-4 m-auto pt-5">
          <a href="#" class="btn button button-3 lift" data-toggle="modal" data-target="#exampleModalCenter">
            Get a Quote
          </a>
        </div>
        <h1 class="text-white font-weight-bolder my-10">
          Meat with Our Team
        </h1>
        <!-- Slider -->
        <div class="flickity-buttons-bottom-left wow bounceInDown" data-wow-duration="1s" data-flickity='{"prevNextButtons": true,"autoPlay": 1500}'>

          <?php $team = mysqli_query($conn, "SELECT * FROM team WHERE status='1'");
            while ($teamrow = mysqli_fetch_array($team)) { ?>
 <div class="col-md-4">
            <img src="<?= 'img/team/' . $teamrow['image']; ?>" alt="" class="w-50">
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
                                <i class="fab fa-pinterest text-white"></i>
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
          </div>


<?php } ?>



        </div>

      </div>
    </div>
  </div>
  <img src="img/mountain-bg-r.jpg" alt="" class="w-100 mt-md-n15">
</section>

<section class=" people bg-1 ">
  <div class=" container py-10">
    <div class=" row ">
      <div class=" col-md-12 text-center ">
        <div class="slider-title">
          Latest from blog<span class="color-3">.</span>
        </div>
        <p class="text-white pb-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
          ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud.
        </p>

        <div class="row">
          <?php $blog=mysqli_query($conn,"SELECT * FROM blog WHERE status='active' ORDER BY id DESC LIMIT 0,2");
          while($blogrow=mysqli_fetch_array($blog)) { ?>
<div class="col-md-5 m-auto">
            <div class="row">
              <div class="col-md-5">
              <a href="<?=MAINURL.'blog/'.$blogrow['slug'];?>"><img src="<?=MAINURL.$blogrow['path'];?>" alt="" class="w-100"></a>
              </div>
              <div class="col-md-7 text-left m-auto">
              <a href="<?=MAINURL.'blog/'.$blogrow['slug'];?>"><h4 class="mb-0 text-white font-weight-bold">
                <?=$blogrow['title'];?>
                </h4></a>
               
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
      <div class="col-md-4 m-auto pt-10">
        <a href="blog.php" class="btn button button-3 lift">
          View All
        </a>
      </div>
    </div>
  </div>
  <div class=" container py-10">
    <div class="row py-5">
      <div class="col-md-6">
        <div class="slider-title">
          Why Hire Us For Your Next Project<span class="color-3">.</span>
        </div>
        <p class="text-white">
          We just don't click, we understand the clients requirement, plan the project, create concepts, execute the ideas which will reach the target audience. We make sure the client requirement is 100% fulfilled.
        </p>
      </div>
      <div class="col-md-6 m-auto">
        <img src="img/why.png" alt="" class="w-100">
      </div>
    </div>
    <div class="row pb-10">
    <?php $clients=mysqli_query($conn,"SELECT * FROM clients WHERE status='1'");
                while($clientsrow=mysqli_fetch_array($clients)){ ?>
<div class="col-6 col-md-3">
    <img src="<?=MAINURL.'img/clients/'.$clientsrow['path'];?>" class="w-100">
</div>
                <?php } ?>

    </div>
    
  </div>
  <div class=" container py-10">
    <div class=" row ">
      <div class=" col-md-12 text-center ">
        <div class="row">

          <div class=" col-md-10 text-center card m-auto p-5 py-md-10 px-md-13" style="background-color: #212121;border-radius: 30px;">

            <h3 class="text-white wow bounceInDown" data-wow-duration="1s">
              Subscribe to Our Newsletter
            </h3>
            <form id="newsletter">
              <div class=" form-row align-items-start ">
                <div class=" col p-0">
                  <input type="email" name="newsemail" class="sub form-control form-control-lg  wow bounceInDown" data-wow-duration="1s" placeholder=" Enter Email * " required>
                </div>
                <div class=" col-auto p-0 ">
                  <button type=" submit " class=" sub bg-3 btn btn-gray-500 btn-lg color-ea text-uppercase wow bounceInDown" data-wow-duration="1s">Subscribe</button>
                </div>
              </div>
            </form>
            <h6 class="text-white  font-weight-light pt-3">
              <small>
               <span id="newsresp"></span>
              </small>
            </h6>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<?php include "footer.php" ?>
<script>
        $( document ).ready(function() {
            setTimeout(function(){ $('.eapps-link').hide(); }, 2000);
        });
        $.ajax({
            url: "https://www.instagram.com/ithinkcreations/?__a=1",
            type: "get",
            success:function(res){
              console.log(res);
                var obj = res.graphql.user.edge_owner_to_timeline_media.edges;
                obj.forEach(instagrampost);
            }
        });
        function instagrampost(item, index) {
            if(index<=11){
                var post = '<div class="col-2" style="margin-bottom: 15px;"><a href="https://www.instagram.com/p/'+item.node.shortcode+'/" target="_blank"><img class="img-fluid" src="'+item.node.thumbnail_src+'" /></a></div>';
                $('#instagrampostlist').append(post);
            }
        }
    </script>

<!-- newsletter -->
<script>
$(function (){

$('#newsletter').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'ajax.php',
        data:$('#newsletter').serialize(),
        success:function(data){
            $('#newsresp').html(data);

        }
    })
});
});
</script>