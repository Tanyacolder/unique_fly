<?php 
    $pageTitle = "Contact"; 
    include("header.php");  ?>

	  <!-- contact details section start -->
      <div class="full_width tr_contact_detais_section">
		  <div class="container">
		    <div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="conatact_form_ds">
						<form method="post" action="insert.php">
							<input type="text" name="client_name" placeholder="Name" class="input_c" required="required">
							<input type="email" name="client_email" placeholder="Email" class="input_c" required="required">
							<input type="text" name="client_contact" placeholder="Phone" class="input_c" required="required">
							<textarea class="text_area_c" placeholder="Message" name="client_msg"></textarea>
							<input type="submit" value="Send" name="submit" class="btn_green" id="form_submit">
						</form>
						
					</div>
					
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-6 col-md-7 col-sm-8 col-lg-offset-2">
					  <div class="address_contact_details">
					  <div class="address_detais_city">
						Zimbabwe:
					  </div>
						<ul>
							<li> 1234, Street Name, City Name.</li>
							<li> Info@tUniquefly.com</li>
							<li> +263 777 169 697</li>
						</ul>
					  </div>
					  
						<div class="address_contact_details">
							<div class="address_detais_city">
								Tanyacolder:
							</div>
							<ul>
							
								<li> tanyacolder@gmail.com</li>
								<li> +263 777 169 697</li>
							</ul>
						</div>
						
						
					
					<div class="col-lg-4 col-md-5 col-sm-4 t_align_c">
					 <!-- facebook squre start -->
					<div class="social_box facebook_b_wrap">
						
						<div class="social_likes">facebook</div>
						<div class="shares_and_likes">shares & Likes</div>
					</div>
					<!-- facebook squre End -->
					
						<!-- twitter squre start -->
						<div class="social_box twitter_b_wrap">
							
							<div class="social_likes">twitter</div>
							<div class="shares_and_likes">followers</div>
						</div>
						<!-- twitter squre End -->
						
						
					</div>
				</div>
				</div>
			</div>
		  </div>
		 
		  
	  </div>
	  <!-- contact details section End -->
	
<!-- contact section End -->

<!-- counter section End -->
	  
  </div>
  <!--content body end--> 
<?php
    include("footer.php"); ?>