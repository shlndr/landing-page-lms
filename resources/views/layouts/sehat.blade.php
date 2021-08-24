<!doctype html>
<html> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="Expires" content="1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sehat Ka Rakshakaran</title>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5L3TCVX');</script>
  <!-- End Google Tag Manager -->

<meta name="title" content="Sehat Ka Rakshakaran">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}?v=0.5">
<script src="{{ asset('frontend/js/jquery-3.5.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/vast-engineering/jquery-popup-overlay@2/jquery.popupoverlay.min.js"></script>
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L3TCVX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

      <header>
        <div class="container">
         <div class="lt-logo clearfix">
          <img src="{{ asset('frontend/images/skr-logo.svg') }}" alt="">
        </div>
        <div class="rt-logo clearfix">
          <img src="{{ asset('frontend/images/tata-aia.svg') }}" alt="">
        </div>
      </div>
    </header> 

    @yield('content')

    <section class="avd-sect">
      <div class="container">
        <div class="avd-row">
          <p>Tata AIA Life Insurance Company Limited (IRDAI Regn. No.110) CIN: U66010MH2000PLC128403. Registered &amp; Corporate Office: 14th Floor, Tower A, Peninsula Business Park, Senapati Bapat Marg, Lower Parel, Mumbai - 400013. Trade logo displayed above belongs to Tata Sons Ltd and AIA Group Ltd. and is used by Tata AIA Life Insurance Company Ltd under a license.
            For any information including cancellation, claims and complaints, please contact our Insurance Advisor / Intermediary or visit Tata AIA Life’s nearest branch office or call 1-860-266-9966
          (local charges apply) or write to us at customercare@tataaia.com. Visit us at: www.tataaia.com. L&amp;C/Advt/2020/Sep/1154</p>
          
          
          <div class="dics">
           <p class="title5">BEWARE OF SPURIOUS /FRAUD PHONE CALLS!</p>
           <p>IRDAI is not involved in activities like selling insurance policies, announcing bonus or investment of premiums. Public receiving such phone calls are requested to lodge a police complaint.</p>
           
           
         </div>
         
       </div>
     </div>
   </section>

   <footer>
    <div class="container">
     <p>Tata AIA Life Insurance © 2020, All rights reserved.</p>
     <div class="social">
      <ul>
        <li><a  target="_blank" href="https://www.facebook.com/TataAIALifeInsuranceIndia/"><img src="{{ asset('frontend/images/facebook.png') }}" alt="facebook"></a></li>
        <li><a  target="_blank" href="https://twitter.com/TataAIA_Life"><img src="{{ asset('frontend/images/twitter.png') }}" alt="twitter"></a></li>
        <li><a  target="_blank" href="https://www.linkedin.com/company/tata-aia-life-insurance/"><img src="{{ asset('frontend/images/linkedin.png') }}" alt="linkedin"></a></li>
        <li><a  target="_blank" href="https://www.instagram.com/tataaialifeofficial/"><img src="{{ asset('frontend/images/instagram.png') }}" alt="instagram"></a></li>
        <li><a  target="_blank" href="https://www.youtube.com/channel/UCgcHZe7Nqftuhpzwncr8lTQ"><img src="{{ asset('frontend/images/youtube0.png') }}" alt="youtube"></a></li>
      </ul>
    </div>
  </div>
</footer>

<section class="sticky-box">
 <div class="container">
  <p>Any views or opinions represented are personal and belong solely to the guests/ participants and do not necessarily intend to solicit or represent or reflect Company or its products or its position thereof.<br>Please also note that, by submitting your details, you are giving your consent to receive SMS/Call by Tata AIA Life Insurance Company Limited or its representative, with reference to this solicited inquiry even though you may be registered on the DND list.</p>
  <img src="{{ asset('frontend/images/close-img.png') }}" alt="close">
</div>
</section>

<script type="text/javascript">
  $('img[alt="close"]').click(function(){
    $('.sticky-box').animate({
      opacity: 0,
      display: "none",
    }, 200 );
  });

  $('input[name="agree"]').change(function(){

    if($('input[name="agree"]')[0].checked)
    {
      $('.sticky-box').show().animate({
        opacity: 1,
      }, 200 );
    }else{
      $('.sticky-box').animate({
        opacity: 0,
        display: "none",
      }, 200 );
    }
  });  

  $('#popup1').popup({
    pagecontainer: '#page',
    escape: false
  });
</script>

@yield('scripts')

</body>
</html>