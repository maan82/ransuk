<?php require_once('Connections/adestate.php'); ?>
<?php 
require_once('functions.php');
require_once('class.Email.php'); 

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form_contactform") ) {
    
    $error = array();//Error messages array

    include_once("captcha/securimage.php");
    $securimage = new Securimage();
    if ($securimage->check($_POST['form_contactform_captcha_code']) == false) {
        $error['form_contactform'] = 'form_contactform';
        $error['CAPTCHA'] = 'CONTACTFORM';
        echo "captcha_error";
    }

}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form_contactform") && ($error['form_contactform'] != 'form_contactform')) {
  $insertSQL = sprintf("INSERT INTO query (NATURE, NAME, PHONE, EMAIL_ID, QUERY_TEXT) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString('Contact Us Message', "text"),
                       GetSQLValueString($_POST['form_contactform_name'], "text"),
                       GetSQLValueString($_POST['form_contactform_phone'], "text"),
                       GetSQLValueString($_POST['form_contactform_email'], "text"),
                       GetSQLValueString($_POST['form_contactform_message'], "text"));


  $Result1 = mysql_query($insertSQL) or die(mysql_error());
  echo "Res : ".$Result1;
        $query_emailconfRS = "SELECT * FROM email_configuration WHERE TYPE = 'CONTACT_US'";
        $emailconfRS = mysql_query($query_emailconfRS) or die(mysql_error());
        $row_emailconfRS = mysql_fetch_assoc($emailconfRS);
        $totalRows_emailconfRS = mysql_num_rows($emailconfRS);
          $CustomHeaders= '';
          $message = new Email($row_emailconfRS['TO'], $row_emailconfRS['FROM'], $row_emailconfRS['SUBJECT'], $CustomHeaders);

          $text = "\n Subject :- New RANSUK Contact Us Message";
          $text .= "\n Name :- ".$_POST['form_contactform_name'];
          $text .= "\n Phone :- ".$_POST['form_contactform_phone']; 
          $text .= "\n Email :- ".$_POST['form_contactform_email']; 
          $text .= "\n Message :- ".$_POST['form_contactform_message'];
  echo $text;

          $message->SetTextContent($text);
          $message->Send();

  $form_contactform_success = "Y";
}

?>

