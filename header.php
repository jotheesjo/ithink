<?php include("admin/db.php");?>
<!doctype html>
<html lang="en">
<?php $contact_info=mysqli_fetch_array(mysqli_query($conn,"SELECT enquiryemail,admin_mobile,admin_addr1,admin_addr2,footer_msg,facebook,youtube,pinterest,instagram,linkedin,twitter FROM admin_profile WHERE admin_id='5'"));?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicons -->
  <link rel="icon" href="<?=MAINURL;?>img/favicon.png">
  <title>
    IThink Creations
  </title>

  <!-- Libs CSS -->
  <link rel="stylesheet" href="<?=MAINURL;?>libs/flickity/flickity.min.css">
  <link rel="stylesheet" href="<?=MAINURL;?>libs/swiper/swiper.min.css">
  <link rel="stylesheet" href="<?=MAINURL;?>libs/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?=MAINURL;?>libs/fortawesome/css/all.min.css">
  <link rel="stylesheet" href="<?=MAINURL;?>libs/simplebar/simplebar.min.css">
  <link rel="stylesheet" href="<?=MAINURL;?>libs/highlightjs/styles/vs2015.css">
  <link rel="stylesheet" href="<?=MAINURL;?>libs/wow/wow.min.css">
  <link rel="stylesheet" href="<?=MAINURL;?>fonts/feather/feather.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?=MAINURL;?>css/dan.min.css">
  <link rel="stylesheet" href="<?=MAINURL;?>css/style.css">

  <style>
    .dropdown-toggle[data-toggle="collapse"]::after {
      position: absolute;
    }
  </style>

</head>

<body>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <div class="modal fixed-right fade" id="modalSidebar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical text-center" role="document">
      <div class="modal-content bg-1">

        <!-- Close -->
        <button type="button" class="close text-black" data-dismiss="modal" aria-label="Close">
          <img src="<?=MAINURL;?>img/x.svg" alt="" class="w-75">
        </button>

        <!-- Body -->
        <div class="modal-body px-10 my-auto">

          <!-- Nav -->
          <ul class="nav nav-vertical nav-unstyled font-size-h2" id="sidebarNav">

            <li class="nav-item wow bounceInLeft" data-wow-duration="1s">
              <a class="nav-link text-white" href="<?=MAINURL;?>index.php">Home</a>
            </li>
            <li class="nav-item wow bounceInLeft" data-wow-duration="1.2s">
              <a class="nav-link text-white" href="<?=MAINURL;?>about.php">About Us</a>
            </li>
            <li class="nav-item wow bounceInLeft" data-wow-duration="1.4s">
              <a class="nav-link text-white" href="<?=MAINURL;?>clients.php">Clients</a>
            </li>

            <li class="nav-item wow bounceInLeft" data-wow-duration="1.6s">
              <a class="nav-link dropdown-toggle text-white" data-toggle="collapse" href="#sidebarBlog">
                Services
              </a>
              <div class="collapse" id="sidebarBlog" data-parent="#sidebarNav">
                <ul class="list-styled font-size-lg py-3 mb-0">
                <?php $senvicemenu=mysqli_query($conn,"SELECT * FROM services");
                while($senvicemenurow=mysqli_fetch_array($senvicemenu)){ ?>
                  <li class="list-styled-item wow bounceInLeft" data-wow-duration="1s">
                    <a class="list-styled-link text-white" href="<?=MAINURL.'services/'.$senvicemenurow['slug'];?>"><?=$senvicemenurow['name'];?></a>
                  </li>
                  
                <?php } ?>
                </ul>
              </div>
            </li>
            <li class="nav-item wow bounceInLeft" data-wow-duration="1.8s">
              <a class="nav-link text-white" href="<?=MAINURL;?>contact.php">Book Us Now</a>
            </li>
          </ul>

        </div>

      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand navbar-light w-100 zindex-1 position-md-absolute">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand animated bounceInLeft fast wow bounceInLeft" data-wow-duration="1s" href="<?=MAINURL;?>">
        <img src="<?=MAINURL;?>img/logo.png" alt="" class="w-100">
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler d-block ml-7 wow bounceInRight" data-wow-duration="1s" type="button" data-toggle="modal" data-target="#modalSidebar">
        <img src="<?=MAINURL;?>img/list.svg" alt="" class="w-75">
      </button>

    </div>
  </nav>

  <a href="#!" class="btn button button-3 getaquote lift px-4 py-2" data-toggle="modal" data-target="#exampleModalCenter">
            Get a Quote
          </a>