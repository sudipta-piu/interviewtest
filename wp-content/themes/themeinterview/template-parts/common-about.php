<!-- about section start -->
      <?php $page_id = 10;  //Page ID
                    $page_data = get_page( $page_id ); 

                    //store page title and content in variables
                    $title = $page_data->post_title; 
                    $content = apply_filters('the_content', $page_data->post_content);
                      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'single-post-thumbnail' ); ?>
                
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital"><?php echo $title;?></div>
                     <p class="about_text"><?php echo $content;?></p>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="<?php echo $image[0]; ?>"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->