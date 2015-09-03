   <?php require_once('constants.php'); ?>

     <header>
     
<!--==============================header=================================-->
    
      <div class="container_12">
        <div class="grid_12">
        <h1>
        <a href="index.php">
          <img src="images/logo-small.jpg" alt="RANSUK builder in <?php echo $SEO_CITIES;?>.">
        </a>
      </h1>
    
            
      


<div class="menu_block ">
  <nav class="horizontal-nav full-width horizontalNav-notprocessed">
    <ul class="sf-menu sf-js-enabled sf-arrows">
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'index.php') !== FALSE) { echo 'class="current"';};?>><a href="index.php">Home</a></li>
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'about-us.php') !== FALSE) { echo 'class="current"';};?>><a href="about-us.php">About Us</a></li>
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'services.php') !== FALSE) { echo 'class="current"';};?>><a href="services.php">Services</a></li>
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'projects.php') !== FALSE) { echo 'class="current"';};?>><a href="projects.php">Projects</a></li>
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'contact-us.php') !== FALSE) { echo 'class="current"';};?>><a href="contact-us.php">Contact Us</a></li>
       </ul>
    </nav>
   <div class="clear"></div>
</div>
<div class="socials" >
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55e46e96495cf7ee" async="async"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>
</div>
      </div>
      </div>
    
</header>
