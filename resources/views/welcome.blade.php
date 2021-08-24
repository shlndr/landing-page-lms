@extends('layouts.frontend')
@section('content')
<style type="text/css">
   .error{color:#fff!important;font-size:12px!important;margin-top:10px;}
   .mediainput{padding-top: 10px;color: #fff;}
   /*.mediainput span{color: #fff!important;}*/
   /* .input-effect1.ifYes{padding:0!important;} */
   .post{cursor:pointer;}
   .response{position:absolute;font-size:12px;color: #f00;padding-top: 6px;}
   #response{    width: 215px;
    overflow: hidden;
    border-radius: 5px;
    height: 50px;}
    #response img{width:214px;}
    /*.ugc-sect textarea{line-height:20px!important;}*/
    #result{    text-align: center;
    color: #fff;
    padding: 20px 0 0px 0px;}
    div#popup4 {
        max-width: 600px;
    }
    .well .stickers.poster.content-image1 img {
        width: 100%;
        margin-bottom: 30px;
    }
    #popup4.well .content {
        max-height: 450px;
         overflow-y: hidden; 
         /*padding: 0 10px;*/
        /*overflow-x: hidden;*/
    }
    #popup4.well .stickers{margin-top:0}
    #popup4.well{padding:0}
    #closepopup4{z-index: 555;}
    #popup4.well .stickers.poster.content-image1 img{margin-bottom:0}
</style>
<section class="slider-sect">
  <div id="slider-sect" class="owl-carousel owl-theme wow fadeInUp">
<!-- <div class="item">
  <img src="{{ asset('frontend/images/banner.jpg') }}" alt="" class="ban-img slide-dsk">
    <img src="{{ asset('frontend/images/banner-mb2.jpg') }}" alt="" class="ban-img slide-mb">
    </div> -->
<!-- <div class="item">
      <img src="{{ asset('frontend/images/banner1.jpg') }}" alt="" class="ban-img slide-dsk">
     <img src="{{ asset('frontend/images/banner-mb.jpg') }}" alt="" class="ban-img slide-mb">
    </div> -->


    <div class="item"><!-- fourth -->
      <div class="">
        <img src="{{ asset('frontend/images/banner4.jpg') }}" alt="" class="ban-img slide-dsk"><img src="{{ asset('frontend/images/banner4-mb.jpg') }}" alt="" class="ban-img slide-mb">
      </div>
    </div>

    <div class="item"><!-- fifth -->
      <div class="">
        <img src="{{ asset('frontend/images/banner3.jpg') }}" alt="" class="ban-img slide-dsk"><img src="{{ asset('frontend/images/banner3-mb.jpg') }}" alt="" class="ban-img slide-mb">
      </div>
    </div>


    <div class="item"><!-- first -->
      <div class="">
        <img src="{{ asset('frontend/images/banner6.jpg') }}" alt="" class="ban-img slide-dsk"><img src="{{ asset('frontend/images/banner6-mb.jpg') }}" alt="" class="ban-img slide-mb">
      </div>
    </div>

    

    <div class="item">
          <div class="">
            <img src="{{ asset('frontend/images/banner1.jpg') }}" alt="" class="ban-img slide-dsk">
            <img src="{{ asset('frontend/images/banner-mb.jpg') }}" alt="" class="ban-img slide-mb">
          </div>
        </div>


        <div class="item"><!-- second -->
          <div class="">
            <img src="{{ asset('frontend/images/banner5.jpg') }}" alt="" class="ban-img slide-dsk"><img src="{{ asset('frontend/images/banner5-mb.jpg') }}" alt="" class="ban-img slide-mb">
          </div>
        </div>

        <div class="item"><!-- third -->
          <div class="">
            <img src="{{ asset('frontend/images/banner8.jpg') }}" alt="" class="ban-img slide-dsk"><img src="{{ asset('frontend/images/banner8-mb.jpg') }}" alt="" class="ban-img slide-mb">
          </div>
        </div>



        <div class="item"><!-- six -->
          <div class="">
            <img src="{{ asset('frontend/images/banner9.jpg') }}" alt="" class="ban-img slide-dsk"><img src="{{ asset('frontend/images/banner9-mb.jpg') }}" alt="" class="ban-img slide-mb">
          </div>
        </div>

        <div class="item"><!-- last -->
          <div class="">
            <img src="{{ asset('frontend/images/banner7.jpg') }}" alt="" class="ban-img slide-dsk"><img src="{{ asset('frontend/images/banner7-mb.jpg') }}" alt="" class="ban-img slide-mb">
          </div>
        </div>


  </div>
  <div class="clearfix"></div>
