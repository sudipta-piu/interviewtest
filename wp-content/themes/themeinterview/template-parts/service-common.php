 <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                 <?php   $page_id = 14;  //Page ID
                    $page_data = get_page( $page_id ); 

                    //store page title and content in variables
                    $title = $page_data->post_title; 
                    $content = apply_filters('the_content', $page_data->post_content);?>
                  <h1 class="services_taital"><?php echo $title;?></h1>
                  <p class="services_text"><?php echo $content;?></p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                 <?php
                $args = array( 'post_type' => 'service', 'posts_per_page'=>-1, 'order' => 'ASC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                $image_banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "main-banner" );  
            ?>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                           <img src="<?php echo $image_banner[0]; ?>" class="image_1">
                           <img src="<?php echo $image_banner[0]; ?>" class="image_2">
                        </div>
                        <h3 class="decorate_text"><?php the_title();?></h3>
                        <p class="tation_text"><?php the_content();?></p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <?php endwhile; wp_reset_postdata(); ?>
                  <!-- <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon2.png" class="image_1">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon2.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">20 Coffee Flavors</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon3.png" class="image_1">
                           <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon3.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Pleasant Abient</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->