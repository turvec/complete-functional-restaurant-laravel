@extends('layouts.main')
@section('content')
<div>
  <!-- content  -->	
  <div class="content">
    <section class=" no-padding dark-bg hidden-section">
        <div class="map-container">
            <div id="singleMap"></div>
            <div class="scrollContorl"></div>
        </div>
        <!-- map-view-wrap --> 
        <div class="map-view-wrap">
            <div class="container">
                <div class="map-view-wrap_item">
                    <div class="contact-details">
                        <h4>Contacts Details</h4>
                        <ul>
                            <li><span><i class="fal fa-map-marked-alt"></i> Adress :</span> <a href="#">USA 27TH Brooklyn NY</a></li>
                            <li><span><i class="fal fa-phone-rotary"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                            <li><span><i class="fal fa-mailbox"></i> Mail :</span> <a href="#">yourmail@domain.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--map-view-wrap end --> 
        <div class="brush-dec"></div>
    </section>
    <!--  section  -->   
    <section class="hidden-section big-padding con-sec" data-scrollax-parent="true" id="sec3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-title text-align_left">
                        <h2>Get in touch</h2>
                        <div class="dots-separator fl-wrap"><span></span></div>
                    </div>
                    <div class="text-block ">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.
                        </p>
                    </div>
                    <div class="contactform-wrap">
                        <div id="message"></div>
                        <form  class="custom-form" action="http://restabook.kwst.net/light/php/contact.php" name="contactform" id="contactform">
                            <fieldset>
                            <div id="message2"></div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="name2" placeholder="Your Name *" value=""/>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"  name="email" id="email2" placeholder="Email Address *" value=""/>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"  name="phone" id="phone2" placeholder="Phone *" value=""/>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class=" fl-wrap">
                                            <select name="subject" id="subject2" class="chosen-select no-search-select">
                                                <option data-display="Subject">Any</option>
                                                <option value="Upcoming Events">Upcoming Events </option>
                                                <option value="Book table">Book table</option>
                                                <option value="Banquet">Banquet</option>
                                                <option value="Banquet">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <textarea name="comments"  id="comments2" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                <div class="clearfix"></div>
                                <button class="btn float-btn flat-btn color-bg" id="submit_cnt">Send Message <i class="fal fa-long-arrow-right"></i></button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="section-dec sec-dec_top"></div>
                </div>
                <div class="col-md-5">
                    <div class="column-text_inside fl-wrap dark-bg" >
                        <div class="column-text">
                            <div class="section-title">
                                <h4>Call For Reservations</h4>
                                <h2>Opening Hours</h2>
                                <div class="dots-separator fl-wrap"><span></span></div>
                            </div>
                            <div class="work-time fl-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Sunday to Tuesday</h3>
                                        <div class="hours">
                                            09:00<br>
                                            22:00
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Friday to Saturday</h3>
                                        <div class="hours">
                                            11:00<br>
                                            19:00
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="bold-separator"><span></span></div>
                            <div class="big-number"><a href="#">+7(111)123456789</a></div>
                        </div>
                        <div class="illustration_bg">
                            <div class="bg"  data-bg="images/bg/dec/6.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-bg">
            <div class="bg"  data-bg="images/bg/dec/section-bg.png"></div>
        </div>
    </section>
    <!--  section end  -->  
    <div class="brush-dec2 brush-dec_bottom"></div>
</div>
<!-- content end  -->
</div>
@endsection
