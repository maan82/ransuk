
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>






</head>



<body >
<?php
    include "phmagik/phMagick.php";
    $p = new phMagick("../property_images/source.jpeg","/tmp/destination1.jpeg");
    
    $r = $p->rotate(45);
    echo "RRR  ";
    $a = exec('echo $PATH');
    echo "$a";
?>


<textarea ></textarea>

</body>

</html>