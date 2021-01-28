<?php include "header.php" ?>
<img src="img/innr-banner.jpg" alt="" class="w-100">
<!-- CONTENT -->
<section class="pb-12 bg-2">
  <div class="container">
    <div class="row py-10">
      <div class="col-md-11 m-auto text-center">
        <div class="slider-title">
          Contact Us<span class="color-3">.</span>
        </div>
      </div>
    </div>
    <div class="row justify-content-between">
      <div class="col-12 col-md-4 col-xl-3">
        <aside class="mb-9 mb-md-0">

          <!-- Heading -->
          <h6 class="text-white mb-6 wow bounceInDown" data-wow-duration="1s">
            <i class="fe fe-home color-3 mr-4"></i> Address:
          </h6>
          <p class=" wow bounceInDown" data-wow-duration="1s">
            <a class="text-gray-300">
            <?=$contact_info['admin_addr1'].$contact_info['admin_addr2'];?>
            </a>
          </p>

          <!-- Divider -->
          <hr>

          <!-- Heading -->
          <h6 class="text-white mb-6 wow bounceInDown" data-wow-duration="1s">
            <i class="fe fe-phone color-3 mr-4"></i> Call to Us:
          </h6>
          <p class=" wow bounceInDown" data-wow-duration="1s">
            <a class="text-gray-300" href="tel:<?=$contact_info['admin_mobile'];?>"><?=$contact_info['admin_mobile'];?></a>
          </p>

          <!-- Divider -->
          <hr>

          <!-- Heading -->
          <h6 class="text-white mb-6 wow bounceInDown" data-wow-duration="1s">
            <i class="fe fe-mail color-3 mr-4"></i> Write to Us:
          </h6>
          <p class=" wow bounceInDown" data-wow-duration="1s">
            <a class="text-gray-300" href="mailto:<?=$contact_info['enquiryemail'];?>"><?=$contact_info['enquiryemail'];?></a>
          </p>

          <!-- Divider -->
          <hr>

          <!-- Heading -->
          <h6 class="text-white mb-6 wow bounceInDown" data-wow-duration="1s">
            <i class="fe fe-globe color-3 mr-4"></i> Social Media:
          </h6>
          <p class=" wow bounceInDown" data-wow-duration="1s">
          <?php if($contact_info['facebook']!=''){ ?>
            <a class="text-white pl-2 bl" href="<?=$contact_info['facebook'];?>" target="blank">
              <i class="fab fa-facebook"></i>
            </a>
          <?php } ?>
          <?php if($contact_info['instagram']!=''){ ?>
            <a class="text-white pl-2 bl" href="<?=$contact_info['instagram'];?>" target="blank">
              <i class="fab fa-instagram"></i>
            </a>
          <?php } ?>
          <?php if($contact_info['linkedin']!=''){ ?>
            <a class="text-white pl-2 bl" href="<?=$contact_info['linkedin'];?>" target="blank">
              <i class="fab fa-linkedin"></i>
            </a>
          <?php } ?>
          <?php if($contact_info['pinterest']!=''){ ?>
            <a class="text-white pl-2 bl" href="<?=$contact_info['pinterest'];?>" target="blank">
              <i class="fab fa-pinterest"></i>
            </a>
          <?php } ?>
          <?php if($contact_info['youtube']!=''){ ?>
            <a class="text-white pl-2 bl" href="<?=$contact_info['youtube'];?>" target="blank">
              <i class="fab fa-youtube"></i>
            </a>
          <?php } ?>
          <?php if($contact_info['twitter']!=''){ ?>
            <a class="text-white pl-2 bl" href="<?=$contact_info['twitter'];?>" target="blank">
              <i class="fab fa-twitter"></i>
            </a>
          <?php } ?>
          </p>

          <!-- <p class="mb-0">
            <stro>Careers:</stro class=" wow bounceInDown" data-wow-duration="1s"ng><br>
            <a class="text-gray-500" href="mailto:careers@example.com">careers@example.com</a>
          </p> -->

        </aside>
      </div>
      <div class="col-12 col-md-8">

        <!-- Form -->
        <form id="contact">

          <!-- Email -->
          <div class="form-group wow bounceInDown" data-wow-duration="1s">
            <label class="sr-only" for="contactName">
              Your Name *
            </label>
            <input class="form-control form-control-sm" id="contactName" type="text" placeholder="Your Name *" name="contactname" required>
          </div>

          <!-- Email -->
          <div class="form-group wow bounceInDown" data-wow-duration="1s">
            <label class="sr-only" for="contactEmail">
              Your Email *
            </label>
            <input class="form-control form-control-sm" id="contactEmail" type="email" placeholder="Your Email *" name="contactemail" required>
          </div>

          <!-- Email -->
          <div class="form-group wow bounceInDown" data-wow-duration="1s">
            <label class="sr-only" for="contactTitle">
              Title *
            </label>
            <input class="form-control form-control-sm" id="contactTitle" type="text" placeholder="Title *" name="contacttitle" required>
          </div>

          <!-- Email -->
          <div class="form-group mb-7 wow bounceInDown" data-wow-duration="1s">
            <label class="sr-only" for="contactMessage">
              Message *
            </label>
            <textarea class="form-control form-control-sm" id="contactMessage" rows="5" placeholder="Message *" name="contactmessage" required></textarea>
          </div>

          <!-- Button -->
          <button class="btn btn-dark wow bounceInDown" type="submit" data-wow-duration="1s">
            Send Message
          </button>

        </form>
<p id="contactresp" style="color:#fff"></p>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php" ?>

<script>
$(function (){

$('#contact').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'ajax.php',
        data:$('#contact').serialize(),
        success:function(data){
            $('#contactresp').html(data);

        }
    })
});
});
</script>