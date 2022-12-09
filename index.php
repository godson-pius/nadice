    <?php
     require_once 'partials/header.php'; 
    
     if (isset($_POST['request_btn'])) {
        $fullname = CHECK_INPUT(SANITIZE($_POST['fullname']));
        $email = CHECK_INPUT(SANITIZE($_POST['email']));
        $phone = CHECK_INPUT(SANITIZE($_POST['phone']));
        $companyname = CHECK_INPUT(SANITIZE($_POST['companyname']));
        $liters = CHECK_INPUT(SANITIZE($_POST['liters']));
        $address = CHECK_INPUT(SANITIZE(ALLOW_SAFE_SYMBOLS($_POST['address'])));

        $sql = "INSERT INTO requests (fullname, email, phone, company, liter, address) VALUES ('$fullname', '$email', '$phone', '$companyname', '$liters', '$address')";

        $result = VALIDATE_QUERY($sql);
        
        if ($result === true) {

            $sql2 = "SELECT * FROM clients WHERE client = '$companyname'";
            $company = EXECUTE_QUERY($sql2);

            if ($company === false) {
                $sql3 =  "INSERT INTO clients (client, phone) VALUES ('$companyname', '$phone')";
                $res = VALIDATE_QUERY($sql3);
            }

            $request_status = true;
            echo "<script>alert('Request have been sent successfully!')</script>";
        } else {
            echo "<script>alert('Failed to send request!')</script>";
            // $request_status = false;
        }
     }

     ?>
        <!-- masthead end -->

        <!--Main Slider-->
        <section class="rev_slider_wrapper">
            <div id="slider2" class="rev_slider" data-version="5.0">

                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://demo2.steelthemes.com/induscity/wp-content/uploads/sites/9/revslider/slider-4/slide1-h4-100x50.jpg"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/main-slider/nadicebg3.png" alt="" title="nadicebg3.png" width="1920" height="670" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme rev-bigtext" id="slide-11-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['195','220','320','230']" data-fontsize="['60','60','48','28']"
                            data-lineheight="['60','60','48','28']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":400,"speed":700,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
							"ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Get high <br> Quality Diesel Supply </div>

                        <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme rev-paratext" id="slide-11-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['339','365','465','320']" data-fontsize="['18','18','18','13']"
                            data-lineheight="['28','28','28','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":800,"speed":700,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
							"ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">We deliver what you need, when you need it, and wherever you need it. </div>

                        <!-- LAYER NR. 3 -->
                            <a class="tp-caption rev-btn rev-btn1" href="./services" id="slide-11-layer-3" data-x="['center','center','center','center']" data-hoffset="['-95','-95','-95','-81']" data-y="['top','top','top','top']" data-voffset="['425','450','550','400']" data-fontsize="['16','16','16','14']"
                            data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":700,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
							"ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0",
							"ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",
							"style":"c:rgb(37,37,37);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,12]" data-paddingright="[0,0,0,0]" data-paddingbottom="[19,19,19,10]" data-paddingleft="[0,0,0,0]">Current Price: ₦<?= number_format($current_price); ?> </a>

                        <!-- LAYER NR. 4 -->
                        <a class="tp-caption rev-btn rev-btn2" href="./about" id="slide-11-layer-4" data-x="['center','center','center','center']" data-hoffset="['95','95','95','80']" data-y="['top','top','top','top']" data-voffset="['425','450','550','400']" data-fontsize="['16','16','16','14']"
                            data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":700,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
							"ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0",
							"ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",
							"style":"c:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[18,18,18,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[17,17,17,10]" data-paddingleft="[0,0,0,0]">Read More </a>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="http://demo2.steelthemes.com/induscity/wp-content/uploads/sites/9/revslider/slider-4/slide2-h4-100x50.jpg"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/main-slider/nadicebg2.png" alt="" title="nadicebg2.png" width="1920" height="670" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme rev-bigtext" id="slide-11-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['195','220','320','230']" data-fontsize="['60','60','48','28']"
                            data-lineheight="['60','60','48','28']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":400,"speed":700,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
							"ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">We are the Leading <br> Bulk Diesel Supplier in Enugu </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme rev-paratext" id="slide-11-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['339','365','465','320']" data-fontsize="['18','18','18','13']"
                            data-lineheight="['28','28','28','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":800,"speed":700,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
							"ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">We are committed to keeping businesses, homes, corporate and government bodies <br> afloat without light-outs with our state-of-the-art premium diesel delivery networks. </div>

                        <!-- LAYER NR. 7 -->
                        <a class="tp-caption rev-btn rev-btn1" href="./services" id="slide-11-layer-3" data-x="['center','center','center','center']" data-hoffset="['-95','-95','-95','-81']" data-y="['top','top','top','top']" data-voffset="['425','450','550','400']" data-fontsize="['16','16','16','14']"
                            data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":700,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
							"ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0",
							"ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",
							"style":"c:rgb(37,37,37);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,12]" data-paddingright="[0,0,0,0]" data-paddingbottom="[19,19,19,10]" data-paddingleft="[0,0,0,0]">Our Services </a>

                        <!-- LAYER NR. 8 -->
                        <a class="tp-caption rev-btn rev-btn2" href="./about" target="_blank" id="slide-11-layer-4" data-x="['center','center','center','center']" data-hoffset="['95','95','95','80']" data-y="['top','top','top','top']" data-voffset="['425','450','550','400']" data-fontsize="['16','16','16','14']"
                            data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":700,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
							"ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0",
							"ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",
							"style":"c:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[18,18,18,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[17,17,17,10]" data-paddingleft="[0,0,0,0]">Read More </a>
                    </li>
                   
                </ul>
            </div>
        </section>
        <!--Main Slider  end-->

        <!-- <marquee>Nadice Oil and Gas Current Price is ₦800</marquee> -->


        <!--welcome sec -->
        <div class="welcomesec-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="well3eftm">
                            <div class="mf-section-title text-left dark large-size margbtm40">
                                <h3 class="main-color">Welcome to </h3>
                                <h2>Nadice Oil & Gas</h2>
                            </div>
                            <p>We are the leading Diesel (AGO) supplier, ranging from various Diesel products, industrial equipments, to electrical energy generating plant supplies, regardless of your industry.</p>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="mf-services-3 style-2 ">
                            <div class="services-list clearfix">
                                <div class="vc_service-wrapper "><span class="mf-icon"><i class="flaticon-buildings"></i></span>
                                    <h3><a href="#" title="We are Professional">Well Structured</a></h3><span>Organization</span>
                                </div>
                                <div class="vc_service-wrapper "><span class="mf-icon"><i class="flaticon-home"></i></span>
                                    <h3><a href="#" title="Licensed &amp; Insured">Licensed &amp; Insured</a></h3><span>RC 34533</span>
                                </div>
                                <div class="vc_service-wrapper "><span class="mf-icon"><i class="flaticon-landscape"></i></span>
                                    <h3><a href="#" title="Number 1 Company">Leading Company</a></h3><span>In Diesel Supply</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--welcome sec end -->


        <!-- Request -->
        <div class="service-2" id="request">
            <div class="container">
                <div class="mf-section-title text-center dark large-size margbtm40">
                    <h2>Make Delivery Request</h2>
                </div>
                <div class="row">
                
                    <div class="col-sm-12 col-xs-12">
                        <div class="mf-contact-form-7 form-light sidebarform">
                            <div class="mf-section-title text-left dark medium-size ">
                                <h2>Make Request</h2>
                            </div>
                            <form method="post" action="" class="wpcf7-form">
                                <div class="messages"></div>
                                <div class="controls mf-form mf-form-5">
                                    <div class="form-group">
                                        <input type="text" name="fullname" placeholder="Full Name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="number" name="phone" placeholder="Phone Number" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="companyname" placeholder="Company Name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="number" name="liters" min="500" placeholder="Number of Liters" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea name="address" cols="40" rows="10" placeholder="Delivery Address"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="request_btn" class="wpcf7-form-control wpcf7-submit">Request Delivery</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- request end -->



        <!-- counters -->
        <!-- <div class="counterssec">
            <div class="container">
                <div class="mf-counter columns-4 style-2 ">
                    <div class="row list-counter">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-wrapper"><span class="mf-icon"><i class="flaticon-buildings"></i></span>
                                <div class="counter-content">
                                    <div class="counter"> <span class="timer counter-value" data-from="50" data-to="2456" data-speed="5000" data-refresh-interval="50">2456</span><span class="unit">+</span></div>
                                    <h4 class="title">Engineers &amp; Workers</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-wrapper"><span class="mf-icon"><i class="flaticon-landscape"></i></span>
                                <div class="counter-content">
                                    <div class="counter"> <span class="timer counter-value" data-from="50" data-to="178" data-speed="5000" data-refresh-interval="50">178</span><span class="unit">+</span></div>
                                    <h4 class="title">Branches In Worldwide</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-wrapper"><span class="mf-icon"><i class="flaticon-technology"></i></span>
                                <div class="counter-content">
                                    <div class="counter"> <span class="timer counter-value" data-from="50" data-to="3250" data-speed="5000" data-refresh-interval="50">3250</span><span class="unit">+</span></div>
                                    <h4 class="title">Successfull Projects</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-wrapper"><span class="mf-icon"><i class="flaticon-landscape"></i></span>
                                <div class="counter-content">
                                    <div class="counter"> <span class="timer counter-value" data-from="50" data-to="1784" data-speed="5000" data-refresh-interval="50">1784</span><span class="unit">+</span></div>
                                    <h4 class="title">Branches In Worldwide</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- counters end -->

        <!-- about us -->
        <div class="aboutus-4">
            <div class="container">
                <div class="mf-section-title text-center dark large-size margbtm50">
                    <h2>About Our Company</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3>We are the Leading Bulk Diesel Supplier in Enugu.</h3>
                        <p>We are the leading Diesel (AGO) supplier, ranging from various Diesel products, industrial equipments, to electrical energy generating plant supplies, regardless of your industry. We cater to a wide range of industries which include but not limited to Financial sectors, Banking, Real Estate, Government, Lifestyle, Media, Construction, Communication, Manufacturing, Education, Residence, Restaurants, Entertainment, etc.</p>
                        <div class="mf-button align-left style-1 margtop30"><a class="button mf-btn has-background" href="./about">More About Us</a></div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <img src="images/icon/about.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- about us end -->

        <!-- testimonies -->
        <!-- <div class="testwithvideo">
            <div class="container mf-box-shadown ">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="videobox">
                            <div class="mf-video-banner mfvdo-imagebg">
                                <div class="mf-video-content">
                                    <a href="#" class="photoswipe">
                                        <span class="video-play"><img src="images/icon/play-icon.png" alt=""></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="mf-section-title text-center dark large-size margbtm40 margtop40">
                            <h2>Customer Feedback</h2>
                        </div>
                        <div class="mf-testimonial style-5 carousel dark-version ">
                            <div class="testimonial-list testsingle">
                                <div class="testimonial-info ">
                                    <div class="testi-wrapper">
                                        <div class="desc">We help clients find ways to turn everyday information into actionable insights by embedding work analytics across their organization’s strategy & all systems. </div>
                                        <div class="testimonial-avatar"><img src="images/resources/testi1-1.jpg" width="90" height="90" alt="testi1" title="testi1" /></div>
                                        <h4 class="name"><span>Thomas Bennet</span></h4><span class="address">Newyork</span>
                                    </div>
                                </div>
                                <div class="testimonial-info ">
                                    <div class="testi-wrapper">
                                        <div class="desc">We help clients find ways to turn everyday information into actionable insights by embedding work analytics across their organization’s strategy & all systems. </div>
                                        <div class="testimonial-avatar"><img src="images/resources/testi2-1.jpg" width="90" height="90" alt="testi2" title="testi2" /></div>
                                        <h4 class="name"><span>Thomas Bennet</span></h4><span class="address">California</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- testimonies end -->


        <!-- our partener -->
        <!-- <div class="partener-1">
            <div class="container">
                <div class="text-center partenertest margbtm40">We work with our partners to provide project perfection, <span class="main-color">join with our parnership.</span></div>
                <div class="mf-partner clearfix carousel-type">
                    <div class="list-item partner-slide">
                        <div class="partner-item ">
                            <a href="#" target="_self"><img width="218" height="110" src="images/partener/partner5-1.png" alt="" /></a>
                        </div>
                        <div class="partner-item ">
                            <a href="#" target="_self"><img width="218" height="110" src="images/partener/partner5-1.png" alt="" /></a>
                        </div>
                        <div class="partner-item ">
                            <a href="#" target="_self"><img width="218" height="110" src="images/partener/partner5-1.png" alt="" /></a>
                        </div>
                        <div class="partner-item ">
                            <a href="#" target="_self"><img width="218" height="110" src="images/partener/partner5-1.png" alt="" /></a>
                        </div>
                        <div class="partner-item ">
                            <a href="#" target="_self"><img width="218" height="110" src="images/partener/partner5-1.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- our partener end -->

        <!-- footer -->
        <?php require_once 'partials/footer.php'; ?>


    <!-- jquery Liabrary -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- bootstrap v3.3.6 js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- fancybox js -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.js"></script>
    <!-- counter js -->
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <!-- validate js -->
    <script src="js/validate.js"></script>
    <!-- switcher js -->
    <script src="js/switcher.js"></script>

    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
    <script src="js/gmap.js"></script>
    <script src="js/map-helper.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="js/revolution/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.video.min.js"></script>

    <!-- script JS  -->
    <script src="js/scripts.min.js"></script>
    <script src="js/script.js"></script>
    <script src="inc/contact.js"></script>

       <!-- Toastify Js -->
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

   <?php 
        if ($request_status === true) { ?>
        <script>
            const perm = await Notification.requestPermission()
            if (perm === 'granted') {
                new Notification('Nadice Oil and Gas limited', 'A new request have been sent');
            }
        </script>
    <?php } ?>

</body>

</html>
