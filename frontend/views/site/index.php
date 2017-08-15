<?php
use frontend\components\ShopListing;
use frontend\components\NewShopOffers;

?>
<main role="main">
    <!-- start slider section -->
    <section id="slider">
        <div class="slider-content">
            <h1>Explore the world</h1>
            <div class="field-search" id="searchform">
                <input type="text" id="searchterm" placeholder="Search" />
                <button type="button" id="search"><img src="img/search.png" alt="search icon"></button>
            </div>

        </div>
    </section>
    <!-- slider ends here -->
    <section id="" class="shop">

<?php  echo  ShopListing::widget() ?>


    </section>

    <section class="valid-offer">

        <div class="heading">
            <h3>Title heading</h3>
            <div class="divider-header"></div>
        </div>

        <div class="valid-offer-inner">
            <div class="col-xs-12 colmdpadding">
                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                                <?php  echo  NewShopOffers::widget() ?>



                        <!-- /Slide1 -->
                        <div class="item offer-item">
                            <ul class="thumbnails">
                                <div class="offer popular"><span>Offer</span>
                                </div>
                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <a href="#"><img src="img/shop.jpg" alt="offer shop">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="offer shop">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="offer shop">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="offer shop">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="offer shop">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="offer shop">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /Slide2 -->
                        <div class="item offer-item">
                            <ul class="thumbnails">
                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-sm-2 thumb-gallery">
                                    <div class="fff">
                                        <div class="thumbnail">
                                            <div class="offer popular"><span>Offer</span>
                                            </div>
                                            <a href="#"><img src="img/shop.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h4>Praesent commodo</h4>
                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                            <a class="btn btn-mini" href="#">» Read More</a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- /Slide3 -->
                    </div>


                    <div class="navigation-arrows">
                        <ul class="control-box pager">
                            <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-chevron-left"></i></a>
                            </li>
                            <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /.control-box -->
                </div><!-- /#myCarousel -->
            </div><!-- /.col-xs-12 -->
        </div><!-- /.container -->
    </section>
    <!-- ends here -->
</main>
