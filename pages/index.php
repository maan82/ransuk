<!DOCTYPE html>
<!-- saved from url=(0045)http://livedemo00.template-help.com/wt_48035/ -->
<html lang="en">
	<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta charset="utf-8">
     <meta name="format-detection" content="telephone=no">
     <?php include('inc-head.php');?>
     <link rel="stylesheet" href="css/camera.css">
     <link rel="stylesheet" href="css/form.css">
     <link rel="stylesheet" href="css/touchTouch.css">
     <link rel="stylesheet" href="css/style.css">
     <script type="text/javascript" async="" src="./Home_files/ga.js"></script>
     <script src="./Home_files/jquery-n.js"></script>
     <script src="./Home_files/jquery-migrate-1.1.1.js"></script>
     <script src="./Home_files/script.js"></script>
     <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0"> 
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
<div class="slider_wrapper ">
  <div id="camera_wrap" class="camera_wrap" >
    <div data-src="images/slide-1.jpg" data-thumb="images/thumb.jpg">
    <div class="camera_caption">
                   <div class="caption" >
        <h2><span>Building</span> Home you want.</h2>
        <a href="services.php">More information</a>
      </div>
                </div>
      
    </div>
    <div data-src="images/slide-2.jpg" data-thumb="images/thumb1.jpg">
    <div class="camera_caption">
                   <div class="caption">
        <h2><span>Roof</span> that lasts.</h2>
         <a href="services.php">More information</a>
      </div>
                </div>
    </div>
    <div data-src="images/slide-3.jpg" data-thumb="images/thumb2.jpg">
    <div class="camera_caption">
                   <div class="caption">
        <h2><span>Kitchens</span> you love.</h2>
        <a href="services.php">More information</a>
      </div>
                </div>
    </div>
    <div data-src="images/slide-4.jpg" data-thumb="images/thumb2.jpg">
    <div class="camera_caption">
                   <div class="caption">
        <h2><span>Plumbing</span> you can trust.</h2>
        
 	 <a href="services.php">More information</a>
      </div>
                </div>
    </div>
    <div data-src="images/slide-5.jpg" data-thumb="images/thumb2.jpg">
    <div class="camera_caption">
                   <div class="caption">
        <h2><span>Bathroom</span> with style.</h2>
        <a href="services.php">More information</a>
      </div>
                </div>
    </div>
    <div data-src="images/slide-6.jpg" data-thumb="images/thumb2.jpg">
    <div class="camera_caption">
                   <div class="caption">
        <h2><span>Architect</span> sorts everything.</h2>
        <a href="services.php">More information</a>
      </div>
                </div>
    </div>

  </div>
</div>
<?php include('inc-links-below-header.php');?>

<!--==============================Content=================================-->
<div class="content">
  <div class="container_12 ">
  	<div class="grid_12">
<?php include('inc-projects.php'); ?>
    </div>
    <div class="grid_6">
      <h3 class="head1"><img src="./Home_files/head_icon2.png" alt=""> Why Us?</h3>
      <ul class="list">
        <li>
          <div class="count">1.</div>
          <div class="extra_wrapper">
          Among builders in Hounslow, Southall and Feltham, we have years of experience, a wide range of expertise and a complete commitment to the needs and requests of our clients
          </div>
        </li>
        <li>
          <div class="count">2.</div>
          <div class="extra_wrapper">
             While we would be happy to recommend good ways to reach your goals, every project belongs to you and you have the right to customize each detail. You can trust that we’ll take your requests seriously and make sure that you have input on every single detail that interests you, no matter how small. Of course, we’ll always tell you when we predict any safety shortcomings or problems that could prevent you from enjoying your finished project to the fullest.
			</div>
        </li>
        <li>
          <div class="count">3.</div>
          <div class="extra_wrapper">
          With years of experience we finish the work on time and within your budget.
          </div>
        </li>
      </ul>
    </div>
    <div class="grid_6">
      <h3 class="head1"><img src="./Home_files/head_icon3.png" alt="">Services Gallery</h3>
      <div class="gallery1 gallery2">
	    <?php 
	    	$services = 
	    	array(
	    		"Brickwork" => "brickwork.jpg",
	    		"Loft Conversion" => "loft-conversions.jpg",
	    		"Tiling" => "tiling.jpg",
	    		"Extensions" => "extensions-home.jpg",
	    		"Kitchens" => "kitchen-home.jpg",
	    		"Bathrooms" => "bathroom-home.jpg",
	    		"Driveways" => "driveway.jpg",
	    		"Dormars" => "new-dormers.jpg",
	    		"New Builds" => "plastering.jpg",
	    		"New Roofs" => "new-roofs.jpeg",
	    		"Lead Flashing" => "lead-flashing.png",
	    		"Gutters & Facias" => "gutters-facias.jpeg"
			);
	    	foreach($services as $key => $value) { 
	    ?>
	        <a href="images/<?php echo $value;?>" class="gal">
	        	<span style="color: red"><?php echo $key;?></span>
	        	<img src="images/<?php echo $value;?>" alt="" width="100" height="83" >
	    	</a>
	    <?php } ;?>

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