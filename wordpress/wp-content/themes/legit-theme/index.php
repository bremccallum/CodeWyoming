<?php get_header(); ?>
         
        <!---CAROUSEL--->

        <section class="slider"> 
            <div class="container">
                <div class="slider-content row">
                    <div id="carousel" class="carousel slide col-sm-10" ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="carousel" data-slide-to="0" class="active"></li>
                            <li data-target="carousel" data-slide-to="1"></li>
                            <li data-target="carousel" data-slide-to="2"></li>
                        </ol>
                    
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/slider-5.jpg" alt="">
                                <div class="container">
                                        <div class="carousel-caption">
                                            <h2>Add a Sense 
                                            <br>
                                            <span>of Comfort to Your Living Space</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium blanditiis dicta porro quibusdam delectus adipisci!</p>
                                            <button href="#" class="btn" type="button">Sign Up Today</button>
                                        </div>
                                    </div>
                            </div> 
                    
                            <div class="item">
                                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/slider-6.jpg" alt="">
                                <div class="container">
                                        <div class="carousel-caption">
                                            <h2>Create Ideas 
                                            <br>
                                            <span>for Your Interior Design</span></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, iure facere harum. Veritatis obcaecati quae magnam natus alias vitae dolores.</p>
                                            <button href="#" class="btn" type="button">Sign Up Today</button>
                                        </div>
                                    </div>
                                </div> 
                    
                            <div class="item">
                                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/slider-7.jpg" alt="">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h2>One more for good measure.</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus in beatae magnam vero necessitatibus voluptatem distinctio rerum suscipit!</p>
                                        <button href="#" class="btn" type="button">Sign Up Today</button>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    
                        <a class="carousel-control left" href="#carousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="carousel-control right" href="#carousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                        
    <!---Carousel Sidebar Buttons--->
                    <div class="sidebar-buttons col-sm-2">
                        <a class="new-button" type="button" href="#">
                           <h2>What's New?</h2>
                           <img src="<?php bloginfo("stylesheet_directory"); ?>/img/arrow.png" alt="">
                        </a>
                        <a class="ideas-button" href="#">
                           <h2>Creative Ideas</h2>
                            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/arrow.png" alt="">
                        </a>
                    </div> 
                </div>
            </div>      
        </section>
    
    <!--MAIN-->
    
    <main>
        
        <!---Tips--->
        
        <section class="red-tips">
            <div class="container">
                <div class="tips row">
                    <article class="col-sm-4 clearfix">
                        <img class="pull-left" src="<?php bloginfo("stylesheet_directory"); ?>/img/tech.png" alt="">
                        <div class="tips-caption">
                            <h2>New Technologies</h2>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <a href="#">Read More</a>
                        </div>
                    </article>
                    <article class="col-sm-4 clearfix">
                        <img class="pull-left" src="<?php bloginfo("stylesheet_directory"); ?>/img/leaf.png" alt="">
                        <div class="tips-caption">
                            <h2>Eco Materials</h2>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <a href="#">Read More</a>
                        </div>
                    </article>
                    <article class="col-sm-4 clearfix">
                        <img class="pull-left" src="<?php bloginfo("stylesheet_directory"); ?>/img/book.png" alt="">
                        <div class="tips-caption">
                            <h2>Design Tips</h2>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <a href="#">Read More</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        
        <!---Latest--->
        
        <div class="content-bg">
            <section class="latest container">
                    <h2>Our Latest Projects</h2>
                <div class="row">
                    <?php
                       if(have_posts()) : 
                          while(have_posts()) : 
                             the_post(); 
                    ?>

                             <article class="col-sm-3">
                                <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
                                
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                                <button href="<?php the_permalink(); ?>" type="button">More</button>
                            </article>

                    <?php
                          endwhile;
                       else : 
                    ?>

                          Oops, there are no posts.

                    <?php
                       endif;
                    ?>
                    
                </div>
            </section>
        
            <!---Welcome--->

            <section class="welcome container">
                <h2>Welcome to Our Site!</h2>
                <h3>We offer the largest assortment of unique items for your home! Style, comfort, quality, selection!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At illum cum consectetur debitis voluptatem incidunt necessitatibus fugiat, officiis praesentium perferendis beatae veritatis, rem minima ut porro odio, perspiciatis neque quam esse eaque sequi enim dicta? Vero magnam error ipsa deserunt hic in eius? Placeat ratione sit deserunt repudiandae, est quibusdam.</p>
                <button href="#" type="button">Read More</button>
            </section>

           <!---About/Video--->
           
            <section class="about-video container">
                <div class="row">
                    <article class="about col-sm-6">
                        <h2>About Our Team</h2>
                        <div>
                            <img class="img-responsive" src="<?php bloginfo("stylesheet_directory"); ?>/img/about.png" alt="">
                            <h4>Lorem Ipsum Dolore
                                <span>Massa Laoreetum</span>
                            </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel tempore esse error repudiandae ipsum libero, deleniti debitis dolorem facere est.</p>
                                <button href="#" type="button">More</button>
                        </div>
                    </article>
                    <article class="video col-sm-6">
                        <h2>Latest Video</h2>
                        <a href="">
                            <img class="img-responsive" src="<?php bloginfo("stylesheet_directory"); ?>/img/video.jpg" alt="">
                            <img class="play" src="<?php bloginfo("stylesheet_directory"); ?>/img/play.png" alt="">
                        </a>
                    </article>
                </div>
            </section>

            <section class="clients container">
                <div class="row">
                    <h2 class="col-sm-2">Our Most Recent Clients</h2>
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/client-1.png" alt="" class="col-sm-2 img-responsive">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/client-2.png" alt="" class="col-sm-2 img-responsive">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/client-3.png" alt="" class="col-sm-2 img-responsive">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/client-4.png" alt="" class="col-sm-2 img-responsive">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/client-5.png" alt="" class="col-sm-2 img-responsive">
                </div>
            </section>
        </div>
    </main>
<?php get_footer() ?>