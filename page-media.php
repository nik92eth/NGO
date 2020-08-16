<?php get_header(); ?>

<section id="indexMedia">
      <div class="media-main container-fluid">
         <p class="p-5 text-left">Media And Blogs</p>
         <p class="p-6 text-left">Talent wins games<br>But teamwork and intelligence<br> wins championship<br>So be a
            team
            and</p>
      </div>
   </section>
   <!-- HEADER FINISH -->
   <div id="news-head">
      <h2 class="text-center">Aaina News</h2>
      <hr class="hr1">
      <hr class="hr2">
   </div>
   <?php 
					// Define our WP Query Parameters
					$the_query = new WP_Query( 'category_name=blog' );
				?>

				<?php 

					// Start our WP Query
					while ($the_query -> have_posts()) : $the_query -> the_post(); 
					// Display the Post Title with Hyperlink
					
				?>
    <?php 
					// Define our WP Query Parameters
					$the_query = new WP_Query( 'category_name=blog' );
				?>

				<?php 

					// Start our WP Query
					while ($the_query -> have_posts()) : $the_query -> the_post(); 
					// Display the Post Title with Hyperlink
					
				?>
        <div class="carousel-wrap">
            <div class="owl-carousel">
              <div class="item">
                    <div class="card">
                            <div class="card-image">
                                    <?php
                                                            
                                                    $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
                                                            
                                                    echo '<a href="'.$featured_img_url.'" rel="lightbox">'; 
                                                    the_post_thumbnail('thumbnail');
                                                    echo '</a>';
                                        ?>

                                    <div class="card-info">
                                        <!-- <h2>COVID-19 Crisis</h2> -->
                                        <h4 class="mt-5"><a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></a>
                                            <div class="share-button">
                                            <span><i class="fa fa-share-alt mr-2"></i></span>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                                            <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>


                                        </h4>

                                        <p><?php the_excerpt(__('(more…)')); ?> <span><a class="read-more" href="#"><?php the_permalink() ?>Read More</a></span></p>

                                <p>Date: 09/09/09</p>
                            </div>
                       </div>
                </div>
            </div>
      </div>       

    <section id="carousel-blogs">
      <div id="blogs-head">
         <h2 class="text-center">Aaina Blogs</h2>
         <hr class="hr1">
         <hr class="hr2">
      </div>
      <?php 
					// Define our WP Query Parameters
					$the_query = new WP_Query( 'category_name=blog' );
				?>

				<?php 

					// Start our WP Query
					while ($the_query -> have_posts()) : $the_query -> the_post(); 
					// Display the Post Title with Hyperlink
					
				?>
        <div class="carousel-wrap">
            <div class="owl-carousel">
              <div class="item">
                    <div class="card">
                            <div class="card-image">
                                    <?php
                                                            
                                                    $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
                                                            
                                                    echo '<a href="'.$featured_img_url.'" rel="lightbox">'; 
                                                    the_post_thumbnail('thumbnail');
                                                    echo '</a>';
                                        ?>

                                    <div class="card-info">
                                        <!-- <h2>COVID-19 Crisis</h2> -->
                                        <h4 class="mt-5"><a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></a>
                                            <div class="share-button">
                                            <span><i class="fa fa-share-alt mr-2"></i></span>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                                            <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>


                                        </h4>

                                        <p><?php the_excerpt(__('(more…)')); ?> <span><a class="read-more" href="#"><?php the_permalink() ?>Read More</a></span></p>

                                <p>Date: 09/09/09</p>
                            </div>
                    </div>
               </div>
            </div>
      </div> 
</section>         

<?php get_footer(); ?>

<div class="carousel-wrap">
         <div class="owl-carousel">
         <?php 
					// Define our WP Query Parameters
					$the_query = new WP_Query( 'category_name=blog' );
				?>

				<?php 

					// Start our WP Query
					while ($the_query -> have_posts()) : $the_query -> the_post(); 
					// Display the Post Title with Hyperlink
					
				?>
            <div class="item">
               <div class="card">
                  <div class="card-image">
                  <?php
                                                            
                         $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
                                                                    
                        echo '<a href="'.$featured_img_url.'" rel="lightbox">'; 
                        the_post_thumbnail('thumbnail');
                         echo '</a>';
                    ?>
                  </div>
                  <div class="card-info">
                     <!-- <h2>COVID-19 Crisis</h2> -->
                     <h4 class="mt-5"><a href="<?php the_permalink() ?>"><?php the_title(); ?></h4>
                     <div class="share-button">
                        <span><i class="fa fa-share-alt mr-2"></i></span>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>




                     <p><?php the_excerpt(__('(more…)')); ?> <span><a class="read-more" href="<?php the_permalink() ?>">Read More</a></span></p>

                     <p>Date: 09/09/09</p>   
               </div>
            </div>
            <?php 
              endwhile;
				wp_reset_postdata();
				?>
        
        </div>    
</div>