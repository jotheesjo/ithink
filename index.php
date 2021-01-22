<?php include "header.php" ?>

<img src="img/banner1.jpg" alt="" class="w-100">
        <a href="#!" class="btn button button-3 getaquote lift px-4 py-2" data-toggle="modal" data-target="#exampleModalCenter">
            Get a Quote
          </a>
          
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
                     <form>
                          <!-- Email -->
                          <div class="form-group wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactName">
                              Your Name *
                            </label>
                            <input class="form-control form-control-sm" id="contactName" type="text" placeholder="Your Name *" required="">
                          </div>
                
                          <!-- Email -->
                          <div class="form-group wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactmobile">
                             Mobile No *
                            </label>
                            <input class="form-control form-control-sm" id="contactEmail" type="email" placeholder="Your Mobile Number*" required="">
                          </div>
                          
                          <!-- Email -->
                          <div class="form-group wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactEmail">
                              Your Email *
                            </label>
                            <input class="form-control form-control-sm" id="contactEmail" type="email" placeholder="Your Email *" required="">
                          </div>
                
                          <!-- Email -->
                          <div class="form-group wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactTitle">
                             Date of Event *
                            </label>
                            <input class="form-control form-control-sm" id="contactTitle" type="date" placeholder="Title *" required="">
                          </div>
                
                           <!--Email -->
                          <div class="form-group mb-7 wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            <label class="" for="contactMessage">
                              Type of Shoot *
                            </label>
                                <div class="select">
                                  <select name="slct" class="form-control form-control-sm" id="contactMessage" required="">
                                    <option selected="" disabled="">Select Type of Shoot</option>
                                    <option value="2">Weddings </option>
                                    <option value="2">Birthday </option>
                                    <option value="3">Commercial Photos </option>
                                    <option value="4">Business Videos</option>
                                    <option value="5">In House Projects </option>
                                    <option value="6">Articles</option>
                                  </select>
                                </div>
                          </div>
                          
                          <!-- Email -->
                          <!--<div class="form-group mb-7 wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">-->
                          <!--  <label class="sr-only" for="contactMessage">-->
                          <!--    Message *-->
                          <!--  </label>-->
                          <!--  <textarea class="form-control form-control-sm" id="contactMessage" rows="5" placeholder="Message *" required=""></textarea>-->
                          <!--</div>-->
                
                          <!-- Button -->
                          <button class="btn btn-dark wow bounceInDown animated" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                            Send Message
                          </button>
                        </form>
                  </div>
                  <!--<div class="modal-footer">-->
                  <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                  <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
                  <!--</div>-->
                </div>
              </div>
            </div>




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
      
        <div class="col-md-4 m-auto pb-10">
            <img src="img/proservices/wedding.jpg" alt="" class="w-100">
                <h1 class="mb-0 text-white"> Weddings </h1>
                <p class="text-gray-350 line-height-fixed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntnisi ut aliquip ex ea commodo consequat.</p>
                <a href="wedding.php" class="button button-3 lift p-1 pl-5 pr-5">
                 	Read More
                </a> 
        </div>
        
        <div class="col-md-4 m-auto pb-10">
            <img src="img/proservices/birthday.jpg" alt="" class="w-100">
                <h1 class="mb-0 text-white"> Birthday </h1>
                <p class="text-gray-350 line-height-fixed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntnisi ut aliquip ex ea commodo consequat.</p>
                <a href="birthday-kids.php" class="button button-3 lift p-1 pl-5 pr-5">
                 	Read More
                </a> 
        </div>
        
        <div class="col-md-4 m-auto pb-10">
            <img src="img/proservices/commercial.jpg" alt="" class="w-100">
                <h1 class="mb-0 text-white"> Commercial Photos </h1>
                <p class="text-gray-350 line-height-fixed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntnisi ut aliquip ex ea commodo consequat.</p>
                <a href="commercial-photos.php" class="button button-3 lift p-1 pl-5 pr-5">
                 	Read More
                </a> 
        </div>
        
        <div class="col-md-4 m-auto pb-10">
            <img src="img/proservices/business_videos.jpg" alt="" class="w-100">
                <h1 class="mb-0 text-white"> Business Videos </h1>
                <p class="text-gray-350 line-height-fixed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntnisi ut aliquip ex ea commodo consequat.</p>
                <a href="business-videos.php" class="button button-3 lift p-1 pl-5 pr-5">
                 	Read More
                </a> 
        </div>
        
        <div class="col-md-4 m-auto pb-10">
            <img src="img/proservices/house.jpg" alt="" class="w-100">
                <h1 class="mb-0 text-white"> In House Projects </h1>
                <p class="text-gray-350 line-height-fixed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntnisi ut aliquip ex ea commodo consequat.</p>
                <a href="presentations.php" class="button button-3 lift p-1 pl-5 pr-5">
                 	Read More
                </a> 
        </div>
        
        <div class="col-md-4 m-auto pb-10">
            <img src="img/proservices/articles.jpg" alt="" class="w-100">
                <h1 class="mb-0 text-white"> Articles </h1>
                <p class="text-gray-350 line-height-fixed">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntnisi ut aliquip ex ea commodo consequat.</p>
                <a href="articles.php" class="button button-3 lift p-1 pl-5 pr-5">
                 	Read More
                </a> 
        </div>

      <!--<div class="col-md-4 m-auto">
        <a href="#" class="btn button button-1 lift">
          Weddings
        </a>
      </div>
      <div class="col-md-4 m-auto">
        <a href="#" class="btn button button-2 lift">
          Birthday
        </a>
      </div>
      <div class="col-md-4 m-auto">
        <a href="#" class="btn button button-1 lift">
          Commercial Photos
        </a>
      </div>
      <div class="col-md-4 m-auto">
        <a href="#" class="btn button button-2 lift">
          Business Videos
        </a>
      </div>
      <div class="col-md-4 m-auto">
        <a href="#" class="btn button button-1 lift">
          In House Projects
        </a>
      </div>
      <div class="col-md-4 m-auto">
        <a href="#" class="btn button button-2 lift">
          Articles
        </a>
      </div>-->
    </div>
    
    
    
    <!--<div class=" row py-5">-->
    <!--  <div class=" col-md-12 text-center ">-->
    <!--    <div class="slider-title">-->
    <!--      Social Media<span class="color-3">.</span>-->
    <!--    </div>-->
    <!--    <p class="text-white pb-5">-->
    <!--      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt-->
    <!--      ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud.-->
    <!--    </p>-->

    <!--    <div class="row">-->
    <!--      <div class="col-md-3">-->
    <!--        <img src="img/social-1.png" alt="" class="w-100">-->
    <!--      </div>-->
    <!--      <div class="col-md-3">-->
    <!--        <img src="img/social-2.png" alt="" class="w-100">-->
    <!--      </div>-->
    <!--      <div class="col-md-3">-->
    <!--        <img src="img/social-3.png" alt="" class="w-100">-->
    <!--      </div>-->
    <!--      <div class="col-md-3">-->
    <!--        <img src="img/social-4.png" alt="" class="w-100">-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--  <div class="col-md-4 m-auto pt-10">-->
    <!--    <a href="#" class="btn button button-3 lift">-->
    <!--      View All-->
    <!--    </a>-->
    <!--  </div>-->
    <!--</div>-->
    
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
      <div class="col-6 col-md-4 pt-8">
        <a href="img/portfolio-1.png" data-fancybox="gallery">
          <img src="img/portfolio-1.png" alt="" class="w-100 lift">
        </a>
      </div>
      <div class="col-6 col-md-4 pt-8">
        <a href="img/portfolio-2.png" data-fancybox="gallery">
          <img src="img/portfolio-2.png" alt="" class="w-100 lift">
        </a>
      </div>
      <div class="col-6 col-md-4 pt-8">
        <a href="img/portfolio-3.png" data-fancybox="gallery">
          <img src="img/portfolio-3.png" alt="" class="w-100 lift">
        </a>
      </div>
      <div class="col-6 col-md-4 pt-8">
        <a href="img/portfolio-4.png" data-fancybox="gallery">
          <img src="img/portfolio-4.png" alt="" class="w-100 lift">
        </a>
      </div>
      <div class="col-6 col-md-4 pt-8">
        <a href="img/portfolio-5.png" data-fancybox="gallery">
          <img src="img/portfolio-5.png" alt="" class="w-100 lift">
        </a>
      </div>
      <div class="col-6 col-md-4 pt-8">
        <a href="img/portfolio-6.png" data-fancybox="gallery">
          <img src="img/portfolio-6.png" alt="" class="w-100 lift">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 m-auto pt-5">
        <a href="#" class="btn button button-3 lift">
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
        <div class="flickity-buttons-bottom-left wow bounceInDown" data-wow-duration="1s" data-flickity='{"prevNextButtons": true,"autoPlay": 1500}'>


          <div class="text-justify w-100">
            <div class="card">
              <div class="row p-8" style="background-color: #212121;">
                <div class="col-md-5">
                  <img src="img/people-img.png" alt="" class="w-100">
                </div>
                <div class="col-md-7 text-left m-auto">
                  <img src="img/people-q.jpg" alt="" class="img-fluid">
                  <p class="text-white font-weight-light">
                    Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a ijutsnti diam. Amorem ipsum dolor sit amet, consectetur adipi scing elit. Cras vitae nibh nisl.
                  </p>
                  <h3 class="mb-0 text-white font-weight-bold">
                    John Smiths <img src="img/5star.png" class="float-right w-25">
                  </h3>
                  <h6 class="text-white  font-weight-light">
                    <small>
                      CEO - Company
                    </small>
                  </h6>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="text-justify w-100">
            <div class="card">
              <div class="row p-8" style="background-color: #212121;">
                <div class="col-md-5">
                  <img src="img/people-img.png" alt="" class="w-100">
                </div>
                <div class="col-md-7 text-left m-auto">
                  <img src="img/people-q.jpg" alt="" class="img-fluid">
                  <p class="text-white font-weight-light">
                    Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a ijutsnti diam. Amorem ipsum dolor sit amet, consectetur adipi scing elit. Cras vitae nibh nisl.
                  </p>
                  <h3 class="mb-0 text-white font-weight-bold">
                    John Smiths <img src="img/5star.png" class="float-right w-25">
                  </h3>
                  <h6 class="text-white  font-weight-light">
                    <small>
                      CEO - Company
                    </small>
                  </h6>
                </div>
              </div>
            </div>
          </div>

          <div class="text-justify w-100">
            <div class="card">
              <div class="row p-8" style="background-color: #212121;">
                <div class="col-md-5">
                  <img src="img/people-img.png" alt="" class="w-100">
                </div>
                <div class="col-md-7 text-left m-auto">
                  <img src="img/people-q.jpg" alt="" class="img-fluid">
                  <p class="text-white font-weight-light">
                    Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a ijutsnti diam. Amorem ipsum dolor sit amet, consectetur adipi scing elit. Cras vitae nibh nisl.
                  </p>
                  <h3 class="mb-0 text-white font-weight-bold">
                    John Smiths <img src="img/5star.png" class="float-right w-25">
                  </h3>
                  <h6 class="text-white  font-weight-light">
                    <small>
                      CEO - Company
                    </small>
                  </h6>
                </div>
              </div>
            </div>
          </div>


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
          <a href="#" class="btn button button-3 lift">
            Get a Quote
          </a>
        </div>
        <h1 class="text-white font-weight-bolder my-10">
          Meat with Our Team
        </h1>
        <!-- Slider -->
        <div class="flickity-buttons-bottom-left wow bounceInDown" data-wow-duration="1s" data-flickity='{"prevNextButtons": true,"autoPlay": 1500}'>

          <div class="col-md-4">
            <img src="img/team-1.png" alt="" class="w-50">
            <h3 class="text-white font-weight-bolder pt-5 mb-0 text-center">
              vishwak I
            </h3>
            <p class="text-white font-size-xxxs mb-0">
              Creative Director
            </p>
            <table class="social m-auto">
              <tr>
                <td>
                  <i class="fe fe-twitter text-white"></i>
                </td>
                <td>
                  <i class="fe fe-instagram text-white"></i>
                </td>
                <td>
                  <i class="fe fe-youtube text-white"></i>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-md-4">
            <img src="img/team-2.png" alt="" class="w-50">
            <h3 class="text-white font-weight-bolder pt-5 mb-0 text-center">
              vishwak I
            </h3>
            <p class="text-white font-size-xxxs mb-0">
              Creative Director
            </p>
            <table class="social m-auto">
              <tr>
                <td>
                  <i class="fe fe-twitter text-white"></i>
                </td>
                <td>
                  <i class="fe fe-instagram text-white"></i>
                </td>
                <td>
                  <i class="fe fe-youtube text-white"></i>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-md-4">
            <img src="img/team-3.png" alt="" class="w-50">
            <h3 class="text-white font-weight-bolder pt-5 mb-0 text-center">
              vishwak I
            </h3>
            <p class="text-white font-size-xxxs mb-0">
              Creative Director
            </p>
            <table class="social m-auto">
              <tr>
                <td>
                  <i class="fe fe-twitter text-white"></i>
                </td>
                <td>
                  <i class="fe fe-instagram text-white"></i>
                </td>
                <td>
                  <i class="fe fe-youtube text-white"></i>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-md-4">
            <img src="img/team-1.png" alt="" class="w-50">
            <h3 class="text-white font-weight-bolder pt-5 mb-0 text-center">
              vishwak I
            </h3>
            <p class="text-white font-size-xxxs mb-0">
              Creative Director
            </p>
            <table class="social m-auto">
              <tr>
                <td>
                  <i class="fe fe-twitter text-white"></i>
                </td>
                <td>
                  <i class="fe fe-instagram text-white"></i>
                </td>
                <td>
                  <i class="fe fe-youtube text-white"></i>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-md-4">
            <img src="img/team-2.png" alt="" class="w-50">
            <h3 class="text-white font-weight-bolder pt-5 mb-0 text-center">
              vishwak I
            </h3>
            <p class="text-white font-size-xxxs mb-0">
              Creative Director
            </p>
            <table class="social m-auto">
              <tr>
                <td>
                  <i class="fe fe-twitter text-white"></i>
                </td>
                <td>
                  <i class="fe fe-instagram text-white"></i>
                </td>
                <td>
                  <i class="fe fe-youtube text-white"></i>
                </td>
              </tr>
            </table>
          </div>

          <div class="col-md-4">
            <img src="img/team-3.png" alt="" class="w-50">
            <h3 class="text-white font-weight-bolder pt-5 mb-0 text-center">
              vishwak I
            </h3>
            <p class="text-white font-size-xxxs mb-0">
              Creative Director
            </p>
            <table class="social m-auto">
              <tr>
                <td>
                  <i class="fe fe-twitter text-white"></i>
                </td>
                <td>
                  <i class="fe fe-instagram text-white"></i>
                </td>
                <td>
                  <i class="fe fe-youtube text-white"></i>
                </td>
              </tr>
            </table>
          </div>


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
          <div class="col-md-5 m-auto">
            <div class="row">
              <div class="col-md-5">
                <img src="img/portfolio-6.png" alt="" class="w-100">
              </div>
              <div class="col-md-7 text-left m-auto">
                <h4 class="mb-0 text-white font-weight-bold">
                  Lorem ipsum dolor sit amet, consectetur elit,
                </h4>
                <h6 class="text-white  font-weight-light">
                  <small>
                    Duis aute irure dolor in repreh in voluptate velit eu fugiat...
                  </small>
                </h6>
              </div>
            </div>
          </div>

          <div class="col-md-5 m-auto">
            <div class="row">
              <div class="col-md-5">
                <img src="img/portfolio-2.png" alt="" class="w-100">
              </div>
              <div class="col-md-7 text-left m-auto">
                <h4 class="mb-0 text-white font-weight-bold">
                  Lorem ipsum dolor sit amet, consectetur elit,
                </h4>
                <h6 class="text-white  font-weight-light">
                  <small>
                    Duis aute irure dolor in repreh in voluptate velit eu fugiat...
                  </small>
                </h6>
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
      <div class="col-6 col-md-3">
        <img src="img/i-1.jpg" alt="" class="w-100">
      </div>
      <div class="col-6 col-md-3">
        <img src="img/i-2.jpg" alt="" class="w-100">
      </div>
      <div class="col-6 col-md-3">
        <img src="img/i-3.jpg" alt="" class="w-100">
      </div>
      <div class="col-6 col-md-3">
        <img src="img/i-4.jpg" alt="" class="w-100">
      </div>
    </div>
    
  </div>
  <div class=" container py-10">
    <div class=" row ">
      <div class=" col-md-12 text-center ">
        <div class="slider-title">
          Social Media<span class="color-3">.</span>
        </div>
        <p class="text-white pb-5">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
          ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud.
        </p>

        <div class="row">

          <div class=" col-md-10 text-center card m-auto p-5 py-md-10 px-md-13" style="background-color: #212121;border-radius: 30px;">

            <h3 class="text-white wow bounceInDown" data-wow-duration="1s">
              Subscribe to Our Newsletter
            </h3>
            <form>
              <div class=" form-row align-items-start ">
                <div class=" col p-0">
                  <input type=" email " class="sub form-control form-control-lg  wow bounceInDown" data-wow-duration="1s" placeholder=" Enter Email * ">
                </div>
                <div class=" col-auto p-0 ">
                  <button type=" submit " class=" sub bg-3 btn btn-gray-500 btn-lg color-ea text-uppercase wow bounceInDown" data-wow-duration="1s">Subscribe</button>
                </div>
              </div>
            </form>
            <h6 class="text-white  font-weight-light pt-3">
              <small>
                Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo,
                tortor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
              </small>
            </h6>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<?php include "footer.php" ?>