
<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<form action="goodcaptcha.php" method="POST">

    <div class="g-recaptcha" data-sitekey="--YOUR-Google-secret-Key-"></div>
    <input type="submit" name="submit" value="SUBMIT">
</form>
</html>


<?php
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
    {
        //your site secret key
        $secret = '--YOUR-Google-secret-Key-';
        //get verify response data
        $resp = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
       // var_dump($resp);
        $responseData = json_decode($resp,TRUE);
        if($responseData['success'])
        { echo "CAPTCHA is working......";}
        else{ echo "CAPTCHA is not working......";}
    }
    else{ echo "<h3>Please solve the CAPTCHA</h3>";}
?>