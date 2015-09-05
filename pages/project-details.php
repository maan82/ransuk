<?php require_once('constants.php'); ?>
<?php require_once('functions.php'); ?>
<?php require_once('Connections/adestate.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$colname_propRS = "-1";
if (isset($_GET['PROPERTY_ID'])) {
  $colname_propRS = $_GET['PROPERTY_ID'];
}

if(strpos($_SESSION['MM_Roles'],"Add or Edit Property") === false ){ //Do nothing
$query_propRS = sprintf("SELECT * FROM property_details_website_view WHERE PROPERTY_ID = %s", GetSQLValueString($colname_propRS, "int"));
} else {
$query_propRS = sprintf("SELECT * FROM user_property_owner_receiver_amount_view WHERE PROPERTY_ID = %s", GetSQLValueString($colname_propRS, "int"));

}

$propRS = mysql_query($query_propRS) or die(mysql_error());
$row_propRS = mysql_fetch_assoc($propRS);
$totalRows_propRS = mysql_num_rows($propRS);


$query_picturesRS = sprintf("SELECT * FROM pictures WHERE PROPERTY_ID = %s and (TITLE IS NULL or TITLE IN('STC'))  ORDER BY IS_MAIN DESC", GetSQLValueString($colname_propRS, "int"));
$picturesRS = mysql_query($query_picturesRS) or die(mysql_error());
$row_picturesRS = mysql_fetch_assoc($picturesRS);
$totalRows_picturesRS = mysql_num_rows($picturesRS);

?>

<!DOCTYPE html>

<html lang="en">

     <head>


     <meta charset="utf-8">
     <meta name="format-detection" content="telephone=no">
     <?php include('inc-head.php');?>
     <link rel="stylesheet" href="css/camera-2.css">
     <link rel="stylesheet" href="css/form.css">
     <link rel="stylesheet" href="css/touchTouch.css">
     <link rel="stylesheet" href="css/style.css">
     <script type="text/javascript" async="" src="./Home_files/ga.js"></script><script src="./Home_files/jquery-n.js"></script>
     <script src="./Home_files/jquery-migrate-1.1.1.js"></script>
     
     <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0"> 
     <script src="./Home_files/jquery.ui.totop.js"></script>
     <script src="./Home_files/jquery.equalheights.js"></script>
     <script src="./Home_files/jquery.mobilemenu.js"></script>
     <script src="./Home_files/jquery.easing.1.3.js"></script>
     <script src="./Home_files/touchTouch.jquery.js"></script>
     <script src="./Home_files/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="./Home_files/jquery.mobile.customized.min.js"></script>
     <script src="./Home_files/fadeslideshow.js" type="text/javascript"></script> 
     <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=<?php echo $MAP_API_KEY?>" type="text/javascript"></script>
     <script src="http://www.google.com/uds/api?file=uds.js&amp;v=1.0&amp;key=<?php echo $MAP_API_KEY?>" type="text/javascript"></script>

     <!--<![endif]-->
     <script>
     
       
       
 
 
      var pointData = new Array();
pointData[0] = {
                id : "<?php echo $row_propRS['PROPERTY_ID']; ?>",
                lat : <?php echo $row_propRS['LATITUDE']; ?>,
                lon : <?php echo $row_propRS['LONGITUDE']; ?>,
                desc : '<iframe src="propertyfadeshowformap.php?PROPERTY_ID=<?php echo $row_propRS['PROPERTY_ID']; ?>" height="170" width="220" frameborder="0" scrolling="no"></iframe>'
               };

function showPropOnMap() {
    pointArr = pointData;
        document.getElementById('wrapper').innerHTML='';
    document.getElementById('wrapper').innerHTML='<div id="map" style="width: 100%; height: 480px"></div>';
    if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GLargeMapControl());
        map.addControl(new GMapTypeControl());
        var point = new GLatLng(pointArr[0].lat,pointArr[0].lon);
        map.setCenter(point, 17, G_NORMAL_MAP);
        var openMarker = true;
        pointElement = pointArr[0];
        var marker = new GMarker(point);
        map.addOverlay(marker);
        marker.openInfoWindowHtml(pointElement.desc);
    }
}


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
      <h3><img src="./Home_files/head_icon1.png" alt=""> Project Details</h3>
    </div>
    <div class="clear"></div>
    <div class="grid_12">
  
        
        
        <div class="fluid_container ">
    <div id="camera_wrap" class="camera_wrap camera_magenta_skin" >
        
     <?php   do { ?>
<?php if($row_picturesRS['TITLE']=='STC')  continue; ?>
 
        <div data-src="<?php echo $row_picturesRS['ORIGINAL_PIC_PATH']; ?>" data-thumb="<?php echo $row_picturesRS['THUMB_PIC_PATH']; ?>">
      
          
    </div>     
      
        
  
  <?php } while ($row_picturesRS = mysql_fetch_assoc($picturesRS));?>
        </div>

   </div>
      <div class="grid_12">
          <p>
             <?php echo $row_propRS['BRIEF_DESCRIPTION']; ?> 
          </p>

          <p>
             <?php echo $row_propRS['DETAIL_DESCRIPTION']; ?> 
          </p>
          
      </br>
<div id="wrapper"></div>

      </div>  
     

    </div>

    
  </div>

</div>

<?php include('inc-footer.php'); ?>

  

  
<script type="text/javascript">
<!--

jQuery('#camera_wrap').camera({
            //height: '400px',
                pagination: false,
                thumbnails: true
          });
          
     
showPropOnMap();
//-->
</script>
</body>

</html>