</section>
  
  
<section class="ugc-expl">
   <div class="container">
      <h2>Akela Hi Kaafi Hai Challenge</h2>
          <span class="share-text">If you can play multiple instruments, sing in multiple voices, write with both hands, juggle multiple objects, speak multiple languages<br> or multi-task in any other way, here’s your chance to show it off. </span>
          <h3>You could win an exciting prize! Hurry and upload your entries latest by 31st Dec’20.</h3>
      <div class="ugc-sect">
         <form name="ahkhform">
          @csrf
          <input type="hidden" name="utm_source" value="direct">
           <input type="hidden" name="utm_medium" value="direct">
           <input type="hidden" name="utm_campaign" value="direct">
           <input type="hidden" name="utm_term" value="none">
           <input type="hidden" name="utm_content" value="none">
           <input type="hidden" name="add_date" id="add_date" value="">
         <!-- <span class="share-text">Share your story with us</span> -->
         <div class="ugc-row">
            <div class="col1">
               <div class="number"><span>1</span></div>
               <div class="new-box">
                  <p>Shoot a video or a picture of
                     your multi-tasking self  
                  </p>
               </div>
               <div class="up-file">
                  <div class="uploader">
                     <input id="media-upload" type="file" name="mediaUpload" accept=".jpg,.jpeg.,.gif,.png,.mov,.mp4" />
                     <label for="media-upload" id="file-drag">
                        <div id="response">
                        </div>
                     </label>
                     <div class="mediainput"></div>
                   </div>
               </div>
               
            </div>
            <div class="col2">
               <div class="number"><span>2</span></div>
               <div class="new-box2">
                  <p>Write a few lines on why you think you are 
                                       Akela Hi Kaafi Hai
                                    </p>
               </div>
               <div class="up-file"><textarea name="message" maxlength="32000" placeholder="Type Here" class="flex-box0"></textarea></div>
            </div>
            <div class="col2">
               <div class="number"><span>3</span></div>
               <div class="new-box2">
                  <p>Put in your email id, so we can get in touch 
                     with you
                  </p>
               </div>
               <div class="up-file"><textarea name="email" maxlength="40" placeholder="Enter Your Email Address" class="flex-box0"></textarea></div>
            </div>
            <!-- <div class="col3">
               <div class="number"><span>4</span></div>
               <input type="button" value="Submit" name="submit" class="orangebtn post">
            </div> -->
            <div class="clearfix"></div>
         </div>
        </form>
        <div id="result"></div>
      </div>

      <div class="col0">
         <button type="button" value="Submit" name="submit" class="orangebtn post">SUBMIT</button>
      </div>
      <a class="initialism popup3_open teram-c" id="popup3_open">*T&C Apply</a>

   </div>
