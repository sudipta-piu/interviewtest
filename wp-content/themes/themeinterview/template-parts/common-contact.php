<!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_text">Contact Us</h1>
         </div>
      </div>
      <div class="contact_section_2 layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_0">
                  <div class="mail_section">
                     <div class="email_text">
                        <?php 
            echo do_shortcode('[contact-form-7 id="584f507" title="Contact form 1"]');
            ?>
                        <!-- <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                        <div class="send_btn">
                           <div type="text" class="main_bt"><a href="#">SEND</a></div>
                        </div> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="map-responsive">
                    <?php the_field('google_map','option'); ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->