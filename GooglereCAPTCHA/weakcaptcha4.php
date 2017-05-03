
<?php
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))

    {
            $secret = 'your secret key here';
            echo "CAPTCHA answer is correct.";
            echo "<br>";
            echo "Hey ".$_POST['email']." You have successfully registered on our website.";
    }
    else
    {
            echo "CAPTCHA answer is NOT correct.";
    }

?>