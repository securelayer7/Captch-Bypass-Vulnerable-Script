<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<form action="weakcaptcha2.php" method="POST">

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
        $responseheader = $http_response_header['0'];
        if($responseheader == 'HTTP/1.0 200 OK')
        {
            echo "CAPTCHA answer is correct.";
        }
        else
        {
            echo "CAPTCHA answer is NOT correct.";
        }
    }
    else
        {
            echo "<h3>Please answer the CAPTCHA</h3>";
        }
?>