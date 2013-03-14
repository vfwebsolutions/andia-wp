<?php get_header(); ?>

        <?php ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
        global $page_extra_metabox;
        global $custom_metabox_attachment;
        global $meta_attach;
        $page_extra_meta = get_post_meta(get_the_ID(), $page_extra_metabox->get_the_id(), TRUE);
        $portfolio_meta = get_post_meta(get_the_ID(), $custom_metabox_attachment->get_the_id(), TRUE);


        ?>
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php if ($page_extra_meta['page-icon'] != "") { ?>
                        <i class="<?php echo $page_extra_meta['page-icon']; ?> page-title-icon"></i>
                        <?php } ?>
                        
                        <?php if ($page_extra_meta['desc'] != "") { ?>
                        <h2><?php echo the_title(); ?> / </h2>
                        <p><?php echo $page_extra_meta['desc']; ?></p>
                        <?php } else { ?>
                        <h2><?php echo the_title(); ?></h2>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="single-page container">
            <div class="row">
                <div class="single-page-text span6 textleft">
                    <?php echo the_content(); ?>

                   <?php echo "<pre>";
        print_r($page_extra_meta);
        echo "</pre>";

        echo "<br />POrtfolio Meta<pre>";
        print_r($portfolio_meta);
        echo "</pre>";
        ?>
                </div>

                <div class="single-page-text span6 textleft">
                    
                <?php 
                    if ($portfolio_meta['featured_attachment_type'] == "images") {
                ?>
                    <div id="portfolio_flexslider" class="flexslider">
                        <ul class="slides">
                        <script>
                            /*
                                Slider
                            */
                            $(window).load(function() {
                                $('.flexslider').flexslider({
                                    animation: "slide"
                                });
                            });
                        </script>
                            <?php 
                            foreach ($portfolio_meta['work_images_group'] as $work_img) { ?>
                            <li data-thumb="<?php echo $work_img['work_img']; ?>">
                                <img src="<?php echo $work_img['work_img']; ?>">
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } else { ?>
                    <div id="portfolio_flexslider" class="flexslider">
                        <ul class="slides">
                            <li data-thumb="<?php echo $portfolio_meta['video_thumbnail']; ?>">
                                <img src="<?php echo $portfolio_meta['video_thumbnail']; ?>" alt="">
                            </li>
                        </ul>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-exclamation-sign page-title-icon"></i>
                        <h2>Oops!!</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="single-page container">
            <div class="row">
                <div class="single-page-text span12">
                    <p>Sorry No Posts Found...</p>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- Page Title -->
         

<?php get_footer(); ?>