</section>

  
<section class="trailer-sect">
  <div class="container">
    
     <div class="trailer-row">
      <div class="lt">
      <h2>  Tata Pravesh Steel Doors & Windows -  Akela Hi Kaafi Hai</h2>
  <div class="vdoSec"  id="section0">
      <video poster="{{ asset('frontend/images/video-poster.jpg') }}" id="bgvid" width="779" height="349" loop controls >
        <source src="{{ asset('frontend/videos/1366-1.mp4') }}" type="video/mp4">
        <source src="{{ asset('frontend/videos/1366-1.ogv') }}" type="video/ogv">
        <source src="{{ asset('frontend/videos/1366-1.webm') }}" type="video/webm">
      </video>

    </div> 
        
      <p>Strength, Style, Security and Service. The stunning range of Tata Pravesh steel doors and windows has got it all for both residential and commercial constructions. Add to it, the assurance from the house of Tata Steel and you couldn’t have asked for more, for sure. Visit <a href="https://www.tatapravesh.com/" style="color:#fff; text-decoration:none"> www.tatapravesh.com</a> or call 18004199200. <br>
              <a href="https://www.tatapravesh.com/landingpage/" target="_blank" class="btn-book">Book your dream door</a>
      </p>  
      
       
       
       </div>
       <div class="rt"><h2> Merchandise Free Delivery!</h2>
        <!-- updated sh-22-12-2020 -->
        <ul>
         <li> 
          <div class="content">
            <a class="initialism popup1_open" id="popup1_open">
              <div class="content-overlay"></div>
              <img class="content-image" src="{{ asset('frontend/images/sticker7.jpg') }}" alt="">
              <div class="content-details fadeIn-bottom">
                <img src="{{ asset('frontend/images/download-icon.png') }}" alt="">
              </div>
            </a>
          </div>
         </li>
        <li>
          <div class="content">
            <a class="initialism popup2_open" id="popup2_open">
              <div class="content-overlay"></div>
              <img class="content-image" src="{{ asset('frontend/images/sticker8.jpg') }}" alt="">
              <div class="content-details fadeIn-bottom">
                <img src="{{ asset('frontend/images/download-icon.png') }}" alt="">
              </div>
            </a>
          </div>
        </li>
      </ul>

      <!-- <div class="content">
        <a class="initialism popup1_open" id="popup1_open">
          <div class="content-overlay"></div>
          <img class="content-image" src="images/sticker7.jpg">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">This is a title</h3>
            <p class="content-text">This is a short description</p>
          </div>
        </a>
      </div> -->
        <!-- END updated sh-22-12-2020 -->
       
       </div>
       
       <!-- <div class="media-sect">
               <div class="chanel1 audio">
               <span> Media<br> Partner</span>
               <div class="midd-img"><img src="{{ asset('frontend/images/zee-tv.jpg') }}" alt=""></div>

               </div>

                <div class="chanel1 audio">
                <span> Digital<br> Partner</span>
                <div class="midd-img"><img src="{{ asset('frontend/images/aashiyana-logo.jpg') }}" alt=""></div>
                </div>

                <div class="chanel1 audio">
              <span> Music<br> Partner</span>
               <div class="midd-img"><img src="{{ asset('frontend/images/woodbye.jpg') }}" alt=""></div>
               </div>

                <div class="chanel1 audio">
               <span>Merchandise<br> Partner</span>
               <div class="midd-img"><img src="{{ asset('frontend/images/griha-pravish.jpg') }}" alt=""></div>
               </div>
            </div> -->
       
         <div class="clearfix"></div>
    </div>
  </div>  
</section>
  
  <section class="contact-sect">
      <div class="container">
      <h2>Contactless Behind the Scenes</h2>
        <div id="our-client" class="owl-carousel owl-theme wow fadeInUp">
           <div class="item">
            <figure class="snip0015">
    <img src="{{ asset('frontend/images/contac-img1.jpg') }}" alt="contac-img1"/>
    <figcaption>
      <p>Who knew that even make-up can be contactless? But we make it happen; every day something new.</p>
      <a href="#"></a>
    </figcaption>
  </figure>
           </div>

          <div class="item">
            <figure class="snip0015">
    <img src="{{ asset('frontend/images/contac-img2.jpg') }}" alt="contac-img1"/>
    <figcaption>
      <p>Direction with distancing has been a game changer. Because work shouldn't stop. </p>
      <a href="#"></a>
    </figcaption>
  </figure>
           </div>

          <div class="item">
            <figure class="snip0015">
    <img src="{{ asset('frontend/images/contac-img3.jpg') }}" alt="contac-img3"/>
    <figcaption>
      <p>And we made it happen while making sure that we and ones around us are safe.</p>
      <a href=""></a>
    </figcaption>
  </figure>
           </div>


          <div class="item">
            <figure class="snip0015">
    <img src="{{ asset('frontend/images/contac-img4.jpg') }}" alt="contac-img4"/>
    <figcaption>
      <p>Contactless Preparation</p>
      <a href=""></a>
    </figcaption>
  </figure>
           </div>


          <div class="item">
            <figure class="snip0015">
    <img src="{{ asset('frontend/images/contac-img5.jpg') }}" alt="contac-img5"/>
    <figcaption>
      <p>Contactless Selfie</p>
      <a href=""></a>
    </figcaption>
  </figure>
           </div>


          <div class="item">
            <figure class="snip0015">
    <img src="{{ asset('frontend/images/contac-img6.jpg') }}" alt="contac-img6"/>
    <figcaption>
      <p>Contactless Discussions</p>
      <a href="#"></a>
    </figcaption>
  </figure>
           </div>


        </div>
      </div>
    </section>
  
  
