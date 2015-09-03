<!DOCTYPE html>
<!-- saved from url=(0045)http://livedemo00.template-help.com/wt_48035/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta charset="utf-8">
     <meta name="format-detection" content="telephone=no">
     <?php include('inc-head.php');?>
     <link rel="stylesheet" href="css/camera.css">
     <link rel="stylesheet" href="css/form.css">
     <link rel="stylesheet" href="css/touchTouch.css">
     <link rel="stylesheet" href="css/style.css">
     <script type="text/javascript" async="" src="./Home_files/ga.js"></script><script src="./Home_files/jquery-n.js"></script>
     <script src="./Home_files/jquery-migrate-1.1.1.js"></script>
     <script src="./Home_files/script.js"></script><meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0"> 
     <script src="./Home_files/jquery.ui.totop.js"></script>
     <script src="./Home_files/sForm.js"></script>
     <script src="./Home_files/TMForm.js"></script>
     <script src="./Home_files/jquery.equalheights.js"></script>
     <script src="./Home_files/jquery.mobilemenu.js"></script>
     <script src="./Home_files/jquery.easing.1.3.js"></script>
     <script src="./Home_files/touchTouch.jquery.js"></script>
     <script src="./Home_files/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="./Home_files/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
     <script>

       $(document).ready(function(){
       jQuery('#camera_wrap').camera({
            loader: false,
            pagination: false ,
            minHeight: '250',
            thumbnails: false,
            height: '40.42857142857143%',
            caption: true,
            navigation: true,
            fx: 'mosaic'
          });
        $('.gallery1 a.gal').touchTouch();
       

            


     }); 



     </script>

      <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->

     </head>
     
     <body class="page1" id="top">
 		<?php include('inc-navigation-header.php');?>
		
		<?php include('inc-links-below-header.php');?>

 <!--==============================Content=================================-->
<div class="content">
  <div class="container_12 ">
    <div class="grid_12">
      <div class="map">
            <figure class=" ">
                          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
               </figure>
              
          </div>

    </div>
    <div class="grid_12">
      <h3 class="head2"><img src="./Home_files/head_icon4.png" alt=""> Contacts</h3>
    </div>

<?php include('inc-address.php'); ?>

<?php include('inc-contact-us-form.php'); ?>

  </div>
</div>
<?php include('inc-footer.php'); ?>
  



<div id="galleryOverlay" style="display: none;"><div id="gallerySlider"><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div><div class="placeholder"></div></div><a id="prevArrow"></a><a id="nextArrow"></a></div></body></html>