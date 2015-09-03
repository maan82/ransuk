<!--==============================footer=================================-->
  <footer>   
    <div class="container_12">
      <div class="grid_12">
    <ul class="copy" style="float: left">
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'index.php') !== FALSE) { echo 'class="current"';};?>><a href="index.php">Home</a></li>
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'about-us.php') !== FALSE) { echo 'class="current"';};?>><a href="about-us.php">About Us</a></li>
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'services.php') !== FALSE) { echo 'class="current"';};?>><a href="services.php">Services</a></li>
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'projects.php') !== FALSE) { echo 'class="current"';};?>><a href="projects.php">Projects</a></li>
         <li <?php if(strpos($_SERVER['REQUEST_URI'], 'contact-us.php') !== FALSE) { echo 'class="current"';};?>><a href="contact-us.php">Contact Us</a></li>
       </ul>

        <div class="copy" style="float: right">
        RANSUK Best Home For You   © <span id="copyright-year">2015</span> 
 <!--{%FOOTER_LINK} --><div></div>
        </div>
      </div>
    </div>  
  </footer>
