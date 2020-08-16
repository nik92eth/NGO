<?php get_header(); ?>
<section id="eventsHeader">
      <div class="events-main container-fluid">
         <p class="p-9 text-left"><span>Events</span><br>BY Aaina Foundation</p>
         <p class="p-10 text-left"><br>Talent wins games,But teamwork and<br> intelligence wins championship"</p>
      </div>
   </section>
   <!-- HEADER FINISH -->

   <div id="events-head">
      <h2 class="text-center">Events</h2>
      <hr class="hr1">
      <hr class="hr2">
   </div>

   <section id="#events-cards">
      <div class="container">
         <div class="row ">

         <?php 
					// Define our WP Query Parameters
					$the_query = new WP_Query( 'category_name=blog' );
				?>

				<?php 

					// Start our WP Query
					while ($the_query -> have_posts()) : $the_query -> the_post(); 
					// Display the Post Title with Hyperlink
					
		?>
            <div class="col-12 col-md-4 mb-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <div class="card-img-top">

                        <?php
                                                            
                         $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
                                                                                                       
                        echo '<a href="'.$featured_img_url.'" rel="lightbox">'; 
                        the_post_thumbnail('thumbnail');
                        echo '</a>';
                        ?>

                        </div>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text"><?php the_excerpt(__('(more…)')); ?> </p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-outline-primary"><a href="<?php the_permalink() ?>">Read more</a></button>
                        <div class="mt-3">
                            <span><i class="fa fa-clock-o mr-2"></i><?php the_time(); ?></span><br>
                            <span><i class="fa fa-map-marker mr-2"></i>ZXY Institute Of Technology, New Delhi</span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                </div>
                <?php 
              endwhile;
				wp_reset_postdata();
				?>
        
             </div>
        </div>
    </section>    

<?php get_footer(); ?>