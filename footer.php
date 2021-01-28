<footer>
  <div class="py-12 border-bottom bg-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm">
<a href="<?=MAINURL;?>">
          <img src="<?=MAINURL;?>img/logo.png" alt="" class="w-75 mb-5 wow bounceInLeft" data-wow-delay="0s">
</a>
          <h6 class="text-gray-300 font-weight-light pt-3">
            <small>
              The Professional Experience of More than 12+ Years in Photography & Film Industry has gained huge knowledge by being as a Dancer, Choreographer, Actor, Director
            </small>
          </h6>


        </div>
        <div class="col-6 col-sm">

          <!-- Heading -->
          <h4 class="text-white wow bounceInLeft" data-wow-delay=".0s">
            Quick Links
          </h4>

          <!-- Links -->
          <ul class="list-unstyled mb-7 mb-sm-0">
            <li>
              <a class="color-2" href="<?=MAINURL;?>index.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Home
                  </small>
                </h6>
              </a>
            </li>
            <li>
            <li>
              <a class="color-2" href="<?=MAINURL;?>about.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    About Us
                  </small>
                </h6>
              </a>
            </li>
              <a class="color-2" href="<?=MAINURL;?>services.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Services
                  </small>
                </h6>
              </a>
            </li>
              <a class="color-2" href="<?=MAINURL;?>blog.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Blog
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="<?=MAINURL;?>contact.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Contact Us
                  </small>
                </h6>
              </a>
            </li>
          </ul>

        </div>
        <div class="col-6 col-sm">
          <!-- Heading -->
          <h4 class="text-white wow bounceInLeft" data-wow-delay=".0s">
            Our Services
          </h4>

          <!-- Links -->
          <ul class="list-unstyled mb-7 mb-sm-0">
          <?php $senvicemenu=mysqli_query($conn,"SELECT * FROM services");
                while($senvicemenurow=mysqli_fetch_array($senvicemenu)){ ?>
                  <li >
                    <a class="color-2" href="<?=MAINURL.'services/'.$senvicemenurow['slug'];?>">
                    
                    <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                  <?=$senvicemenurow['name'];?>
                  </small>
                </h6>
                </a>
                  </li>
                  
                <?php } ?>


          </ul>

        </div>

        <div class="col-6 col-sm">

          <!-- Heading -->
          <h4 class="text-white wow bounceInLeft" data-wow-delay=".0s">
            Follow Us
          </h4>
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
          

        </div>

      </div>
    </div>
  </div>
  <div class="row bg-1">
    <div class="col-md-4 m-auto text-center">
      <!-- Links -->
      <a class="text-white" href="#!">
        <h6 class="text-white  font-weight-light pt-3">
          <small>
            Copyright © 2020 Ithink Creations. All rights reserved.
          </small>
        </h6>
      </a>
    </div>
    <div class="col-md-4 m-auto text-center">
      <!-- Links -->
      <a class="text-white" target="Black" href="https://clouddreams.in/">
        <h6 class="text-white  font-weight-light pt-3">
          <small>
            Designed by Cloud Dreams.
          </small>
        </h6>
      </a>
    </div>
  </div>
</footer>


          <!--  Get a Quote  Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"> Get a Quote</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <form id="quote">
                          <!-- Email -->
                          <div class="form-group wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactName">
                              Your Name *
                            </label>
                            <input class="form-control form-control-sm" name="qname" id="contactName" type="text" placeholder="Your Name *" required="required">
                          </div>
                
                          <!-- Email -->
                          <div class="form-group wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactmobile">
                             Mobile No *
                            </label>
                            <input class="form-control form-control-sm" name="qmobile" id="contactEmail" type="email" placeholder="Your Mobile Number*" required="required">
                          </div>
                          
                          <!-- Email -->
                          <div class="form-group wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactEmail">
                              Your Email *
                            </label>
                            <input class="form-control form-control-sm" name="qemail" id="contactEmail" type="email" placeholder="Your Email *" required="required">
                          </div>
                
                          <!-- Email -->
                          <div class="form-group wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactTitle">
                             Date of Event *
                            </label>
                            <input class="form-control form-control-sm" name="qdate"  id="contactTitle" type="date" placeholder="Title *" required="required">
                          </div>
                
                           <!--Email -->
                          <div class="form-group mb-7 wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactMessage">
                              Type of Shoot *
                            </label>
                                <div class="select">
                                  <select name="qservice" class="form-control form-control-sm" id="contactMessage" required="required">
                                    <option selected="" disabled="">Select Type of Shoot</option>
                                    <option value="Weddings">Weddings </option>
                                    <option value="Birthday">Birthday </option>
                                    <option value="Commercial Photos">Commercial Photos </option>
                                    <option value="Business Videos">Business Videos</option>
                                    <option value="In House Projects">In House Projects </option>
                                    <option value="Articles">Articles</option>
                                  </select>
                                </div>
                          </div>

                          <!-- Button -->
                          <button type="submit" class="btn btn-dark wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            Send Message
                          </button>
                        </form>
                        <p id="quoteresp"></p>
                  </div>

                </div>
              </div>
            </div>


<!-- JAVASCRIPT -->
<!-- Libs JS -->
<script src="<?=MAINURL;?>libs/jquery/jquery.3.4.1.min.js"></script>
<script src="<?=MAINURL;?>libs/swiper/swiper.min.js"></script>
<script src="<?=MAINURL;?>libs/flickity/flickity.pkgd.min.js"></script>
<script src="<?=MAINURL;?>libs/flickity/flickity-fade.js"></script>
<script src="<?=MAINURL;?>libs/fancybox/jquery.fancybox.min.js"></script>
<script src="<?=MAINURL;?>libs/smooth-scroll/smooth-scroll.min.js"></script>
<script src="<?=MAINURL;?>libs/simplebar/simplebar.min.js"></script>
<script src="<?=MAINURL;?>libs/list.js/list.min.js"></script>
<script src="<?=MAINURL;?>libs/jarallax/jarallax.min.js"></script>
<script src="<?=MAINURL;?>libs/highlightjs/highlight.pack.min.js"></script>
<script src="<?=MAINURL;?>libs/wow/wow.min.js"></script>

<!-- Theme JS -->
<script src="<?=MAINURL;?>js/dan.min.js"></script>
<script src="<?=MAINURL;?>js/script.js"></script>


<script>
$(function (){

$('#quote').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'ajax.php',
        data:$('#quote').serialize(),
        success:function(data){
            $('#quoteresp').html(data);

        }
    })
});
});
</script>

</body>

</html>