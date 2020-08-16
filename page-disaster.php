<?php get_header(); ?>

<section id="disasterHeader">
        <div class="disaster-main container-fluid">
            <p class="p-3 text-left">Disaster Releif</p>
            <p class="p-4 text-left">Talent wins games,<br>But teamwork and intelligence<br> wins championship</p>
        </div>
</section>

<div class="container">
    <div class="row">
				<?php 
					// Define our WP Query Parameters
					$the_query = new WP_Query( 'category_name=Disaster' );
				?>

				<?php 

					// Start our WP Query
					while ($the_query -> have_posts()) : $the_query -> the_post(); 
					// Display the Post Title with Hyperlink
					
				?>
  
            <div class="col-md-4 col-12">
                <div class="md-ui component-card card">
                    <figure class="md-ui card-figure">
                        <div class="figure-photo">
                        <?php
                                                            
                                $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
                                                                                                            
                                echo '<a href="'.$featured_img_url.'" rel="lightbox">'; 
                                the_post_thumbnail('thumbnail');
                                echo '</a>';
                        ?>
                        </div>

                        <h3 class="caption-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <div class="action-menu">
                                <a href="#"><input type="button" class="figure-action-button" value="Donate"></a>
                                <a href="#"><input type="button" class="figure-action-button explore"
                                        value="explore"></a>
                                <i>
                                    <div class="rotate">
                                        <a data-toggle="collapse" href="#collapseExamplezero" aria-expanded="false"
                                            aria-controls="collapseExample" class=""><i
                                                class="fa fa-chevron-down rotate"></i></a>
                                    </div>
				
							</div>
							
                            
                            <p class="collapse card-text" id="collapseExamplezero"><?php the_excerpt(__('(more…)')); ?></p>
                            <div class="dimmer"></div>
                            
                            </div>
                    </figure>
                </div>
            </div>
				<?php 
endwhile;
				wp_reset_postdata();
				?>
        
    </div>
</div>

<?php get_footer(); ?>