
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AKELA HI KAAFI HAI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KHFXMPM');</script>
<!-- End Google Tag Manager -->

<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-10559103"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-10559103');
</script>
<!-- End of global snippet: Please do not remove -->

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">
<script src="{{ asset('frontend/js/jquery-3.5.1.min.js') }}" type="text/javascript"></script>
<script src= "{{ asset('frontend/js/owl.carousel.js') }}"></script>

<script src="{{ asset('frontend/js/app.js') }}" type="text/javascript"></script>
<style type="text/css">
   img[alt="close"]{cursor: pointer;}
   .sticky-box{display: none;}
   a.post, .ger-otp{cursor: pointer;}
   .intotp .error{width: 100px;}
   .agreeLine{text-decoration: underline;}
   @media only screen and (max-width:480px){
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
@yield('styles')
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHFXMPM"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!--
  Event snippet for Pageview on : Please do not remove.
  Place this snippet on pages with events you’re tracking. 
  Creation date: 12/24/2020
  -->
  <script>
    gtag('event', 'conversion', {
      'allow_custom_scripts': true,
      'send_to': 'DC-10559103/invmedia/pagev0+unique'
    });
  </script>
  <noscript>
  <img src="https://ad.doubleclick.net/ddm/activity/src=10559103;type=invmedia;cat=pagev0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=1;num=1?" width="1" height="1" alt=""/>
  </noscript>
  <!-- End of event snippet: Please do not remove -->

@yield('content')
<!-- <footer>
          <div class="container">
             <p>Copyright 2020 Akela Hi Kaafi Hai. All rights reserved.</p>
            </div>
        </footer> -->

<footer>
  <div class="container">
     <p>Copyright 2020 Akela Hi Kaafi Hai. All rights reserved.</p>
      <div class="social">
        <ul>
          <li><a href="https://www.facebook.com/tatapravesh" target="_blank"><img src="{{ asset('frontend/images/facebook.png') }}" alt="facebook"></a></li>
          <li><a href="https://www.instagram.com/tatapravesh/" target="_blank"><img src="{{ asset('frontend/images/instagram.png') }}" alt="instagram"></a></li>
          <li><a href="https://www.linkedin.com/company/tata-pravesh/" target="_blank"><img src="{{ asset('frontend/images/linkedin.png') }}" alt="linkedin"></a></li>
          <li><a href="https://www.youtube.com/channel/UCqm5l8IxRDS3akkfRAbvluQ" target="_blank"><img src="{{ asset('frontend/images/youtube.png') }}" alt="youtube"></a></li>
          <li><a href="https://twitter.com/TataPravesh/" target="_blank"><img src="{{ asset('frontend/images/twitter.png') }}" alt="youtube"></a></li>

        <!--<li><a href="#"><img src="images/youtube0.png" alt="youtube"></a></li>-->
        </ul>
      </div>
    </div>
</footer>
  
        <script src="{{ asset('frontend/js/jquery.popupoverlay.js') }}"></script>
      <script src="{{ asset('frontend/js/new-script.js') }}"></script>
    
<!--video-script-start--> 
  
<script>
// function toggleMute() {

// var video=document.getElementById("bgvid");

// if(video.muted){
//   video.muted = false;
// } else {
//   //debugger;
//   video.muted = false;
//   video.play()
// }

// }

// $(document).ready(function(){
// setTimeout(toggleMute,50000);
// })

// $('ul#radio li').click(function(){
//
//
//       $('.arwImg').addClass('active');
//     });


</script> 
<!--video-script-start-->   
  @yield('scripts')
  
  

</body>
</html>