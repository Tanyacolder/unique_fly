<?php 
    $pageTitle = "Home"; 
    include("header.php");  ?>

        <!--content body start-->
       <img src="images/flights/flight10.jpg" alt="slide2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
            <!-- Home first slider End -->
            <!-- slider tab section start -->
            
                    <!-- tab_search form End -->
                    <!-- tab_search form End -->
                  </div>
                  <div id="car_search" class="flight_booking_tab">
                    <!-- tab_search form start -->
                    <form>
                      <div class="flight_booking_inner">
                      <!----from-->
                        
                        <div class="pull_left check_in_field"> 
						<label>Depart</label> 
						<input type="text" id="Check_in_date_tab_car" placeholder="dd/mm/yyyy"> <i class="fa fa-calendar"></i> 
						</div> <div class="pull_left room_select_field">
                          <label>Time</label> 
                          <select class="form-control" id="search_adult3">
                            <option value="1">6:00</option>
                            <option value="2">9:18</option>
                            <option value="3">12:00</option>
                            <option value="4">15:11</option>
                            <option value="2">18:30</option>
                            <option value="3">21:10</option>
                            
                          </select>
                          <i class="fa fa-caret-down"></i> 
                        </div>
                        <div class="pull_left room_select_field">
                          <label>adults</label> 
                          <select class="form-control" id="search_adult3">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                          </select>
                          <i class="fa fa-caret-down"></i> 
                        </div>
                        <div class="pull_left room_adults">
                          <label>class</label> 
                          <select class="form-control" id="search_adults3">
                            <option value="1">Economy Class</option>
                            <option value="2">first Class</option>
                          </select>
                          <i class="fa fa-caret-down"></i> 
                        </div>
                        <div class="pull_left location_airport"> 
            <label>from</label>
            <input type="text" placeholder="Enter City or Airport Code"  name="t1" id="t1" onKeyUp="aa();">

            </div>
            
                      </div>
                      <!-- flight_booking_inner end -->
                  <div class="pull_left check_in_field"> <label>return</label> <input type="text" id="Check_out_date_tab_flight" placeholder="dd/mm/yyyy"> <i class="fa fa-calendar"></i> </div>
                        <div class="pull_left room_select_field">
                          <label>Time</label> 
                          <select class="form-control" id="search_adult3">
                            <option value="1">6:00</option>
                            <option value="2">9:18</option>
                            <option value="3">12:00</option>
                            <option value="4">15:11</option>
                            <option value="2">18:30</option>
                            <option value="3">21:10</option>
                            
                          </select>
                          <i class="fa fa-caret-down"></i> 
                        </div>
                        <div class="pull_left room_select_field">
                          <label>kids</label> 
                          <select class="form-control" id="search_kids_3">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                          </select>
                          <i class="fa fa-caret-down"></i> 
                        </div>
                        <div class="pull_left room_adults">
                          <label>Trip</label> 
                          <select class="form-control" id="search_adults3">
                            <option value="1">Round</option>
                            <option value="2">One-Way</option>
                          </select>
                          <i class="fa fa-caret-down"></i> 
                        </div>
                                
                    <div class="pull_left location_airport">

                    <label>to</label> <input type="text" placeholder="Enter City or Airport Code"> 
                    </div>


                      </div>
                      <!-- flight_booking_inner end -->
                    </form>
                  <div style=" border-width: 1px; margin:auto; min-width: 150px ; visibility:hidden " id="d1">amit</div>


                    <script type="text/javascript">
                       function aa()
                       {
                        xmlhttp=new XMLHttpRequest();
                        xmlhttp.open("GET","search.php?nm="+document.getElementById("t1").value,false);
                        xmlhttp.send(null);
                        document.getElementById("d1").innerHTML=xmlhttp.responseText;
                        document.getElementById("d1").style.visibility='visible';
                       }
                     </script>
                   </div>
                    <!-- tab_search form End -->
                    <!-- tab_search form End -->
                  </div>
                 
          <!-- slider main wrapper end -->
          <!-- popular flights section Start -->
          <div class="full_width travelite_feature_section border_bottom">
            <div class="container">
              <div class="row">
                <div class="fight_section_wrapper">
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="offer_first first_box">
                      <h3 class="">Popular flights</h3>
                    <i class="em em-airplane"></i>
                      <p>Unique Fly the sky is the limit.. </p>
                      <div> <a href="#" class="black_btn">view more</a></div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="hotel_feature_box">
                      <img src="images/Home/Home5/flight1.jpg" class="img-responsive" alt="feature">
                      <div class="feature_overlay_second">
                        <div class="bottom_first"><a href="#">Harare</a><span>$750</span></div>
                        <div class="bottom_second">one way flight<span>/person</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="hotel_feature_box">
                      <img src="images/Home/Home5/flight2.jpg" class="img-responsive" alt="feature">
                      <div class="feature_overlay_second">
                        <div class="bottom_first"><a href="#">malaysia</a><span>$750</span></div>
                        <div class="bottom_second">Round Trip<span>/person</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="hotel_feature_box">
                      <img src="images/Home/Home5/flight3.jpg" class="img-responsive" alt="feature">
                      <div class="feature_overlay_second">
                        <div class="bottom_first"><a href="#">Paris</a><span>$750</span></div>
                        <div class="bottom_second">one way flight<span>/person</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- popular flights section End-->
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
                <div class="full_width destination_button"> <a href="#" class="btn_green btns feature_more_btn">more offers</a> </div>
              </div>
            </div>
          </div>
          <!-- special offers section end -->
          <!-- booking from app section Start -->
          <div class="full_width booking_app_section">
            <div class="container">
              <div class="row row_top">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="left_side_mockup_img"> <img src="images/Home/Home5/Mockup-pic.png" alt="mobile img"> </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="booking_app_details">
                    <div class="secttion_first_b">
                      <h3>Book From App</h3>
                      <h4>&amp; Get </h4>
                      <div class="extra_text">extra</div>
                    </div>
                    <div class="secttion_first_b secttion_second_b">
                      <div class="off_dighit"> 30% <span>off</span> </div>
                      <h3>On Order Above $1800</h3>
                      <h3>USE CODE : <span>APP30<span></span></span></h3>
                      <div class="extra_text"><i class="fa fa-mobile"></i></div>
                    </div>
                    <div class="avialable_text">
                      <h4>availabel on</h4>
                      <img src="images/Home/Home5/App-Store1.png" alt="app"> 
					  <img src="images/Home/Home5/Play-Store2.png" alt="app"> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- booking from app section End -->
          <!-- subscribe section start -->
          <div class="full_width booking_help_bg">
            <div class="icon_circle_overlay"></div>
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="booking_contact">
                    <h2 class="booking_help_heading">Need help for booking..?</h2>
                    <div class="call_button">Call: +263 777 169 697</div>
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
          <!--footer start-->
         <?php 
         include("footer.php");    ?>