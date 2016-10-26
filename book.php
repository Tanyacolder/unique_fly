<?php 
    $pageTitle = "Book"; 
    include("header.php");  ?>


  

        <!--content body start-->
       <img src="images/flights/flight00.jpg" alt="slide2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
            <!-- Home first slider End -->
   
          <!-- popular flights section Start -->
          <div class="full_width travelite_feature_section border_bottom">
            <div class="container">
              <div class="row">
                <div class="fight_section_wrapper">
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="offer_first first_box">
                      <h3 class="">Popular flights</h3>
                      <p>Unique Fly we make your dreams better than your reality..</p>
                      <div> <a href="#" class="black_btn">view more</a></div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="hotel_feature_box">
                      <img src="images/Home/Home5/flight1.jpg" class="img-responsive" alt="feature">
                      <div class="feature_overlay_second">
                        <div class="bottom_first"><a href="#">australia</a><span>$750</span></div>
                        <div class="bottom_second">one way flight<span>/person</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="hotel_feature_box">
                      <img src="images/Home/Home5/flight2.jpg" class="img-responsive" alt="feature">
                      <div class="feature_overlay_second">
                        <div class="bottom_first"><a href="#">malaysia</a><span>$750</span></div>
                        <div class="bottom_second">one way flight<span>/person</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="hotel_feature_box">
                      <img src="images/Home/Home5/flight3.jpg" class="img-responsive" alt="feature">
                      <div class="feature_overlay_second">
                        <div class="bottom_first"><a href="#">thailand</a><span>$750</span></div>
                        <div class="bottom_second">one way flight<span>/person</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- popular flights section End-->
           <div class="full_width booking_app_section">
            <div class="container">
              <div class="row row_top">
                <div class="col-lg-6 col-md-6 col-sm-6">
                
                <h3>Passenger Details</h3>

                                      
                       <form class="form" method="post" action="connect.php">
                      <fieldset>
                      
                         
                           <div class="form-group col-lg-4">
                                  <label for="firstname">Firstname:</label>
                                  <input type="text" id="firstname" name="firstname" class="form-control" required pattern="[a-zA-Z]{3,15}" >
                          </div> 
                          <div class="form-group col-lg-4">
                                  <label for="surname">Surname:</label>
                                  <input type="text" id="surname" name="surname" class="form-control" required pattern="[a-zA-Z]{3,15}">
                          </div>
                          
                          <div class="form-group col-lg-4">
                                  <label>Email Address</label>
                                  <input type="email" id="email" name="email" required="require" class="form-control" >
                          </div>
                          <div class="form-group col-lg-4">
                              <label for="phone">Passport Expiry date:</label>
                              <input type="text" id="pass_expiry" name="pass_expiry" placeholder="dd/mm/yyyy" class="form-control" required pattern="[0-9-/]{10}">
                          </div>
                          <br>

                          
                          <div class="form-group col-lg-4">
                              <label for="Passport_no">Passport No:</label><br>
                              <input type="text" id="passport_no" name="passport_no" class="form-control" required pattern="[0-9-a-zA-Z-]{1,20}">
                           </div>                           
                              
                         
                        <br>
                         <div class="form-group col-lg-4">
                          <label for="nationality">Nationality:</label>
                          <select id="nationality" class="form-control" name="nationality">
                              <option value="brazilian">Brazilian</option>                    
                              <option value="angolian">Angolian</option>                
                              <option value="south_african">South-African</option>                  
                              <option value="egyptian">Egyptian</option>                
                              <option value="nigerian">Nigerian</option>                
                              <option value="russian">Russian</option>                
                              <option value="french">French</option>              
                              <option value="namibian">Namibian</option>               
                              <option value="british">British</option>                
                              <option value="american">American</option>                
                              <option value="zimbabwean">Zimbabwean</option>                
                              <option value="algerian">Algerian</option>              
                              <option value="mexican">Mexican</option>               
                              <option value="spanish">Spanish</option>                
                              <option value="dutch">Dutch</option>                    
                              <option value="zambian">Zambian</option>                    
                              <option value="scotish">Scotish</option>
                          </select><br>
                           </div>

                           

                         
                        <div class="form-group col-lg-4">
                              <label for="phone">Date of birth:</label>
                              <input type="text" id="date_of_birth"  name="date_of_birth" class="form-control" required pattern="[0-9-/]{10}"> 
                          </div>
                                                     
                           
                        <div class="form-group col-lg-4">
                              <label for="phone">Phone 1:</label>
                              <input type="tel" id="date_of_birth"  name="phone_1" class="form-control" required pattern="[0-9]{1,15}">
                          </div>
                          
                          <div class="form-group col-lg-4">
                              <label for="phone">Phone 2:</label>
                              <input type="tel" id="date_of_birth"  name="phone_2" class="form-control" required pattern="[0-9]{1,15}">
                          </div>
                          <br>                        
                       
                        <div class="form-group col-lg-4">

                          <label>Sex:</label><br>
                          <input type="radio" id="male" value="male" name="sex" required><label
                          for="male" class="light">Male</label>
                          <input type="radio" id="female" value="female" name="sex" required><label
                          for="female" class="light">Female</label>
                        </div>
                        <div class="form-group col-lg-4">

                          <label>Flight:</label><br>
                          <input type="radio" id="round" value="round" name="flight_option" required><label
                          for="round" class="light">Round</label>
                          <input type="radio" id="oneway" value="oneway" name="flight_option" required><label
                          for="oneway" class="light">One-Way</label>
                        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                
                                
                         <h3 class="h3">Contact Person Details</h3>

                        <div class="form-group col-lg-4">
                                  <label for="cont_firstname">Firstname:</label>
                                  <input type="text" id="cont_firstname" name="cont_firstname"  class="form-control" required pattern="[a-zA-Z]{3,15}">
                          </div> 
                          <div class="form-group col-lg-4">
                                  <label for="cont_surname">Surname:</label>
                                  <input type="text" id="cont_surname" name="cont_surname" class="form-control" required pattern="[a-zA-Z]{3,15}">
                          </div>
                          <div class="form-group col-lg-4">
                                  <label>Email Address</label>
                                  <input type="email" id="cont_email" name="cont_email" class="form-control">
                          </div>
                          <div class="form-group col-lg-4">
                              <label for="phone">Phone:</label>
                              <input type="tel" id="cont_phone"  name="cont_phone" class="form-control" required pattern="[0-9]{1,20}">
                          </div>
                          <br>
                                                              
                        </div>
                      </div>
                    </div>

                      
                           <div class="form-group col-lg-4">
                                  <label for="child_firstname">Child Firstname:</label><br>
                                  <input type="text" id="child_firstname" name="child_firstname" class="form-control" required pattern="[a-zA-Z]{3,15}">
                          </div> 
                          <div class="form-group col-lg-4">
                                  <label for="child_surname">Child Surname:</label><br>
                                  <input type="text" id="child_surname" name="child_surname" class="form-control" required pattern="[a-zA-Z]{3,15}">
                          </div>
                          <div class="form-group col-lg-4">
                              <label for="child_passport_no">Child Passport No:</label><br>
                              <input type="text" id="child_passport_no" name="child_passport_no" class="form-control"  required pattern="[0-9-a-zA-Z-]{1,20}">
                           </div>
                            <div class="form-group col-lg-4">
                              <label for="phone">Child Date of birth:</label><br>
                              <input type="text" id="child_date_of_birth" placeholder="12/12/1995" name="child_date_of_birth"  required pattern="[0-9-/-]{10}">
                        </div>                           
                              
                          <div class="form-group col-lg-4">
                              <label>Child Sex:</label><br>
                              <input type="radio" id="male" value="male" name="child_sex" required><label
                              for="male" class="light">Male</label>
                              <input type="radio" id="female" value="female" name="child_sex" required><label
                              for="female" class="light">Female</label>
                          </div>
                        <div class="form-group col-lg-4">
                          <label for="nationality">Child Nationality:</label><br>
                          <select id="child_nationality" name="child_nationality">
                              <option value="brazilian">Brazilian</option>                    
                              <option value="angolian">Angolian</option>                
                              <option value="south_african">South-African</option>                  
                              <option value="egyptian">Egyptian</option>                
                              <option value="nigerian">Nigerian</option>                
                              <option value="russian">Russian</option>                
                              <option value="french">French</option>              
                              <option value="namibian">Namibian</option>               
                              <option value="british">British</option>                
                              <option value="american">American</option>                
                              <option value="zimbabwean">Zimbabwean</option>                
                              <option value="algerian">Algerian</option>              
                              <option value="mexican">Mexican</option>               
                              <option value="spanish">Spanish</option>                
                              <option value="dutch">Dutch</option>                    
                              <option value="zambian">Zambian</option>                    
                              <option value="scotish">Scotish</option>
                          </select>

                      
                         
                        
                          </div><br><br><br><br><br><br><br><br><br><br><br><br>


                          <div>
                          <h3>You are required to complete this section</h3>
                          </div>
                                  

                         <div class="form-group col-lg-4">
                              <label for="departure_date">Departure Date:</label>
                              <input type="text" id="departure_date" placeholder="dd/mm/yyyy"  name="departure_date" class="form-control"  required pattern="[0-9-/]{2,10}">
                          </div>
                       
                          
                           <div class="form-group col-lg-4">
                              <label for="time">Departure Time:</label>
                              <input type="text" id="departure_time" placeholder="0000"  name="departure_time" class="form-control"  required pattern="[0-9-:-:]{2,10}">
                         </div>
                         <div class="form-group col-lg-4">

                           <label for="am_pm_1">Time:</label><br>
                          <select id="am_pm_1" name="am_pm_1">
                              <option value="am">AM</option>                    
                              <option value="pm">PM</option>                
                          </select><br>
                          </div>

                        
                           <div class="form-group col-lg-4">
                              <label for="class">Class:</label><br>
                          <select id="class" name="class">
                              <option value="business_class">Business Class</option>                    
                              <option value="economy_class">Economy Class</option>                
                              <option value="first_class">First Class</option>                 
                          </select><br>
                          </div>
                          <div class="form-group col-lg-4">
                              <label for="return_date">Return Date:</label>
                              <input type="text" id="return_date" placeholder="dd/mm/yyyy"  name="return_date" class="form-control"   required pattern="[0-9-/]{2,10}">
                          </div>
                          <div class="form-group col-lg-4">
                              <label for="time">Return Time:</label>
                              <input type="text" id="return_time" placeholder="00:00" name="return_time" class="form-control"  required pattern="[0-9-:-:]{2,10}">
                          </div>
                          <div class="form-group col-lg-4">
                          <label for="am_pm_2">Time:</label><br>
                          <select id="am_pm_2" name="am_pm_2">
                              <option value="am">AM</option>                    
                              <option value="pm">PM</option>                
                              
                          </select>
                          </div><br><br><br><br><br><br><br><br><br><br>

                          <div class="form-group col-lg-4">
                                  <label for="departing_from_country">Departing From:</label>
                                  <input type="text" id="departing_from_country" placeholder="Country" name="departing_from_country" class="form-control"  required pattern="[0-9-a-zA-Z-]{1,20}" >
                          </div>
                          <div class="form-group col-lg-4">
                                  <label for="departing_from_city">Departing From:</label>
                                  <input type="text" id="departing_from_city" name="departing_from_city" placeholder="City" class="form-control"  required pattern="[0-9-a-zA-Z-]{1,20}">
                          </div>
                          <div class="form-group col-lg-4">
                                  <label for="destination_country">Destination:</label>
                                  <input type="text" id="country" placeholder="Country" name="destination_country" class="form-control"  required pattern="[0-9-a-zA-Z-]{1,20}">
                          </div>
                          <div class="form-group col-lg-4">
                                  <label for="destination_city">Destination:</label>
                                  <input type="text" id="destination_city" name="destination_city" placeholder="City" class="form-control"  required pattern="[0-9-a-zA-Z-]{1,20}">
                          </div>

                          <div class="form-group col-lg-4">
                                  <label for="air_line">Airline:</label>
                                  <input type="text" id="air_line" name="air_line" placeholder="Unique007" class="form-control"  required pattern="[0-9-a-zA-Z-]{1,20}">
                          </div>
                          <div class="form-group col-lg-4">
                                  <label for="money">Fare:</label>
                                  <input type="text" id="fare" name="fare" placeholder="$$$$$$" class="form-control"  required pattern="[0-9-$-$-]{1,13}" >
                          </div>

                          <div class="form-group col-lg-4">
                              <label for="payment_option">Payment Option:</label><br>
                          <select id="payment_option" name="payment_option">
                              <option value="eco_cash">Eco-Cash</option>                    
                              <option value="visa">Visa</option>                
                              <option value="pay_pay">Pay Pal</option> 
                              <option value="master_card">Master Card</option>                 
                          </select><br><br><br><br><br><br>
                      <button type="submit" class="btn btn-default" name="submit" >Submit</button>
                      </fieldset>
                   </form>  
                    </div>
                  </div>
                </div>
              </div>              
          
          <!-- special offers section start -->
          <div class="full_width travelite_world_section">
            <div class="container">
              <div class="row">
                <div class="">
                  <h3>Special offers</h3>
                  
                </div>
                <div class="flights_special_offers full_width">
                  <!-- first ractangle start -->
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class=" full_width offer_box_wrapper">
                      <div class="circle_icon"> 20% <span>off</span> </div>
                      <div class="img_overlay_wrapper">
                        <img src="images/flights/offer_1.jpg" class="img-responsive" alt="offer">
                        <div class="img_overlay"> </div>
                      </div>
                      <div class="full_width offer_inner">
                        <h4>Senior Travel</h4>
                      </div>
                    </div>
                  </div>
                  <!-- first ractangle End -->
                  <!-- second ractangle start -->
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class=" full_width offer_box_wrapper">
                      <div class="circle_icon"> 30% <span>off</span> </div>
                      <div class="img_overlay_wrapper">
                        <img src="images/flights/offer_2.jpg" class="img-responsive" alt="offer">
                        <div class="img_overlay"> </div>
                      </div>
                      <div class="full_width offer_inner">
                        <h4>Weekend Trip</h4>
                      </div>
                    </div>
                  </div>
                  <!-- second ractangle End -->
                  <!-- thired ractangle start -->
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class=" full_width offer_box_wrapper">
                      <div class="circle_icon"> 15% <span>off</span> </div>
                      <div class="img_overlay_wrapper">
                        <img src="images/flights/offer_3.jpg" class="img-responsive" alt="offer">
                        <div class="img_overlay"> </div>
                      </div>
                      <div class="full_width offer_inner">
                        <h4>Business Class</h4>
                      </div>
                    </div>
                  </div>
                  <!-- thired ractangle End -->
                  <!-- fourth ractangle start -->
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class=" full_width offer_box_wrapper">
                      <div class="circle_icon"> 40% <span>off</span> </div>
                      <div class="img_overlay_wrapper">
                        <img src="images/flights/offer_4.jpg" class="img-responsive" alt="offer">
                        <div class="img_overlay"> </div>
                      </div>
                      <div class="full_width offer_inner">
                        <h4>Family Travel</h4>
                      </div>
                    </div>
                  </div>
                  <!-- fourth ractangle End -->
                </div>
                
              </div>
            </div>
          </div>
          <!-- special offers section end -->
          
          <!-- subscribe section start -->
          <div class="full_width booking_help_bg">
            <div class="icon_circle_overlay"></div>
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="booking_contact">
                    <h2 class="booking_help_heading">Need help for booking..?</h2>
                    <div class="call_button">Call Tanya on: +263-777-169-697</div>
                    <p>Feel free to call us to plan a perfect holiday for you!</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="booking_contact_right">
                    <h2 class="booking_help_heading">Need help for booking..?</h2>
                    <a href="#">view branches</a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- subscribe section End -->
          <!--content body end-->
         
<?php
    include("footer.php"); ?>