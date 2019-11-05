<?php
 
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6Lf2D8EUAAAAAJvtKuuE9rC3iseNcxQHuRtpSg17';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            $succMsg = 'Your contact request have submitted successfully.';
            echo $succMsg;
        }
        else
        {
            $errMsg = 'Robot verification failed, please try again.';
            echo $errMsg;
        }
   }
?>