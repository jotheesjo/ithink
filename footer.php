<footer>
  <div class="py-12 border-bottom bg-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm">

          <img src="<?=MAINURL;?>img/logo.png" alt="" class="w-75 mb-5 wow bounceInLeft" data-wow-delay="0s">
          <h6 class="text-gray-300 font-weight-light pt-3">
            <small>
              Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cumagnis
              dis parturient montes,
            </small>
          </h6>
          <h6 class="text-gray-300 font-weight-light pt-3">
            <small>
              Egestas Nibh Bibendum
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
              <a class="color-2" href="<?=MAINURL;?>portfolio.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Portfolio
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="<?=MAINURL;?>wedding.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Weddings
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="<?=MAINURL;?>birthday-kids.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Birthday
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="<?=MAINURL;?>commercial-photos.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Commercial Photos
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="<?=MAINURL;?>business-videos.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                     Business Videos
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="<?=MAINURL;?>presentations.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    In House Projects
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="<?=MAINURL;?>articles.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Articles
                  </small>
                </h6>
              </a>
            </li>
            <li>
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
            Navigation
          </h4>

          <!-- Links -->
          <ul class="list-unstyled mb-7 mb-sm-0">
            <li>
              <a class="color-2" href="<?=MAINURL;?>about.php">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    About Us
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="#!">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Privacy Policy
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="#!">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Sitemap
                  </small>
                </h6>
              </a>
            </li>
            <li>
              <a class="color-2" href="#!">
                <h6 class="text-gray-300 font-weight-light p-0 m-0">
                  <small>
                    Help Center
                  </small>
                </h6>
              </a>
            </li>

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


</body>

</html>