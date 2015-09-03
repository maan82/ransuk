
<!DOCTYPE html>

<html lang="en">

     <head>



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

     

     <body class="" id="top">

		<?php include('inc-navigation-header.php');?>
		
		<?php include('inc-links-below-header.php');?>

<!--==============================Content=================================-->

<div class="content">

  <div class="container_12 ">

    <div class="grid_12">

      <h3><img src="images/head_icon1.png" alt=""> Bulding Services</h3>

    </div>
    <?php 
    	$services = 
    	array(
    		"Brickwork" => "brickwork.jpg",
    		"Loft Conversion" => "loft-conversions.jpg",
    		"Plastering" => "plastering.jpg",
    		"Tiling" => "tiling.jpg",
    		"Extensions" => "extensions-home.jpg",
    		"Kitchens" => "kitchen-home.jpg",
    		"Bathrooms" => "bathroom-home.jpg",
    		"Driveways" => "driveway.jpg",
    		"Dormars" => "new-dormers.jpg",
    		"New Builds" => "plastering.jpg",
    		"New Roofs" => "new-roofs.jpeg",
    		"Lead Flashing" => "lead-flashing.png",
    		"Gutters & Facias" => "gutters-facias.jpeg",
    		"Chimney Repairs" => "chimney-repair.jpg"
		);
    	foreach($services as $key => $value) { 
    ?>
      <div class="grid_3">
        <div class="box">
          <div class="box_bot">
            <div class="text1"><a href="#"><?php echo $key;?></a></div>
          </div>
          <img src="images/<?php echo $value;?>" alt="" height="163" width="100%">
        </div>
      </div>
    <?php } ;?>


    <div class="grid_12">

      <h3><img src="images/head_icon1.png" alt=""> Roof Services</h3>

    </div>
    <?php 
    	$services = 
    	array(
    		"New Roofs" => "new-roofs.jpeg",
    		"Roof Repairs" => "roof-repairs.jpg",
    		"Tiles Roofs" => "tiles-roofs.jpeg",
    		"Slate Roofs" => "slate-roofs.jpeg",
    		"Flat Roofs" => "flat-roofs.jpeg",
    		"Lead Flashing" => "lead-flashing.png",
    		"Gutters & Facias" => "gutters-facias.jpeg",
    		"Loft Conversion" => "loft-conversions.jpg"
		);
    	foreach($services as $key => $value) { 
    ?>
      <div class="grid_3">
        <div class="box">
          <div class="box_bot">
            <div class="text1"><a href="#"><?php echo $key;?></a></div>
          </div>
          <img src="images/<?php echo $value;?>" alt="" height="163" width="100%">
        </div>
      </div>
    <?php } ;?>

    <div class="grid_12">

      <h3><img src="images/head_icon1.png" alt=""> Other Services</h3>

    </div>
    <?php 
    	$services = 
    	array(
    		"Plumbing" => "plumbing.jpg",
    		"Heating" => "heating.jpg",
    		"Electrical" => "electrical.jpg",
    		"Carpentry" => "carpentry.jpg",
    		"Demolishing" => "demolishing.jpg",
    		"Decorating" => "decorating.jpg",
		);
    	foreach($services as $key => $value) { 
    ?>
      <div class="grid_3">
        <div class="box">
          <div class="box_bot">
            <div class="text1"><a href="#"><?php echo $key;?></a></div>
          </div>
          <img src="images/<?php echo $value;?>" alt="" height="163" width="100%">
        </div>
      </div>
    <?php } ;?>



  </div>

</div>

<?php include('inc-footer.php'); ?>
  

  

</body>

</html>



