 <?php 



/*

Template Name:Home Front Page

*/ 
get_header(); ?>

 <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                <?php
                $args = array( 'post_type' => 'banner', 'posts_per_page'=>-1, 'order' => 'ASC' );
                $loop = new WP_Query( $args );
                $i=1;
                while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
            <?php if($i==1){?>
                  <div class="carousel-item active">
                    <?php }else{?>
                    <div class="carousel-item">
                    <?php };?>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text"><?php echo get_field('banner_1st_text');?></h1>
                              <h1 class="coffee_text"><?php echo get_field('banner_2nd_text');?></h1>
                              <p class="there_text"><?php echo get_field('banner_p_tag');?></p>
                              <div class="learnmore_bt"><a href="<?php echo get_field('banner_button');?>">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php $i++;endwhile; wp_reset_postdata(); ?>
                  <!-- <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding </h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding </h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      
     <?php include get_template_directory() . '/template-parts/common-about.php';?>

      <?php include get_template_directory() . '/template-parts/gallery-common.php';?>
      <?php include get_template_directory() . '/template-parts/service-common.php';?>
     
      <!-- testimonial section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="client_taital">Testimonial</h1>
                  <p class="client_text">Eeven slightly believable. If you are going to use a passage of Lorem Ipsum, you need to</p>
               </div>
            </div>
         </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
                   $args = array(
    'post_type' => 'type_testimonials',
    'posts_per_page' => -1
);

$i=1;
$query = new WP_Query( $args );
if( $query->have_posts() ):
    while( $query->have_posts() ): $query->the_post();
 
    ?>
    <?php if($i==1){?>
          <div class="carousel-item active">
            <?php }else{?>
                <div class="carousel-item">
            <?php };?>
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text"><?php the_title();?> <span class="quick_icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/quick-icon.png"></span></h4>
                            <p class="customer_text"><?php the_content();?></p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
          <?php
       //The secondary loop
    $i++;endwhile;
endif;
wp_reset_postdata();
?>
         
        </div>
      </div>
     </div>
      <!-- testimonial section end -->
      <?php include get_template_directory() . '/template-parts/common-contact.php';?>

<?php get_footer(); ?>