<!--<section class="testimonial">
  <div class="container">
   <h2>Testimonial</h2>
    
<div id="our-client" class="owl-carousel owl-theme wow fadeInUp"> 
    <div class="item">
    <div class="testi-row">
  <div class="test-box1">
  <img src="images/client-img.png" alt=""></div>
<div class="test-box2">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus </p>
    <p class="client-text">Mr. Jon Doe</p>
  </div>
  <div class="clearfix"></div>  
</div>
</div>
    
<div class="item">
    <div class="testi-row">
  <div class="test-box1">
  <img src="images/client-img.png" alt=""></div>
<div class="test-box2">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus </p>
    <p class="client-text">Mr. Jon Doe</p>
  </div>
  <div class="clearfix"></div>  
</div>
</div>
  
  <div class="item">
    <div class="testi-row">
  <div class="test-box1">
  <img src="images/client-img.png" alt=""></div>
<div class="test-box2">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus </p>
    <p class="client-text">Mr. Jon Doe</p>
  </div>
  <div class="clearfix"></div>  
</div>
</div>
  
  
  <div class="item">
    <div class="testi-row">
  <div class="test-box1">
  <img src="images/client-img.png" alt=""></div>
<div class="test-box2">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus </p>
    <p class="client-text">Mr. Jon Doe</p>
  </div>
  <div class="clearfix"></div>  
</div>
</div>
  
  <div class="item">
    <div class="testi-row">
  <div class="test-box1">
  <img src="images/client-img.png" alt=""></div>
<div class="test-box2">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus </p>
    <p class="client-text">Mr. Jon Doe</p>
  </div>
  <div class="clearfix"></div>  
</div>
</div>
    
  </div>  
    
  </div>
  </section>-->
  
  
<!--   <section class="time-count">
    <div class="container">
      <h3>Akela Hi Kaafi Hai <br>Coming in...</h3>
      <div class="count">
                    <div class="flipclock" id="flipclock-1"></div>
                 </div>
                <a target="_blank" href="http://www.google.com/calendar/event?action=TEMPLATE&amp;dates=20201226%2F20201227&amp;text=Akela%20Hi%20Kaafi%20Hai%20on%2026th%20Dec%20">
        <div class="save-btn">
          <p>Save the Date</p>
        </div>
      </a>
    
    </div>
  </section> -->
  
  
    <!-- FILTER POPUP -->
<div id="popup1" class="well">
  <div class="popup_close fade_close" title="Close" aria-label="Close" id="closepopup1"><span aria-hidden="true" class="closePop">×</span></div>
  <div class="">
    <div class="content">
      <div class="heading">Say it with a sticker!</div>
      <div class="stickers">
        <ul>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker9.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker9.jpg') }}" download="sticker1" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker10.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker10.jpg') }}" download="sticker2" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker11.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker11.jpg') }}" download="sticker3" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker12.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker12.jpg') }}" download="sticker4" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker13.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker13.jpg') }}" download="sticker5" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker14.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker14.jpg') }}" download="sticker6" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker15.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker15.jpg') }}" download="sticker7" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker16.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker16.jpg') }}" download="sticker8" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker17.jpg') }}" alt="">
            <a href="images/sticker17.jpg" download="sticker9" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker18.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker18.jpg') }}" download="sticker10" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker19.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker19.jpg') }}" download="sticker11" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker20.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker20.jpg') }}" download="sticker12" class="dwn-btn">Download Now</a>
          </li>
          <li>
            <img class="content-image" src="{{ asset('frontend/images/sticker21.jpg') }}" alt="">
            <a href="{{ asset('frontend/images/sticker21.jpg') }}" download="sticker13" class="dwn-btn">Download Now</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- END FILTER POPUP -->

<!-- CONTACT US POPUP sh-22-12-2020-->
<div id="popup2" class="well">
  <div class="popup_close fade_close" title="Close" aria-label="Close" id="closepopup2"><span aria-hidden="true" class="closePop">×</span></div>
  <div class="">
    <div class="content"> 
      <div class="heading">Download the Poster</div>
      <div class="stickers poster">
        <img class="content-image" src="{{ asset('frontend/images/poster.jpg') }}" alt="">
        <a href="{{ asset('frontend/images/poster.jpg') }}" download="poster" class="dwn-btn">Download Now</a>
      </div>
    </div>
  </div>
