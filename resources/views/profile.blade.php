<!doctype html>
<html>
   <head>
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-TRDST4');</script>
      <meta charset="utf-8">
      <meta http-equiv="Expires" content="1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>ICICI Bank UK Navratri Clix</title>
      <meta name="title" content="ICICI Bank UK Navratri Clix">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/favicon.ico') }}">
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Selfie Image" />
      <meta property="og:description" content="You too can share your Navratri photograph. 10 lucky winners can win Amazon gift cards worth £300. Plus, get assured prizes on participation. Participate now: {{ $url }}" />
      <meta property="og:url" content="{{ $url }}" />
      <meta property="og:site_name" content="ICICI Bank" />
      <meta property="og:image" content="{{ $imageurl }}{{ $details->selfie }}" />
      <meta property="og:image:secure_url" content="{{ $imageurl }}{{ $details->selfie }}" />
      <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}?v=1">
   </head>
   <body id="profile">
      <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TRDST4"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <img src="{{ $imageurl }}{{ $details->selfie }}" style="width:200px;display:none;">
      <header>
         <div class="container">
            <div class="lt-logo clearfix">
               <a href="{{ url('/') }}">
               <img src="{{ asset('frontend/images/logo.png') }}" alt="">
               </a>
            </div>
            <div class="rt-logo clearfix">
               <ul>
                  <li class="yellow"><a href="{{ url('about') }}">About Contest</a></li>
                  <li class="deskOn"><a href="{{ url('terms-conditions') }}" class="smooth">Terms and conditions</a></li>
                  <li class="mobOn"><a href="{{ url('terms-conditions') }}">T&amp;C</a></li>
               </ul>
            </div>
         </div>
      </header>
      <section class="why-sect head-banner profile-now">
         <div class="container">
            <div class="profile-row">
               <aside><img src="{{ $imageurl }}{{ $details->selfie }}" alt="" style="max-width: 300px;max-height: 300px;"></aside>
               <article>
                  <!-- <span>You too can share your perfect</span> -->
                  <h3>You too can share your Navratri photograph.</h3>
                  <h3>10 lucky winners can win</h3>
                  <!-- <span>and stand a chance to win a gift card <strong>worth £300</strong></span> -->
                  <p class="amzgftimg"><img src="{{ asset('frontend/images/amazon-gift-wrap.png') }}?v=1" alt="amazon gift cards"> </p>
                  <h3>Plus, get assured prizes on participation.</h3>
                  <a href="{{ url('/') }}" class="part-btn">Participate Now</a>
               </article>
            </div>
         </div>
      </section>
      <section class="inner-sect profile-inner">
         <div class="container">
         </div>
         </div>
      </section>
      <section class="invite-sect">
         <div class="container">
            <div class="lt"><img src="{{ asset('frontend/images/prizes-img2.png') }}" alt=""></div>
            <div class="rt clearfix">
               <div class="card">
                  <div class="col">
                     <p class="new-text0">10</p>
                     <p class="new-text">lucky<br>winners</p>
                  </div>
                  <div class="col">
                     <p class="right-text">Amazon Gift Cards Worth £300 Each</p>
                  </div>
               </div>
               <div class="card">
                  <div class="col1">
                     <p class="new-prize">Assured
                        Participation Prizes
                     </p>
                  </div>
                  <div class="row">
                     <div class="col2">
                        <p class="new-img"><img src="{{ asset('frontend/images/magzter-logo.png') }}" alt=""></p>
                     </div>
                     <div class="col3">
                        <span>1 month complimentary Magzter Gold subscription </span>
                        <p>Get access to the most popular magazines including International,
                           Indian and Regional titles like India Today, Filmfare, Vogue India,
                           Outlook Business and more
                        </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col2">
                        <p class="new-img"><img src="{{ asset('frontend/images/mindhouse.png') }}" alt=""></p>
                     </div>
                     <div class="col3">
                        <span>6 month complimentary subscription for live meditation
                        and yoga sessions on the Mindhouse App</span>          
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="avd-sect" id="tnc">
         <div class="container">
         <div class="avd-row">
                  <p>ICICI Bank UK PLC (ICICI Bank UK) is authorised by the Prudential Regulation Authority and regulated by the Financial Conduct Authority and the PRA. It is also covered by the Financial Services Compensation Scheme (FSCS). ICICI Bank UK has branches in Tower Hill, Eastham, Harrow, Southall, Wembley, Birmingham and Manchester. ICICI Bank UK has business centres in Croydon, Reading, Milton Keynes, Coventry, Leicester and Leeds.
                  </p>
                  <p>
                  This Contest shall be governed by terms and conditions provided <a href="https://iciciukcelebrates.com/terms-conditions">here</a>. Nothing contained in this form shall constitute or be deemed to constitute an advice, invitation or solicitation to purchase any products/ services of ICICI Bank UK.
                  </p>
                  <p>ICICI Bank UK does not warrant the accuracy of the information set out herein and the materials contained on the site for any purposes; and does not accept any liability for any direct or indirect loss / claim/ damage caused to any person, arising out of or in relation to the use/reliance of any information communicated herein. </p>
                  <p>Misuse of any intellectual property, or any other content displayed herein is strictly prohibited.</p>
                 
                  <!-- <p><a href="{{ url('/') }}" class="blue-btn">Participate Now</a></p> -->
               </div>
         </div>
      </section>
      <footer>
         <div class="container">
            <p>ICICI BANK UK © 2020, All rights reserved.</p>
         </div>
      </footer>
      <!-- <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}&title=Selfie Page"><img src="{{ asset('frontend/images/facebook.png') }}" alt="facebook"></a> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/vast-engineering/jquery-popup-overlay@2/jquery.popupoverlay.min.js"></script>
      <script type="text/javascript">
         // Add smooth scrolling to all links
         $(document).ready(function(){
           $("header a.smooth").on('click', function(event) {
         
             // Make sure this.hash has a value before overriding default behavior
             if (this.hash !== "") {
               // Prevent default anchor click behavior
               event.preventDefault();
         
               // Store hash
               var hash = this.hash;
         
               // Using jQuery's animate() method to add smooth page scroll
               // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
               $('html, body').animate({
                 scrollTop: $(hash).offset().top
               }, 800, function(){
         
                 // Add hash (#) to URL when done scrolling (default click behavior)
                 // window.location.hash = hash;
               });
             } // End if
           });
         });
      </script>
   </body>
</html>