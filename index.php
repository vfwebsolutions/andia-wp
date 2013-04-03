<?php get_header(); ?>

        <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <i class="icon-envelope-alt page-title-icon"></i>
                    <h2>Latest Posts / </h2>
                    <p>Check out our latest posts</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Work -->
    <div class="portfolio container">
        <div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
            <div class="work span3">
                <?php the_post_thumbnail(); ?>
                <h4><?php the_title(); ?></h4>
                <p><?php echo wp_trim_words( get_the_content(), 12, " ..."); ?></p>
                <div class="icon-awesome">
                    <a href="<?php the_permalink(); ?>"><i class="icon-link"></i></a>
                </div>
            </div>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
    
            <div class="work span3">
                
                <h4>Zero Results</h4>
                <p>Sorry no posts found ... </p>
            </div>

<?php endif; ?>
        </div>
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

<?php get_footer(); ?>