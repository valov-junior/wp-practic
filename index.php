<?php get_header(); ?>

    
    <div class="container slider">
        <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li class="slider-indicators" data-target="#slider" data-slide-to="0" class="active"></li>
              <li class="slider-indicators" data-target="#slider" data-slide-to="1"></li>
              
            </ol>
            <div class="carousel-inner slider_carousel">
              <div class="carousel-item active" data-interval="1000000">
                <img src="<?php the_field('image_slider' , 'option'); ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-sm-block slider_nav">
                  <h3><?php the_field('title_slider' , 'option' ); ?></h3>
                  <p><?php the_field('content_slider' , 'option' ); ?></p>
                  <a href="" ><button>see new collection</button></a>
                </div>
              </div>
               <div class="carousel-item" data-interval="1000000">
                <img src="https://picsum.photos/1600/580?grayscale" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#slider" data-slide="prev">
              <span class="carousel-control-prev-icon pointer_prev" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#slider" data-slide="next">
              <span class="carousel-control-next-icon pointer_next" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
    </div>


    <div class="container assortment">
        <h2>featured items</h2> <hr>
    
    <ul class="nav nav_assortment">
            <li class="nav-item"><a class="nav-link active_nav" href="#">new</a></li>
            <li class="nav-item"><a class="nav-link" href="#">apparel</a></li>
            <li class="nav-item"><a class="nav-link" href="#">office & home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">bags</a></li>
            <li class="nav-item"><a class="nav-link" href="#">tech</a></li>
            <li class="nav-item"><a class="nav-link active_red" href="#">sales</a></li>
    </ul>
                <div class="row row_assortment">

                    <?php 
                    // ?????????????????? ???? ??????????????????
                            $my_posts = get_posts( array(
                                'numberposts' => 4,
                                'category' => 'FEATURED ITEMS',
                                'order' => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // ???????????????????? ???????????? ???????????????? ?????????????????? SQL ??????????????
                            ) );

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );

                            ?>
                             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                                <a href="<?php the_permalink() ?>" class="widht_row"><?php the_post_thumbnail() ?></a>
                                <img class="new" src="./img/new.png" alt="">
                                <p class="first"><?php the_title() ?></p>
                                <p class="second"><?php the_content() ?></p>
                                <p class="third">$90.00</p>
                                <a href=""><span>add to card</span></a>
                             </div>
                            <?php 
                            }

                            wp_reset_postdata(); // ??????????
                    
                    ?>
                    <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="#" class="widht_row"><img  src="./img/1.png" alt=""></a>
                        <img class="new" src="./img/new.png" alt="">
                        <p class="first">womens puff jacket</p>
                        <p class="second">Outerwear</p>
                        <p class="third">$90.00</p>
                        <a href=""><span>add to card</span></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                        <a href="#" class="widht_row"><img src="./img/2.png" alt=""></a>
                        <img class="new" src="./img/new.png" alt="">
                        <p class="first">womens puff jacket</p>
                        <p class="second">Outerwear</p>
                        <p class="third">$90.00</p>
                        <a href=""><span>add to card</span></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="#" class="widht_row"><img src="./img/3.png" alt=""></a>
                        <img class="new" src="./img/sales.png" alt="">
                        <p class="first">womens puff jacket</p>
                        <p class="second">Outerwear</p>
                        <p class="third"><s>$35.40</s> <span>$27.43</span></p>
                        <a href=""><span>add to card</span></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="#" class="widht_row"><img src="./img/4.png" alt=""></a>
                        <img class="new" src="./img/new.png" alt="">
                        <p class="first">womens puff jacket</p>
                        <p class="second">Outerwear</p>
                        <p class="third">$90.00</p>
                        <a href=""><span>add to card</span></a>
                    </div> -->
                </div>

            <div class="see_all">
                <a href=""><button>see all</button></a>
            </div>
    </div> 

    <div class="container categories"> 
        <h2> categories</h2> <hr>
        <div class="row">

        <?php 
        // ?????????????????? ???? ??????????????????
            $my_posts = get_posts( array(
                'numberposts' => 3,
                'category'    => 'CATEGORIES',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // ???????????????????? ???????????? ???????????????? ?????????????????? SQL ??????????????
            ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 categories-media-size">
                <?php the_post_thumbnail() ?>
                <p><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></p>
            </div>
                
                <?php
                
            }

            wp_reset_postdata(); // ??????????
        ?>
            <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img class="categories_img" src="./img/categories1.png" width="100%" alt="">
                <p>for man/unisex </p>
            </div>
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> -->
                <!-- <img class="categories_img"  src="./img/categories2.png" width="100%" alt="">
                <p>gifts</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img class="categories_img"  src="./img/categories3.png" width="100%" alt="">
                <p>office & home</p>
            </div> -->
            
        </div> 
        <div class="see_all_categories">
            <a href=""><button>see all</button></a>
        </div>
        
        <div class="authorization">
            <h3>get -20% for new <br> colection</h3>
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing!</span>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 left">
                    <form>
                        <!-- <div class="form-group form_group">
                          <input name="email1" type="email" class="form-control my-form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e-mail">
                        </div> -->
                        <?php echo do_shortcode('[contact-form-7 id="238" title="???????????????????? ?????????? 1"]') ?>
                        <div class="form-group form-check check_input checkbox">
                          <input name="checkbox1" type="checkbox" class="form-check-input checkbox_input" id="exampleCheck1">
                          <label  class="form-check-label check_label checkbox_label" for="exampleCheck1">I accept the <a href="#">Terms of mailing</a></label>
                        </div>

                       <?php echo do_shortcode('[contact-form-7 id="239" title="Button Automatization"]') ?>

                      </form>
                </div>
                <div class="col right">
                    <h3>#wild gradient younder</h3>
                </div>
            </div>
        </div>
    </div> 

    <div class="container comments">
        <h2>Reviews of our customers</h2> <hr margin-bottom: 30px;>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                        <div class="rating-result">
                            <span class="active"></span>	
                            <span class="active"></span>    
                            <span class="active"></span>  
                            <span></span>    
                            <span></span>
                        </div>
                        <ul class="comments_first">
                            
                            <li class="item_first">?????????? ????????????</li>
                            <li class="item_second ">for man & unisex</li>
                            <li class="item_third">Outerware</li>
                            <li class="item_four">????????????-???????????? ???? ???????????????????? ???????????? ?? ???????????? ?????????????? ?? ??????????????????.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-lg-5 comments_visible">
                        <ul class="comments_first">
                            <div class="rating-result">
                                <span class="active"></span>	
                                <span></span>    
                                <span ></span>  
                                <span></span>    
                                <span></span>
                            </div>
                            <li class="item_first">??????????</li>
                            <li class="item_second ">for man & unisex</li>
                            <li class="item_third">Outerware</li>
                            <li class="item_four">????????????-???????????? ???? ???????????????????? ???????????? ?? ???????????? ?????????????? ?? ??????????????????.</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="carousel-item" data-interval="10000">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                        <div class="rating-result">
                            <span class="active"></span>	
                            <span class="active"></span>    
                            <span></span>  
                            <span></span>    
                            <span></span>
                        </div>
                        <ul class="comments_first">
                            
                            <li class="item_first">????????</li>
                            <li class="item_second ">for man & unisex</li>
                            <li class="item_third">Outerware</li>
                            <li class="item_four">????????????-???????????? ???? ???????????????????? ???????????? ?? ???????????? ?????????????? ?? ??????????????????.</li>
                        </ul>
                       
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 comments_visible">
                        <div class="rating-result">
                            <span class="active"></span>	
                            <span class="active"></span>    
                            <span class="active"></span>  
                            <span class="active"></span>    
                            <span class="active"></span>
                        </div>
                        <ul class="comments_first">
                            <li class="item_first">?????????? ????????????</li>
                            <li class="item_second ">for man & unisex</li>
                            <li class="item_third">Outerware</li>
                            <li class="item_four">????????????-???????????? ???? ???????????????????? ???????????? ?? ???????????? ?????????????? ?? ??????????????????.</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon next_icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
    </div>
    </div>

    <div class="container about_us">
        
        <h2>about us</h2> <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 about_us_left">
                <ul>
                    <li><?php the_field('title-post', 'option');?> </li>
                    <li><?php the_field('content_post', 'option');?> </li>
                    <li class="about_us_th"><?php the_field('content_link' , 'option');?>  <a href="<?php the_field('link-post');?>"><?php the_field('name_link');?></a></li>
                    <li><button class="about_us_btn">visit on website</button></li>
                </ul>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 about_us_right">
            <img src="<?php the_field('image_img', 'option'); ?>" alt="">
            </div>
        </div>
    </div>


    <div class="container contact_us">
        <h2>contact us</h2> <hr>
        <h6 text-success><?= $_SESSION['good']?></h6>
        <div class="contactUsForm">
            <form action="contacts_check.php" method="post">
            <?php echo do_shortcode('[contact-form-7 id="240" title="?????? ????????????????"]') ?>
                <div class="contact-input" >
                  <input name="checkbox2" type="checkbox" class="contact_us_input" id="exampleCheck2">
                  <label class="checkLabel" for="exampleCheck2">I consent to the processing of personal data in accordance with the Privacy Policy on the site.</label>
                </div>
               <?php echo do_shortcode('[contact-form-7 id="241" title="?????? ????????????????"]') ?>
              </form>
        </div>
       
    </div>

   <?php get_footer(); ?>


   