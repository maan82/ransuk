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
    }

}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form_contactform") && ($error['form_contactform'] != 'form_contactform')) {
  $insertSQL = sprintf("INSERT INTO query (NATURE, NAME, PHONE, EMAIL_ID, QUERY_TEXT) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['form_contactform_subject'], "text"),
                       GetSQLValueString($_POST['form_contactform_name'], "text"),
                       GetSQLValueString($_POST['form_contactform_phone'], "text"),
                       GetSQLValueString($_POST['form_contactform_email'], "text"),
                       GetSQLValueString($_POST['form_contactform_query'], "text"));


  $Result1 = mysql_query($insertSQL) or die(mysql_error());
  
        $query_emailconfRS = "SELECT * FROM email_configuration WHERE TYPE = 'CONTACT_US'";
        $emailconfRS = mysql_query($query_emailconfRS) or die(mysql_error());
        $row_emailconfRS = mysql_fetch_assoc($emailconfRS);
        $totalRows_emailconfRS = mysql_num_rows($emailconfRS);
          $CustomHeaders= '';
          $message = new Email($row_emailconfRS['TO'], $row_emailconfRS['FROM'], $row_emailconfRS['SUBJECT'], $CustomHeaders);

          $text = "\n Subject :- ".$_POST['form_contactform_subject'];
          $text .= "\n Name :- ".$_POST['form_contactform_name'];
          $text .= "\n Phone :- ".$_POST['form_contactform_phone']; 
          $text .= "\n Email :- ".$_POST['form_contactform_email']; 
          $text .= "\n Message :- ".$_POST['form_contactform_query'];

          $message->SetTextContent($text);
          $message->Send();

  $form_contactform_success = "Y";
}

?>
    <div class="grid_9">
           <form id="form" method="POST"  name="form_contactform" enctype="multipart/form-data">
                           
                     <div class="success_wrapper">
                     <div class="success-message">Contact form submitted</div>
                     </div>
                    <label class="name">
                        <input type="text" placeholder="Name*" data-constraints="@Required @JustLetters" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid name.</span>
                    </label>
                    <label class="email">
                        <input type="text" placeholder="E-mail*" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>
                    <label class="phone ">
                        <input type="text" placeholder="Phone*" data-constraints="@Required @JustNumbers"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>

                     <div class="grid_6 alpha">
                    <label class="message">
                        <textarea placeholder="Message*" data-constraints='@Required @Length(min=5,max=999999)'></textarea>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>

                     </div>
                     <div class="grid_3 alpha">
      <label class="captcha">
      
      <input placeholder="CAPTCHA Code*" type="text" name="form_contactform_captcha_code" data-constraints="@Required"/><br />
        <span class="empty-message">*This field is required.</span>
        <span class="error-message">*Value not match with image.</span>
      
         <span class="label">Please enter code shown below in the CAPTCHA Code.</span><br  />
            <img id="captcha_form_contactform" src="captcha/securimage_show_small_4letters.php" alt="CAPTCHA Image" />
      <a href="#" onclick="document.getElementById('captcha_form_contactform').src = 'captcha/securimage_show_small_4letters.php?' + Math.random(); return false">
        <img src="captcha/images/refresh.gif" width="22" height="20" alt="Refresh" style="border-style:none; margin:0; padding:0px; vertical-align:top;"/>
      </a>
      

      <a id="si_aud_ctf1" href="captcha/securimage_play.php" rel="nofollow" title="CAPTCHA Audio"> 
        <img src="captcha/images/audio_icon.gif" alt="CAPTCHA Audio" style="border-style:none; margin:0; padding:0px; vertical-align:top;" onclick="this.blur();" />
      </a> 
      <br />
   

          <?php if( isset($error) && $error['CAPTCHA']  == 'CONTACTFORM'){ ?>
  
<span class="label" style="color:#CC3333">You have entered wrong code.Please try again.</span>
    <?php } ?>
    </label>
</div>
                     <div class=" grid_3 omega">
                     <div class="btns">
                       
                        
                     <a  data-type="submit">submit</a>
                     </div>
                     <div class="clear"></div></div>
                      <input class="formname" type="hidden" name="MM_insert" value="form_contactform" />
                     </form>  
                     <div class="clear"></div>
                     All fields with an * are required. 
    </div>