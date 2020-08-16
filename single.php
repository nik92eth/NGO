<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
  
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
  
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            
  
          
            
        // End the loop.
        endwhile;
        ?>
      				<div class = "single-posts" id="posts-<?php the_ID(); ?>">
                    
                        <h2 class ="head-singleposts"><?php the_title() ; ?></h2>
						<hr class="hr4">

                        <p class ="para-singleposts"><?php the_content() ; ?></p> 
            
                    </div>
			
        </main><!-- .site-main -->
    </div><!-- .content-area -->
  
<?php get_footer(); ?>