</div>
<!--END CONTACT US POPUP -->
  

<!-- Term n Condition POPUP sh-22-12-2020-->
<div id="popup3" class="well">
  <div class="popup_close fade_close" title="Close" aria-label="Close" id="closepopup2"><span aria-hidden="true" class="closePop">×</span></div>
  <div class="">
    <div class="content"> 
      <div class="heading">Term &amp; Conditions</div>
      <div class="stickers tnc">
        <p>The contest is open only to Indian residents who have attained 18 years of age. The contest period is valid from 00:01am of 23rd December 2020 to 11:59pm of 31st December 2020. By sheer participation, every user hereby agrees to adhere to the following:</p>
        <ol>
          <li>The contest requires the participant to upload a video or picture and a write of their multiple talents on <a href="https://www.akelahikaafihai.com/" target="_blank">www.akelahikaafihai.com</a></li>
          <li>Participation in this contest is purely voluntary. By participating in this activity, each participant is deemed to have accepted these terms and conditions and will not question or challenge any aspect herein whatsoever.</li>
          <li>Participants who do not comply with the terms and conditions of the contest will be disqualified and will not question or challenge their disqualification whatsoever.</li>
          <li>Multiple entries are allowed, however, the winners shall be chosen randomly and solely at the discretion of domain owners of <a href="https://www.akelahikaafihai.com/" target="_blank">www.akelahikaafihai.com</a>. No questions or reasoning will be solicited or entertained in this regard whatsoever.</li>
          <li>The winners shall be announced on or before 10th January 2021.</li>
          <li>Prize/s defined during this contest period are purely illustrative and subject to availability.</li>
          <li>Winners will be notified on <a href="https://www.akelahikaafihai.com/" target="_blank">www.akelahikaafihai.com</a> for providing their details which are binding to claim the prize. The documents for verification to be submitted by the winner are: a) Scanned version of photo identity proof - Passport / Driving license / PAN card/ Voter ID card / Aadhar Card / Government Employment ID card / any other ID issued by the Government of India; b) Scanned version of  proof of address - Passport / Driving license / PAN card/ Voter ID card / Aadhar Card / Government Employment ID card / any other ID issued by the Government of India; c) Age proof - Passport / Driving license / PAN card/ Voter ID card / Aadhar Card / Government Employment ID card / any other ID issued by the Government of India. Winners to also share their email ID for claiming the prize.</li>
          <li>We will not be responsible for any incorrect details provided by any participant and/or delay in receipt of communication/ prize for any reason whatsoever.</li>
          <li>We shall not be responsible for any costs that may have been incurred by the winner(s) towards submission required documents/proofs for claiming the said prizes.</li>
          <li>We reserve the right to change the terms and conditions of this contest, including extending, withdrawing, or discontinuing the same without notice, without assigning any reason, at its sole discretion and without any liability.</li>
          <li>We reserve the right to moderate the content posted by participants and may decide to disqualify/declare ineligible/not publish certain entries without providing any reason or justification for the same.</li>
          <li>By participating in this contest, all participants perpetually agree that their name and / or their photo and / or their entries may appear in any advertisements / promotions (online/offline/other media channels) and no fees or other sums are to be paid to the participants on account of usage of the same in the aforementioned advertisements / promotions/ etc.</li>
          <li>The contest is not valid in whichever region/state/location of India that prohibits contests/prize led activities whatsoever.</li>
          <li>No correspondence shall be entertained with regard to any aspect of this contest.</li>
          <li>We shall reserve the right to use all data, material etc. received as part of this contest as it may deem fit for its future promotions.</li>
          <li>Any dispute arising out of or in relation to this contest shall be subject to the exclusive jurisdiction of the Courts in Kolkata.</li>
          <li>We do not promote or permit any activity that infringes any third party intellectual property rights including copyright, trademark, designs, patents, etc. and reserves the right to remove/disqualify from contest any participant’s post if such post is found to have violated any third party intellectual property rights.</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--END Term n Condition POPUP -->

  
<!-- AUDIO sh-22-12-2020 -->
<audio controls preload="auto" id="audio">
  <source src="{{ asset('frontend/audio.mpeg') }}" controls></source>
  Your browser isn't invited for super fun audio time.
