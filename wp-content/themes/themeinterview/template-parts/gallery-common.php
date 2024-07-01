<!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                <?php   $page_id = 13;  //Page ID
                    $page_data = get_page( $page_id ); 

                    //store page title and content in variables
                    $title = $page_data->post_title; 
                    $content = apply_filters('the_content', $page_data->post_content);?>
                  <h1 class="gallery_taital"><?php echo $title;?></h1>
                
                  <p class="gallery_text"><?php echo $content;?></p>
               </div>
            </div> 
            <div class="">
                <?php
                $args = array( 'post_type' => 'gallery', 'posts_per_page'=>-1, 'order' => 'ASC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                $image_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "main-banner" );  
                ?>
               <div class="gallery_section_2">
                  <div class="row">
                     <?php

                    // Check rows exists.
                    if( have_rows('gallery') ):

                        // Loop through rows.
                        while( have_rows('gallery') ) : the_row(); ?>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo get_sub_field('gal1');?>" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                      <?php      // Do something...

                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif; ?>
                     
                  </div>
               </div>
               <?php endwhile; wp_reset_postdata(); ?>
               <!-- <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-4.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-5.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-6.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-7.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-8.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img-9.png" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
            <div class="seemore_bt"><a href="#">See More</a></div>
         </div>
      </div>
      <!-- gallery section end -->