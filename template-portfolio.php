<?php 
/*
Template Name: Portfolio Listing (4 Columns)
 */
?>

<?php get_header(); ?>


<!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
global $page_extra_metabox;
$meta = get_post_meta(get_the_ID(), $page_extra_metabox->get_the_id(), TRUE);
?>
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php if ($meta['page-icon'] != "") { ?>
                        <i class="<?php echo $meta['page-icon']; ?> page-title-icon"></i>
                        <?php } ?>
                        
                        <?php if ($meta['desc'] != "") { ?>
                        <h2><?php echo the_title(); ?> / </h2>
                        <p><?php echo $meta['desc']; ?></p>
                        <?php } else { ?>
                        <h2><?php echo the_title(); ?></h2>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
        

        <!-- Portfolio -->
        <div class="portfolio portfolio-page container">
            <div class="row">

             
                <div class="portfolio-navigator span12">
                    <h4 class="filter-portfolio">
                        <?php  
                            $terms = get_terms("skill-type");  
                            $count = count($terms);  
                            echo '<a class="all" id="active-imgs" href="#">All</a> / ';  
                                if ( $count > 0 )  
                                {     
                                    foreach ( $terms as $term ) {  
                                        $termname = strtolower($term->name);  
                                        $termname = str_replace(' ', '-', $termname);  
                                        echo '<a class="'.$termname.'" id="" href="#">'.$term->name.'</a> / ';  
                                    }  
                                } 
                        ?>
                    </h4>
                </div>
            </div>

            <?php   
                $loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => -1));  
                $count = 0;  
            ?>

            <div class="row">
                <ul class="portfolio-img">

                <?php if ( $loop ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <?php  
                $terms = get_the_terms( $post->ID, 'skill-type' );  
                                      
                if ( $terms && ! is_wp_error( $terms ) ) :   
                    $links = array();  
  
                    foreach ( $terms as $term )   
                    {  
                        $links[] = $term->name;  
                    }  
                    $links = str_replace(' ', '-', $links);   
                    $tax = join( " ", $links );       
                else :    
                    $tax = '';    
                endif;  

                global $custom_metabox_attachment;
                global $meta_attach;

                $work_meta = get_post_meta(get_the_ID(), $custom_metabox_attachment->get_the_id(), TRUE);
                ?>

                    <li data-id="p-<?php echo $post->ID; ?>" data-type="<?php echo strtolower($tax); ?>" class="span3">
                        <div class="work">
                            <a href="<?php echo the_permalink(); ?>">
                                <img src="<?php echo $work_meta['video_thumbnail']; ?>" alt="">
                            </a>
                            <h4><?php the_title(); ?></h4>
                            <p></p>
                        </div>
                    </li>

            <?php endwhile; else: ?>  
                       
                    <li class="error-not-found">Sorry, no portfolio entries found.</li>  
                          
            <?php endif; ?>
                    
                </ul>
            </div>
        </div>

<!-- REALLY stop The Loop. -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>