</audio>
<!-- END AUDIO sh-22-12-2020 -->

  <div id="popup4" class="well">
  <div class="popup_close fade_close" title="Close" aria-label="Close" id="closepopup4"><span aria-hidden="true" class="closePop">×</span></div>
  <div class="">
    <div class="content">
      <div class="stickers poster content-image1">
        <img class="content-image0" src="{{ asset('frontend/images/thank-you.jpg') }}" alt="">
        <!-- <img class="content-image0" src="{{ asset('frontend/images/thank-you-mob.jpg') }}" alt=""> -->
      </div>
    </div>
  </div>
</div>


            
@endsection

@section('scripts') 
<script>

// $('#popup4').popup('show');

  //HOVER AUDIO PLAY
  $(document).ready(function () {
    var beepThree = $("#audio")[0];
    $(".audio")
      .mouseenter(function() {
      beepThree.play();
    });
  });


  //Sticker POPUP sh-22-12-2020
  $(document).ready(function () {
      $('.well').popup({
        transition: 'all 0.3s',
        closebutton: true
      });
      $('.closePop').click(function(){
        $('.well').popup('hide');
      });
    });
  //END popup

  document.getElementById('media-upload').addEventListener('change', function(event) {
    document.getElementById('response').innerHTML = "";
    var file = event.target.files[0];
    var fileReader = new FileReader();
    if (file.type.match('image')) {
      fileReader.onload = function() {
        var img = document.createElement('img');
        img.src = fileReader.result;
        document.getElementById('response').appendChild(img);
      };
      fileReader.readAsDataURL(file);
    } else {
      fileReader.onload = function() {
        var blob = new Blob([fileReader.result], {type: file.type});
        var url = URL.createObjectURL(blob);
        var video = document.createElement('video');
        var timeupdate = function() {
          if (snapImage()) {
            video.removeEventListener('timeupdate', timeupdate);
            video.pause();
          }
        };
        video.addEventListener('loadeddata', function() {
          if (snapImage()) {
            video.removeEventListener('timeupdate', timeupdate);
          }
        });
        var snapImage = function() {
          var canvas = document.createElement('canvas');
          canvas.width = video.videoWidth;
          canvas.height = video.videoHeight;
          canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
          var image = canvas.toDataURL();
          var success = image.length > 100000;
          if (success) {
            var img = document.createElement('img');
            img.src = image;
            document.getElementById('response').appendChild(img);
            URL.revokeObjectURL(url);
          }
          return success;
        };
        video.addEventListener('timeupdate', timeupdate);
        video.preload = 'metadata';
        video.src = url;
        // Load video in Safari / IE11
        video.muted = true;
        video.playsInline = true;
        video.play();
      };
      fileReader.readAsArrayBuffer(file);
    }
  });



   $(function() {
     $('textarea[name="email"]').change(isEmail).keyup(isEmail);
     // $('input[name="mobile"]').change(isMobile).keyup(isMobile);
   });
   
   
   
   function isEmail() {
     var email = $('textarea[name="email"]').val();
     var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   
     if(regex.test(email) == true)
     {
       return true;
     }else{
       return false;
     }
   }
   
   function isMobile(){
    var mobile = $('input[name="mobile"]').val();
    var mobregex = /^[1-9]{1}[0-9]{9}$/;
    // var mobregex = /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/;
   
     //Matches     +447222555555   | +44 7222 555 555 | (0722) 5555555 #2222
     //Non-Matches (+447222)555555 | +44(7222)555555  | (0722) 5555555 #22
   
    if(mobregex.test(mobile)){
      return true;
    }else{
     return false;
   }
   }
   
   function isLetter()
   {
   var name = $('input[name="name"]').val();
   var letters = /^[a-zA-Z\s]*$/;
   if(letters.test(name)){
    return true;
   }else{
    return false;
   }
   }
   
   
   
   function getUrlParameter(sParam) {
   var sPageURL = window.location.search.substring(1),
   sURLVariables = sPageURL.split('&'),
   sParameterName,
   i;
   
   for (i = 0; i < sURLVariables.length; i++) {
   sParameterName = sURLVariables[i].split('=');
   if (sParameterName[0] === sParam) {
     return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
   }
   }
   }
   
   function setUTM(param)
   {
   var paramValue = getUrlParameter(param);
   if(paramValue && paramValue.length > 0)
   {
   $('input[name="'+param+'"]').val(paramValue);
   }
   }
   
   function validatePincode(pinval)
   {
   
   if(pinval.length == 0)
   {
   var pinval = $('input[name="pincode"]').val();
   }
   
   var pinregex = /^\d{6}$/;
   
   if(pinregex.test(pinval)){
   return true;
   }else{
   return false;
   }
   }
   
   setUTM('utm_source');
   setUTM('utm_medium');
   setUTM('utm_campaign');
   setUTM('utm_term');
   setUTM('utm_content');
   setUTM('c');
   // setUTM('l');
   // setUTM('e');
   // setUTM('b');
