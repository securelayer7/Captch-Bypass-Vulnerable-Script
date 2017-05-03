<?php
session_start();
$code1=rand(10,99);
$code2=rand(10,99);
$ans = $code1 + $code2;
$_SESSION["code"]=$ans;
?>
<html>
<h3>Please solve the CAPTCHA</h3>
<?php
echo $code1."+".$code2;
?>
<br>
<br>
<form action="captchaarithvalidate.php" method="post">
<input name="captcha" type="text">
<input name="submit" type="submit" value="Submit">
</form>
</html>

