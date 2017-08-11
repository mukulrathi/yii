<main role="main">

      <!-- start slider section -->
        <section id="" class="shop-entry">
            <div class="shop-entry-detail">
                <h1><?= $model->shop_name ?></h1>
                <div class="divider-header"></div>
            </div>
        </section>
        <!-- start slider section -->
        <section class="shop-images">
            <div class="inner-images">
                <div class="row">
                    <div class="col-sm-6">

<div class="slider-container">
  <div class="slider-content-image">

   <div class="slider-single">
      <img class="slider-single-image" src="img/cat-shop1.jpg" alt="shop image slide" />
       <h1 class="slider-single-title">shop image</h1>
   </div>

    <div class="slider-single">
      <img class="slider-single-image" src="img/cat-shop2.jpg" alt="shop image slide" />
       <h1 class="slider-single-title">shop image</h1>
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="img/cat-shop3.jpg" alt="shop image slide" />
        <h1 class="slider-single-title">shop image</h1>
    </div>

    <div class="slider-single">
      <img class="slider-single-image" src="img/cat-shop1.jpg" alt="shop image slide" />
      <h1 class="slider-single-title">shop image</h1>
    </div>


    <div class="slider-single">
      <img class="slider-single-image" src="img/cat-shop2.jpg" alt="shop image slide" />
      <h1 class="slider-single-title">shop image</h1>
   </div>

    <div class="slider-single">
      <img class="slider-single-image" src="img/cat-shop3.jpg" alt="shop image slide" />
       <h1 class="slider-single-title">shop image</h1>
    </div>
  </div>

  <a class="slider-left" href="javascript:void(0);"><i class="fa fa-arrow-left"></i></a>
  <a class="slider-right" href="javascript:void(0);"><i class="fa fa-arrow-right"></i></a>
</div>
</div>



<!-- ends here -->
       <div class="col-sm-6">
                        <div class="shop-indetail-info">
                            <h2>About Shop</h2>
                            <div class="divider-header-sub"></div>
                            <div class="about-shop">
                                <ul>
                                    <li><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                          tempor incididunt ut labore et dolore magna aliqua.</span>
                                    </li>
                                    <li><span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                          consequat.</span> </li>
                                    <li><span>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                          cillum dolore eu fugiat nulla pariatur. </span>
                                    </li>
                                    <li><span>Excepteur sint occaecat cupidatat non
                                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                    </li>

                                    <li><span>Excepteur sint occaecat cupidatat non
                                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                    </li>

                                    <li><span>Excepteur sint occaecat cupidatat non
                                         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                     </div>
               </div>
            </div>
        </section>

       <section class="latest-offer">
           <div class="inner-latest-offer">
               <div class="heading">
               <h2><span>Special Offers</span></h2>
               </div>

               <div class="col-md-12 offers-list">
              
               <div class="col-sm-3 border-offers">
                   <div id="diamond" class="list-offers-show">
                      <h3>offer on perticular item</h3>
                      <h4><span>10%</span> off</h4>
                   </div>
               </div>

               <div class="col-sm-3 border-offers">
                 <div id="diamond" class="list-offers-show">
                    <h3>offer on perticular item</h3>
                      <h4><span>20%</span> off</h4>
                 </div>
               </div>

               <div class="col-sm-3 border-offers">
                 <div id="diamond" class="list-offers-show">
                    <h3>offer on perticular item</h3>
                    <h4><span>30%</span> off</h4>
                 </div>
               </div>

               <div class="col-sm-3 border-offers">
                 <div id="diamond" class="list-offers-show">
                    <h3>offer on perticular item</h3>
                    <h4><span>15%</span> off</h4>
                 </div>
               </div>

               </div>
               </div>
       </section>

   <!-- map section -->

   <section class="mapsection">
            <h2>Get In Touch</h2>
            <div class="divider-header"></div>
            <div id="map"></div>
   </section>

<!-- ends map section -->

        <section class="contact-details">
            <div class="contacts">
                <div class="col-sm-4">
                    <div class="contact-info1">
                        <div class="home-round">
                            <i class="fa fa-home"></i>
                        </div>

                        <address>
                    <h4>Address:</h4>
                    <h5><?= $model->userShopAddress->address;  ?> <br/>
                        <?= $model->userShopAddress->city;  ?><br>
                        <?= $model->userShopAddress->postal_code;  ?><br>
                        <?= $model->userShopAddress->state;  ?>
                   </h5>
                 </address>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="contact-info">
                        <div class="home-round">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4> Contact No:</h4>
                            <h5><?// $model->user->userProfile->mobile ?></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="contact-info2">
                        <div class="home-round">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="mail-info">
                            <h4>Email Address:</h4>
                            <h5><?= $model->user->email;  ?></h5>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- slider ends here -->
        <!--  ends here -->
    </main>


    <!-- footer starts here -->