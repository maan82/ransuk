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

$maxRows_propRS = 18;
if (isset($_GET['maxRows_Search_Res_RS']) && $_GET['maxRows_Search_Res_RS'] != "") {
  $maxRows_propRS = $_GET['maxRows_Search_Res_RS'];
}
/*if(isset($_GET['viewas']) &&  strcmp($_GET['viewas'],"M")== 0){ 
    $maxRows_propRS = 999999999;
}*/

$pageNum_propRS = 0;
if (isset($_GET['pageNum_propRS'])) {
  $pageNum_propRS = $_GET['pageNum_propRS'];
}
$startRow_propRS = $pageNum_propRS * $maxRows_propRS;

$colname_propRS_for = "3";

$orderBy_propRS = "ABS(PRICE) ASC";
if (isset($_GET['form_searchresults_sortby']) && $_GET['form_searchresults_sortby'] != "") {
  $orderBy_propRS = $_GET['form_searchresults_sortby'];
}


$query_propRS = sprintf("SELECT * FROM property_details_website_view where PROPERTY_FOR_ID = %s ORDER BY %s",$colname_propRS_for,$orderBy_propRS);
$query_limit_propRS = sprintf("%s LIMIT %d, %d", $query_propRS, $startRow_propRS, $maxRows_propRS);
$propRS = mysql_query($query_limit_propRS) or die(mysql_error());
$row_propRS = mysql_fetch_assoc($propRS);
//echo $query_limit_propRS;
if (isset($_GET['totalRows_propRS'])) {
  $totalRows_propRS = $_GET['totalRows_propRS'];
} else {
  $all_propRS = mysql_query($query_propRS);
  $totalRows_propRS = mysql_num_rows($all_propRS);
}
$totalPages_propRS = ceil($totalRows_propRS/$maxRows_propRS)-1;

$queryString_propRS = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_propRS") == false && 
        stristr($param, "totalRows_propRS") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_propRS = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_propRS = sprintf("&totalRows_propRS=%d%s", $totalRows_propRS, $queryString_propRS);
?>

    <div class="grid_12">
      <h3><img src="./Home_files/head_icon1.png" alt=""> featured Projects</h3>
    </div>
    <div class="gallery1">
      <?php if ($totalRows_propRS > 0) { // Show if recordset not empty ?>
          <?php do { ?>

              <div class="grid_3">
                <a href="<?php echo $row_propRS['FULL_PIC_PATH']; ?>" class="gal"><img src="<?php echo $row_propRS['SLIDE_PIC_PATH']; ?>" alt=""><span></span></a>
                <div class="text1">
                    <a href="http://livedemo00.template-help.com/wt_48035/#"><?php echo $row_propRS['BRIEF_DESCRIPTION'] ?></a>
                </div>
                <?php echo $row_propRS['PROPERTY_ID'] ?>
                    <?php echo substr($row_propRS['DETAIL_DESCRIPTION'], 0, 200); ?> 
                    <br>
                <a href="#" class="btn">More info</a>
              </div>
          <?php } while ($row_propRS = mysql_fetch_assoc($propRS)); ?>
      <?php } // Show if recordset not empty ?>

    </div>
