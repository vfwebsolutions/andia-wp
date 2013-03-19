<?php get_header(); ?>

<?php print_r($data); ?>
        
        <?php if ($data['hp_slider'] != 0 ) { ?>
        <!-- Slider -->
        <div class="slider">
            <div class="container">
                <div class="row">
                    <div class="span10 offset1">
                        <div class="flexslider">
                            <ul class="slides">

                                <?php
                                    $slides = $data['pingu_slider']; //get the slides array 
                                    foreach ($slides as $slide) { 
                                ?>
                                    <li data-thumb="<?php echo $slide['url']; ?>">
                                        <?php if ($slide['link'] != NULL) { ?>
                                        <a href="<?php echo $slide['link']; ?>"><img src="<?php echo $slide['url']; ?>"></a>
                                        <?php } else { ?>
                                        <img src="<?php echo $slide['url']; ?>">
                                        <?php } ?>
                                        <p class="flex-caption"><?php echo $slide['description']; ?></p>
                                    </li>
                                <?php  
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Site Description -->
        <div class="presentation container">
            <h2><span class="violet"><?php bloginfo( 'name' ); ?></span></h2>
            <p><?php bloginfo( 'description' ); ?></p>
        </div>

        <!-- Latest Work -->
        <div class="portfolio container">
            <div class="portfolio-title">
                <h3>Our Latest Work</h3>
            </div>
            <div class="row">
                <div class="work span3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/work1.jpg" alt="">
                    <h4>Lorem Website</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    <div class="icon-awesome">
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/work1.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.html"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="work span3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/work2.jpg" alt="">
                    <h4>Ipsum Logo</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    <div class="icon-awesome">
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/work2.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.html"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="work span3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/work3.jpg" alt="">
                    <h4>Dolor Prints</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    <div class="icon-awesome">
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/work3.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.html"><i class="icon-link"></i></a>
                    </div>
                </div>
                <div class="work span3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/work4.jpg" alt="">
                    <h4>Sit Amet Website</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    <div class="icon-awesome">
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portfolio/work4.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.html"><i class="icon-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'testimonials',
            'orderby' => 'date',
        );
     
        $query = new WP_Query( $args  );

        if ( $query->have_posts() ) {
        ?>
        <script type="text/javascript" charset="utf-8">
          $(window).load(function() {
            $('.tab-content').flexslider({
                  animation: "slide",
                  slideshowSpeed: 7000,
                  pauseOnHover: true,
            });
          });
        </script>
        <!-- Testimonials -->
        <div class="testimonials container">
            <div class="testimonials-title">
                <h3>Testimonials</h3>
            </div>
            <div class="row">
                <div class="testimonial-list span12">
                    <div class="tabbable tabs-below">
                        <div class="tab-content flexslider">
                            <ul class="slides">
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <li>
                                    <div class="tab-pane active" id="A">
                                        <img src="assets/img/testimonials/1.jpg" title="" alt="">
                                        <p>"<?php the_content(); ?>"<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                                    </div>
                                </li>
                            <?php endwhile;  wp_reset_postdata(); ?>
                            </ul>
                        </div>
                       <div class="nav nav-tabs">
                       </div>
                   </div>
                </div>
            </div>
        </div>

        <?php } ?>

<?php get_footer(); ?>