</script>
<script type="text/javascript">
   /*
   $('.ger-otp').click(function(){
     var mobile = $('input[name="mobile"]').val();
     console.log('asdfsdf '+mobile);
     if(mobile.length > 4)
     {
       $('.ger-otp').text('Resend OTP');
       var reqdata = {_token: $('input[name="_token"]').val(), mobile:mobile};
       $.ajax({
         url: "{{ url('send-sms') }}",
         type: 'POST',
         data: reqdata,
         success: function (result) {
           // console.log(result);
           // if(result == "invalid")
           // {
           //   $('.pincode + p.error').remove();
           //   $('input[name="pincode"]').after('<p class="error" style="display: block;">Please enter a valid pincode</p>');
           // }else{
           //   $('input[name="city"]').val(result);
           //   $('.pincode + p.error').remove();
           // }
         }
       }); 
     }else{
       // $('.intotp .error').text('Please enter a valid number');
     }
   
   });*/
   
         $(".input-effect1 input").focusout(function(){
           if($(this).val() != ""){
             $(this).addClass("has-content");
           }else{
             $(this).removeClass("has-content");
           }
         });

         var date = new Date();
         var currentDate = date.toISOString().slice(0,10);
         $("#add_date").val(currentDate );
       
</script>
<script type="text/javascript">
   let validExt = ['jpg', 'jpeg', 'png', 'gif', 'mov', 'mp4', 'mkv'];
   
   
   $('#media-upload').change(function(){
      var exten = $("#media-upload").val().split('.').pop().toLowerCase();
      console.log(exten,$('#media-upload')[0].files[0].size,jQuery.inArray(exten, validExt));
       if(jQuery.inArray(exten, validExt) == -1){
         $('.mediainput').html('<span class="error">Only jpg, jpeg, png, gif, mov, mp4, mkv format allowed.</span>');
         return true;
       }else{
        $('.mediainput').html('');
       }

       if($('#media-upload')[0].files[0].size){
        var selfiesize = $('#media-upload')[0].files[0].size;
          if(selfiesize > 10485760){
            $('.mediainput').html('<span class="error">Only image/video up to 10 MB can be uploaded.</span>');
            return true;
          }else{
            $('.mediainput').html('');
          }
       }
   });

   
   $(document).ready(function(){
   
     $(".post").click(function(){
       var valid = true,
       message = '';
       var emaillen = $('textarea[name="email"]').val().length;
       $('.error').remove();
       $('.agree').text();
       $('form textarea:not(.nonrequired)').each(function() {
         var $this = $(this);
   
         if(!$this.val()) {
           var inputName = $this.attr('name');
           valid = false;
                 // message += 'Please enter your ' + inputName + '\n';
                 $this.after('<p class="error" style="display: block;">This field is required</p>');
               }
             });
   
       let validExt = ['jpg', 'jpeg', 'png', 'gif', 'mov', 'mp4', 'mkv'];
   
       var exten = $("#media-upload").val().split('.').pop().toLowerCase();
   
       if($('#media-upload').val().length <= 0)
       {
         valid = false;
         $('.mediainput').html('<span class="error" style="display: block;">This field is required</span>');
       }
   
       if(jQuery.inArray(exten, validExt) == -1  && valid != false){
         valid = false;
         $('.mediainput').html('<span class="error">Only jpg, jpeg, png, gif, mov, mp4, mkv format allowed.</span>');
       }

       if($('#media-upload')[0].files[0].size){
          var selfiesize = $('#media-upload')[0].files[0].size;
          if(selfiesize > 10485760){
            valid = false;
            $('.mediainput').html('<span class="error">Only images up to 10 MB can be uploaded.</span>');
          }
       }
   
         if(emaillen >= 1 && !isEmail())
         {
           valid = false;
           // message += 'Please enter valid email' + '\n';
           $('textarea[name="email"]').focus().after('<p class="error">Please provide a valid email ID</p>');
         }
   
         // var agreeCheck = $('input[name="agree"]')[0].checked;
         // if( agreeCheck == false)
         // {
         //   valid = false;
         //   $('p.agree').html('Please accept the consent to proceed.');
         // }else{
         //   $('p.agree').html('');
         // }
   
         // var agreeCheck2 = $('input[name="agree2"]')[0].checked;
         // if( agreeCheck2 == false)
         // {
         //   valid = false;
         //   $('p.agree2').html('Please accept terms and conditions.');
         // }else{
         //   $('p.agree2').html('');
         // }
   
         if(!valid) {
             // alert(message);
           }else{
             // $('.post').css('pointer-events','none');
             // $(".btn2:before").css({"background":"url(../images/rotation.png):no-repeat;", "animation": "spin 2s linear infinite;", "-webkit-animation":"spin 2s linear infinite"});
             // $('head').append('<style>.btn2:before {background: url(frontend/images/rotation.png)no-repeat;animation:spin 2s linear infinite;-webkit-animation:spin 2s linear infinite}</style>');
             $('.post').html("Submit <img src='{{ asset('frontend/images/rotation.png') }}' style='width: auto;position: inherit;margin: 0px 0px 4px 4px;animation: spin 2s linear infinite;-webkit-animation: spin 2s linear infinite;'>");
   
             var form = $('form')[0];
             var formData = new FormData(form);
             formData.append('media', $('#media-upload')[0].files[0]);
   
             $.ajax({
               url: "{{ url('save') }}",
               type: 'POST',
               data: formData,
               contentType: false,
               processData: false,
               dataType: 'json',
               success: function (result) { 
                 console.log(result.message);
                 if(result.message == "success")
                 {

                  // const scriptURL = 'https://script.google.com/macros/s/AKfycbzocXH8iVDuIkJrVhQW3b4SXjT3oK5O_SetEqaLQRT5rVc-xTLP/exec'
                  // const formd = document.forms['ahkhform']

                  // fetch(scriptURL, { method: 'POST', body: new FormData(formd)})
                  //   .then(response => console.log('hii'))
                  //   .catch(error => console.error('Error!', error.message))

                   // window.location.href = "{{ url('thank-you') }}"+location.search;

                   $('input[type="file"]').val('');$('textarea').val('');$('#response').html('');
                   window.dataLayer.push({
                   'event': 'formSubmit'
                   });
                   gtag('event', 'conversion', {
                       'allow_custom_scripts': true,
                       'send_to': 'DC-10559103/invmedia/submi000+unique'
                     });
                   $('body').append('<noscript><img src="https://ad.doubleclick.net/ddm/activity/src=10559103;type=invmedia;cat=submi000;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=1;num=1?" width="1" height="1" alt=""/></noscript>');
                   // $('#result').html('Thank you for sharing!');
                   $('#popup4').popup('show');
                   $('.post').html("SUBMIT");
                 }else if(result.message == "emailexists"){
                    // $('.response').html('<span style="color:#f00;">You have been already registered.</span>');
                    $('input[name="email"]').focus().after('<p class="error">This email ID is already registered.</p>');
                    $('.post').html("SUBMIT");
                    $('.post').css('pointer-events','all');
                }else if(result.message == "mobileexists"){
                   // $('.response').html('<span style="color:#f00;">You have been already registered.</span>');
                   
                   $('input[name="mobile"]').focus().after('<p class="error">This mobile number is already registered.</p>');
                   $('.post').html("SUBMIT");
                   $('.post').css('pointer-events','all');
                 }else{
                   $('.post').css('pointer-events','all');
                   $('.post').html("SUBMIT");
                 }
   
                 if(result.message == "invalid"){
                   // $(".btn2:before").css({"background":"url(arrow-left-line.png):no-repeat;", "animation": "none", "-webkit-animation":"none"});
                   // $('head').append('<style>.btn2:before {background: url(frontend/images/arrow-left-line.png)no-repeat;animation:none;-webkit-animation:none;}</style>');
                   $('.post').html("Submit");
                   $('.post').css('pointer-events','all');
                   // $('.response').text('OTP is invalid');
                 }
               }
             }); 
           }
         });
   });    
</script>
@endsection