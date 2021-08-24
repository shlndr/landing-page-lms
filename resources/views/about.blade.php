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
      <title>ICICI Bank - Navratri Clix</title>
      <meta name="title" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta property="og:image" content="{{ asset('frontend/images/festive-clix.jpg') }}" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}?v=1">
      @yield('styles')
      <style type="text/css">
         /*.invite-sect{ background: url("{{ asset('frontend/images/invite-banner-xs.jpg') }}")no-repeat top center; background-size: cover;padding: 68px 0 66px;}
         .head-banner{ width: 100%; display: inline-block; background: url("{{ asset('frontend/images/banner.jpg') }}")no-repeat top center; background-size: cover; min-height: 360px;}
         .btn2:before{content: ""; transition: all .3s ease;background: url("{{ asset('frontend/images/arrow-left-line.png') }}")no-repeat;position: absolute;right: 17px;top:12px;width: 16px; height: 16px;}*/
         img[alt="close"]{cursor: pointer;}
         .sticky-box{display: none;}
         a.post, .ger-otp{cursor: pointer;}
         .intotp .error{width: 100px;}
         .agreeLine{text-decoration: underline;}
         @media only screen and (max-width:480px){
         /*.head-banner {
         background: url("{{ asset('frontend/images/banner-xs.jpg') }}") no-repeat top center;
         }
         inner-sect .inner-from {
         max-width: 70%;top: -22px;}*/
         }
         /* Safari */
         @-webkit-keyframes spin {
         0% { -webkit-transform: rotate(0deg); }
         100% { -webkit-transform: rotate(360deg); }
         }
         @keyframes spin {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
         }
         @media only screen and (max-width:600px){
         .mobScreen{display: block;}
         .deskScreen{display: none;}
         }
         @media only screen and (min-width:768px){
         .mobScreen{display: block;}
         .deskScreen{display: none;}
         }
         @media only screen and (min-width:992px){
         .deskScreen{display: block;}
         .mobScreen{display: none;}
         }
         @media only screen and (min-width:600px){
         .deskScreen{display: block;}
         .mobScreen{display: none;}
         }
      </style>
   </head>
   <body>
      <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TRDST4"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
      </head>
      <body id="about">
         <section class="why-sect head-banner inner-sect about">
            <div class="container">
               <div class="inner-from abtsec">
                  <article>
                     <h3>About Contest </h3>
                     <ul>
                        <li>
                           All you have to do is
                           <ul class="bullet">
                              <li>Upload your Navratri photograph and contact details</li>
                              <li>Submit your entry and share it on Facebook</li>
                           </ul>
                        </li>
                        <li class="kuckwinn">
                           <p>10 lucky winners, selected randomly, <b> get Amazon gift cards worth £300.</b></p>
                        </li>
                        <li><b> Get assured prizes on participation:</b>
                        </li>
                        <li class="blubg">
                           <p>Participate and get a 1 month complimentary Magzter Gold subscription and a 6 month complimentary subscription for live meditation and yoga sessions on the Mindhouse App</p>
                        </li>
                        <li class="para">
                           <p>Only one participation entry allowed per mobile number or email ID</p>
                           <p>Contest period: Starting from 17 October 2020 until 25 October 2020 (UK time)</p>
                           <p><a href="{{ url('terms-conditions') }}">Click here</a> for Terms and Conditions </p>
                        </li>
                     </ul>
                     <a href="{{ url('/') }}" class="blue-btn">Participate Now</a>
                  </article>
                  <aside><img src="{{ asset('frontend/images/about-img.png') }}" alt=""></aside>
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
   </body>
</html>